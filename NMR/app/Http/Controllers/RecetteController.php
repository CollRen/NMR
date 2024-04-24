<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;




class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recettes = Recette::all(); 
        return view('recette.index', ['recettes' => $recettes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::categories();
        return view('recette.create', compact('categories'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'completed' => 'nullable|boolean',
            'due_date' => 'nullable|date',
            'category_id' => 'required|exists:categories,id'
        ],
        [],//custom message
        ['category_id' => 'Category'] //custom attribute
    );
    
        $recette = Recette::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'ingredient_id' => $request->ingredient_id,
            'etape_id' => $request->etape_id,
        ]);
    
        return redirect()->route('recette.show', $recette->id)->with('success', 'Recette created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Recette $recette)
    {   
        return view('recette.show', ['recette'=>$recette]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recette $recette)
    {
        return view('recette.edit', ['recette'=>$recette]);
    }

    /**
     * Update the specified resource in storage.
     * @param $request represents the incoming HTTP request
     * @param $recette    represents the recette to be updated
     */
    public function update(Request $request, Recette $recette)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        $recette->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'completed' => $request->input('completed', false),
            'due_date' => $request->due_date,
        ]);
    
        return redirect()->route('recette.show', $recette->id)->with('success', 'Recette updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recette $recette)
    {
        $recette->delete();
    
        return redirect()->route('recette.index')->with('success', 'Recette deleted successfully.');
    }
    
}
