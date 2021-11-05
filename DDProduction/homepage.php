<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: homepage.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Character Creation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'><link rel="stylesheet" href="./Charactercreation.css">

    </head>
<body>
<!-- partial:index.partial.html -->
<header class="header-area overlay">
    <nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
			</a><img alt="D&D Logo" width= "60" height="60" style ="vertical-align:bottom" class="hCL kVc L4E MIw" importance="auto" loading="auto" src="https://cdn.shopify.com/s/files/1/0890/1750/files/full_colorno_txt_no_flames_9955d095-d56c-4bfe-905f-d54071c4d4da_600x.png"><a href="homepage.php" class="navbar-brand">D&D Helper</a>
			
			<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
			</button>
			
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="homepage.php" class="nav-item nav-link active">Home</a></li>
					<li class="dropdown">
						<a href="Charactercreation.html" class="nav-item nav-link" data-toggle="dropdown">Character Sheet</a>
					<li><a href="CharacterView.php" class="nav-item nav-link">View Character</a></li>
					<a href="dice.html" class="nav-item nav-link" data-toggle="dropdown">Dice</a>
					<li><a href="logout.php" class="nav-item nav-link">Logout</a></li>
					
				</ul>
			</div>
		</div>
	</nav>
    
    <br>
    </br>
		<div class="register">

<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>



        

				             
	
					
		<h2 align="center">Welcome back, <?=$_SESSION['name']?>!</h2>
		
	</body>
</html>
			
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script><script  src="./script.js"></script>

</body>

</html>
