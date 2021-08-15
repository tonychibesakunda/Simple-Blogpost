<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="UTF-8"></script>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather+Sans|Montserrat|Noto+Sans|Raleway&display=swap" rel="stylesheet">


    <title>Blog Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
  

    <style>
        html,body
        {
            width: auto;
            margin: auto;
        }
        .container
        {
            width: 500px;
            margin: 20px auto;
        }

        .preview
        {
            padding: 10px;
            position: relative;
        }

        .preview i
        {
            color: white;
            font-size: 35px;
            transform: translate(50px,130px);
        }

        .preview-img
        {
            border-radius: 100%;
            box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.7);
        }

        .browse-button
        {
            width: 200px;
            height: 200px;
            border-radius: 100%;
            position: absolute; /* Tweak the position property if the element seems to be unfit */
            top: 10px;
            left: 132px;
            background: linear-gradient(180deg, transparent, black);
            opacity: 0;
            transition: 0.3s ease;
        }

        .browse-button:hover
        {
            opacity: 1;
        }

        .browse-input
        {
            width: 200px;
            height: 200px;
            border-radius: 100%;
            transform: translate(-1px,-26px);
            opacity: 0;
        }

        .form-group
        {
            width:  250px;
            margin: 10px auto;
        }

        .form-group input
        {
            transition: 0.3s linear;
        }

        .form-group input:focus
        {
            border: 1px solid crimson;
            box-shadow: 0 0 0 0;
        }

        .Error
        {
            color: crimson;
            font-size: 13px;
        }

        .Back
        {
            font-size: 25px;
        }




        * {
        margin: 0;
        padding: 0;
        text-decoration: none;
        font-family: 'Montserrat', sans-serif;
        box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background-image: linear-gradient(120deg, #3498db, #8e44ad);
        }

        .login-form {
            width: 360px;
            background: #f1f1f1;
            height: 580px;
            padding: 80px 40px;
            border-radius: 10px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .login-form h1 {
            text-align: center;
            margin-bottom: 60px;
        }

        .txtb {
            border-bottom: 2px solid #adadad;
            position: relative;
            margin: 30px 0;
        }

        .txtb input {
            font-size: 15px;
            color: #333;
            border: none;
            width: 100%;
            outline: none;
            background: none;
            padding: 0 5px;
            height: 40px;
        }

        .txtb span::before{
            content: attr(data-placeholder);
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%);
            z-index: -1;
            transition: .5s;
        }

        .txtb span::after{
            content: '';
            position: absolute;
            width: 0%;
            height: 2px;
            left: 0;
            bottom: -2px;
            background: linear-gradient(120deg, #3498db, #8e44ad);
            transition: .5s;
        }

        .focus + span::before{
            top: -5px;
        }
        .focus + span::after{
            width: 100%;
        }

        .logbtn{
            display: block;
            width: 100%;
            height: 40px;
            border: none;
            background: linear-gradient(120deg,#3498db, #8e44ad, #3498db );
            background-size: 200%;
            color: #fff;
            outline: none;
            cursor: pointer;
            transition: .5s;
        }

        .logbtn:hover{
            background-position: right;
        }

        .bottom-text{
            margin-top: 50px;
            text-align: center;
            font-size: 13px;
        }
        
        .bottom-text a:hover{
            text-decoration: none;
        }


    </style>

    </head>
  <body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Blog Post</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    @endauth
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end">
                    @auth
                        <li>
                            <a class="nav-link text-dark" href="#">Welcome {{ Auth::user()->name }}</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-link text-dark">Logout</button>
                            </form>
                        </li>
                    @endauth

                    @guest
                        <li>    
                            <a class="nav-link text-dark" href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a class="nav-link text-dark" href="{{ route('register') }}">Register</a>
                        </li>
                    @endguest
                </ul>
                <!--<form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div> 
         
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            function Back()
            {
                window.history.back({{ route('posts') });
            }
        </script>

  </body>
</html>