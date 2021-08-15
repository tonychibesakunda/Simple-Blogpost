@extends('layouts.app')

@section('content')
    <form action="{{ route('login') }}" method="POST" class="login-form">
        @csrf
        <h1>Login</h1>
        <div>
            <span class="Error">
                @if (session('status'))
                    <p class="text-center font-weight-bold">{{ session('status') }}</p>
                @endif
            </span>
        </div>     
        <div class="txtb">
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            <span data-placeholder="Email"></span>
        </div>
        <span class="Error">
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </span>   
        <div class="txtb">
            <input type="password" name="password" id="password">
            <span data-placeholder="Password"></span>
        </div>
        <span class="Error">
            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </span>
        <input type="submit" class="logbtn" value="login">

        <div class="bottom-text">

            Forgot Password? <a href="#"> Click here </a>

        </div>

    </form> 

    <script type="text/javascript">
        $(".txtb input").on("focus", function(){
            $(this).addClass("focus");
        });

        $(".txtb input").on("blur", function(){
            $(this).addClass("focus");
            if($(this).val() == "")
            $(this).removeClass("focus");
        });        
    </script>

@endsection