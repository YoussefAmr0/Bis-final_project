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
        <link
          href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap"
          rel="stylesheet"
        />
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

      </head>
      <body>
  <!-- ======= Header ======= -->
  <nav>
    <div class="logo">Workspace</div>
    <div class="nav-items">
      <a href="/">Find Freelancers</a>
       <a href="/">Find Clients</a>
        <a href="/">Why Workspace</a>

    </div>
  </nav>
  <!-- End Header -->

@yield("content")

<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

</body>
</html>
