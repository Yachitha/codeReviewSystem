<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Code Review System</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" media="screen" href="particles.js/css/style.css">
        <style>
            html, body {
                background-color:#317f43;
                background-image: url("background1.jpg");
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            #topic{
                color: #ffffff;
                padding-left: 10px;
                font-family: 'Raleway',sans-serif;
                padding-top: 10px;
                position:relative;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
                color: #ccd2dd;
                font-family: Franklin Gothic Book;
                font-size: 22px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;

            }



            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #e7f7ff;
                padding: 10px 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                margin-left: 10px;
            }

            .m-b-md {
                margin-bottom: 30px;

            }
            
        </style>
    </head>
    <body>
        <nav>
        <div class="top-left">
            CodeRev
        </div>
        <div class="flex-center position-ref full-height" id="particles-js" style="position: relative;">
       

         @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-dark">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-dark">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-dark">Register</a>
                    @endauth
                </div>
            @endif
         </div>
         </nav>
        <!-- imported for particle js -->
        <!-- particles.js container -->
        <!-- <div id="particles-js"></div> -->
        

        <!-- scripts -->
        <script src="/particles.js/particles.js"></script>
        <script src="/particles.js/demo/js/app.js"></script>


        <!-- stats.js -->
        <script src="particles.js/demo/js/lib/stats.js"></script>
     
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ url ('/particles.js/particles.js') }}"></script>
</html>
