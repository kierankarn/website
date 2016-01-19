<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/style.css" media="screen">
	<title>Kieran Karn</title>
</head>
<body>
	<div class="overlay">	
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="portfolio.php">Portfolio</a></li>
				<li><a href="blog.php">Blog</a></li>
			</ul>
		</nav>
	</div>
	<div class="container">
	<header class="header">
		<a href="index.php"><img src="assets/images/logo.png" alt="logo"></a>
		<button id="overlay-menu" class="menuButton" type="button"><i class="fa fa-bars"></i></button>
	</header>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
	$( "#overlay-menu" ).on('click', function() {
		$( ".overlay" ).toggleClass('overlay-open');
		$( this ).find('.fa').toggleClass('fa-bars fa-times-circle');
	});	

</script>
	<div class="header-image">
	</div>
</body>