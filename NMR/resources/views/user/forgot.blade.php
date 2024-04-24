@extends('partials.base')
@section('title', 'Forgot Password')
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
    <div>
        <div>
            <div>
                <div>
                    <h5>Forgot Password</h5>
                </div>
                <div>
                    <form  method="POST">
                        @csrf
                        <div>
                            <label for="username">Username</label>
                                <input type="text" id="username" name="email" value="{{old('email')}}">
                            </div>
                        <button type="submit">Forgot Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
