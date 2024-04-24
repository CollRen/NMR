@extends('partials.base')
@section('title', 'Add Recette')
@section('content')
    <h1>Add Recette</h1>
    <div>
        <div>
            <div>
                <div>
                    <h5>Add New Recette</h5>
                </div>
                <div>
                    <form action="{{ route('recette.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title"
                                value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                <div>
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <div>
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                        </div>
                        <div>
                            <label for="completed">Completed</label>
                            <input type="checkbox" id="completed" name="completed" value="1"
                                {{ old('completed') ? 'checked' : '' }}>
                            @if ($errors->has('completed'))
                                <div>
                                    {{ $errors->first('completed') }}
                                </div>
                            @endif
                        </div>
                        <div>
                            <label for="due_date">Due Date</label>
                            <input type="date" id="due_date" name="due_date"
                                value="{{ old('due_date') }}">
                            @if ($errors->has('due_date'))
                                <div>
                                    {{ $errors->first('due_date') }}
                                </div>
                            @endif
                            <div>
                                <label for="ingredient_id">Recette Ingredient</label>
                                <select name="ingredient_id" id="ingredient_id" >
                                    <option value="">Select a Recette Ingredient</option>
                                    @foreach ($ingredients as $ingredient)
                                        <option value="{{ $ingredient['id'] }}"
                                            @if ($ingredient['id'] == old('ingredient_id')) selected @endif>{{ $ingredient['ingredient'] }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('ingredient_id'))
                                    <div>
                                        {{ $errors->first('ingredient_id') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <button type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
