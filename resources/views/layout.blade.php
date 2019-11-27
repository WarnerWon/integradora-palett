<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/label-style.css">
  <link rel="icon" type="image/png" href=" ">
  <script src="/js/fontawesome.js" crossorigin="anonymous"></script>

</head>

<body>
    @include('navbar')

    <div class="container" id="main">
      <div style="padding: 1em;">
          <h1 class="display-4 text-center">Palett</h1>
          <p class="lead text-center">Heladeria Adelita</p>
      </div>

      @yield('content')

    </div>
    
    

  <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>