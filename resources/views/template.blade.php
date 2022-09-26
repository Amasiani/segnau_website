<!doctype html>
<html lang="en">
  <head>
  	<link rel="shortcut icon" href="#">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--<link rel="stylesheet" type="text/css" href="{%static 'css/style.css'%}">-->
    <title>SEG-NAU - @yield('title')</title>
  </head>
  <body id="top">
    <div class="">
     <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><img src="assets/images/seg-nau.jpg" alt="segnau_logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
            @unless (Auth::check())
            <li class="nav-item">
              <a class="nav-link" href=" {{ url('/join') }}">Join</a>
            </li>
            @endunless
            <li class="nav-item">
              <a class="nav-link " href=" {{ url('/blog') }}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href=" {{ url('/contact') }}">Contact</a>
            </li>
            @if(Route::has('login'))
            <li class="nav-item">
              <a class="nav-link " href="#">Database</a>
            </li>
            @endif
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search for post..." aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      @include('partials.alerts')
      @yield('content')
       <!-- Get intouch with us -->
        <div class="social-media">
          <div class="social-heading"><h3 class="text-center ">Get in Touch</h3></div>
          <div class="social-links">
            <ul>
              <li>
                <a href=""><i class="ri-facebook-box-fill"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/eastsunetwork" target="blank"><i class="ri-twitter-fill"></i></a>
              </li>
              <li>
                <a href=""><i class="ri-linkedin-box-fill"></i></i></a>
              </li>
              <li>
                <a href=""><i class="ri-mail-fill"></i></a>
              </li>

            </ul>
          </div>
        </div>
        <!-- End Get intouch with us -->
        <!-- Footer -->

      </div>
      <div style="margin-bottom: 30px; padding: 5px;"> <a href="#top" class="btn btn-outline-primary btn-sm round" style="float:right;"><i class="ri-arrow-up-line" style="font-size:15px; font-weight: bold;"></i></i></a></div>
       <div class="Footer ">
          <div class="Text">
            <p>
              
              Website designed by Eastsun Network Ltd<br>
              © 2022 | Privacy Policy 
            </p>
            <p><span> <a class="mytwitter" href="https://twitter.com/eastsunnetwork"><i class="ri-twitter-fill"></i></a></span></p>
          </div>
        </div>
    </div>
    <!--<script type="text/javascript" src="{%static 'js/main.js'%}"> </script>-->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   
  </body>
</html>