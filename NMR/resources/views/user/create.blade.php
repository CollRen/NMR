@extends('partials.base')
@section('title', 'Registration')
@section('content')
    @if(!$errors->isEmpty())
    <div  role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>     
        <button type="button"  data-bs-dismiss="alert" aria-label="Close"></button>
    </div>                
    @endif
    <h1>Registration</h1>
    <div>
        <div>
            <div>
                <div>
                    <h5>Registration</h5>
                </div>
                <div>
                    <form  method="POST">
                        @csrf
                        <div>
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value="{{old('name')}}">
                        </div>
                        <div>
                            <label for="username">Username</label>
                                <input type="text" id="username" name="email"  value="{{old('email')}}">
                            </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <button type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
