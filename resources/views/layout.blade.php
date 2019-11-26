<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/label-style.css">
</head>

<body>
    <nav class="vertical-menu">
        
        <a href="view" class="active"><span class="icon fa-home"></span></a>
        <a href="view"><span class="icon fa-camera-retro"></span></a>
        <a href="view"><span class="icon fa-file-text-o"></span></a>

    </nav>
    
    @yield('content')

    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>