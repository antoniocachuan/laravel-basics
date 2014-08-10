<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Aplicacion con Laravel</title>
	<link rel="stylesheet" href="css/foundation.css" />
	<script scr="js/vendor/modernizr.js"></script>
</head>
<body>
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name">
				<h1>
					<a href="#">ODOT</a>
				</h1>
			</li>
		</ul>
	</nav>

	<div class="row">
		<div class="large-12">
			@yield('content')
		</div>
	</div>

	<footer class="row">
		<div class="large-12 columns">
			<hr/>
			<div class="row">
				<div class="large-6 columns">
					<p>Antonio Cachuan</p>
				</div>
			</div>
		</div>	
	</footer>

	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>