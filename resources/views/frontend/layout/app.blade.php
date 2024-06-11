<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{config('app.name','Workspace')}}</title>
  <link rel="stylesheet" href="{{asset("assets/css/main.css")}}" />
  <link rel="stylesheet" href="{{asset("assets/css/normalize.css")}}" />
  <link rel="stylesheet" href="{{asset("assets/css/all.min.css")}}" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

</head>

<body>
  <!-- ======= Header ======= -->
  <nav>
    <div class="logo"><a href="/" class="logo">Workspace</a></div>
    <div class="nav-items">
    @if(Auth::check())
    @if(Auth::user()->type == 'client') <!-- Check if the type of auth is user -->
        <a href="{{route("show-freelancers")}}">Find Freelancers</a>
    @elseif(Auth::user()->type == 'freelancer')
        <a href="{{route("find.Job")}}">Find Jobs</a>
        
    @else
        <a href="{{route("show-freelancers")}}">Find Freelancers</a>
        <a href="{{route("find.Job")}}">Find Jobs</a>
    @endif
@else
    <a href="{{route("show-freelancers")}}">Find Freelancers</a>
    <a href="{{route("find.Job")}}">Find Jobs</a>
@endif



      <a href="/#about-us">Why Workspace</a>
      @if(Auth::check())
        <a href="{{ route('Profile') }}">My Profile</a>
    @endif
      @guest
      <a href="/login">Login</a>
      @else
      <a href="{{ route('logout') }}">Logout</a>
      @endguest
    </div>
  </nav>
  <!-- End Header -->

  @yield("content")

  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/script.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>