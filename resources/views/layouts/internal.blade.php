<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Friday Godswill <faradayyg@gmail.com>">

  <title>Figma Africa Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="/css/internal.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    @include('partials/internal/sidebar')

    <!-- Page Content -->
    <div id="page-content-wrapper">

      @include('partials/internal/navbar')
      @if(Session::has('danger'))
          <div class="alert alert-danger">
              {{session('danger')}}
          </div>
      @elseif(Session::has('success'))
          <div class="alert alert-success">
              {{session('success')}}
          </div>
      @endif
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <div class="p-2">
          @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="/js/app.js"></script>

</body>

</html>
