<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @yield('title', 'Student Management')
    </title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>

    <!-- Static navbar -->
     
        <div class="container">
          
           
          
         
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{ route('index') }}">Home</a></li>
              <li><a href="{{ route('create') }}">Create</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              @if (Auth::check())
                <li><a href="{{ route('home') }}">Dashboard</a></li>
              @else
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
              @endif


            </ul>
          </div><!--/.nav-collapse -->
        <!--/.container-fluid -->
      

      <div class="container">
        @yield('content')
      </div>


    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>


  </body>
</html>