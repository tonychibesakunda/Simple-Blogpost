@extends('layouts.app')

@section('content')
    <div class="container">
        <!--<div class="Back">
                <i class="fa fa-arrow-left" onclick="Back()"></i>
            </div>-->
            <p class="h2 text-center">Registration Form</p>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="preview text-center">
                    <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" width="200" height="200"/>
                    <div class="browse-button">
                        <i class="fa fa-pencil-alt"></i>
                        <!--<input class="browse-input" type="file" required name="UploadedFile" id="UploadedFile"/>-->
                    </div>
                    <span class="Error"></span>
                </div>
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input class="form-control @error('name') border-danger @enderror" required type="text" name="name" id="name" placeholder="Enter Your Full Name" value="{{ old('name') }}"/>
                    <span class="Error">
                        @error('name')
                            <p class="text-light">{{ $message }}</p>
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input class="form-control @error('username') border-danger @enderror" required type="text" name="username" id="username" placeholder="Enter Username" value="{{ old('username') }}"/>
                    <span class="Error">
                        @error('username')
                            <p class="text-light">{{ $message }}</p>
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control @error('email') border-danger @enderror" required type="email" name="email" id="email" placeholder="Enter Your Email" value="{{ old('email') }}"/>
                    <span class="Error">
                        @error('email')
                            <p class="text-light">{{ $message }}</p>
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form-control @error('password') border-danger @enderror" required type="password" name="password" id="password" placeholder="Enter a password"/>
                    <span class="Error">
                        @error('password')
                            <p class="text-light">{{ $message }}</p>
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Repeat Password:</label>
                    <input class="form-control @error('password_confirmation') border-danger @enderror" required type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"/>
                    <span class="Error">
                        @error('password_confirmation')
                            <p class="text-light">{{ $message }}</p>
                        @enderror
                    </span>
                </div>
                <!--<div class="form-group">
                    <label>Gender:</label><br/>
                    <label><input type="radio" name="gender" required value="Male" checked /> Male</label>
                    <label><input type="radio" name="gender" required value="Female" /> Female</label>
                    <label><input type="radio" name="gender" required value="Other" /> Other</label>
                    <span class="Error"></span>
                </div>-->
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
                </div>
            </form>
        </div>
@endsection