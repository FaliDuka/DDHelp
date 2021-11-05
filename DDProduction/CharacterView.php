<?php
   session_start();

// We need to use sessions, so you should always start sessions using the below code.

$DATABASE_HOST = 'aa1r3vx5tyutlo3.ctns8zlbhhqu.us-east-2.rds.amazonaws.com';
$DATABASE_USER = 'admin';
$DATABASE_PASS = 'Kutztown!';
$DATABASE_NAME = 'ebdb';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>
  <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>D&D Helper</title>
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
						<a href="Charactercreation.html" class="nav-item nav-link" data-toggle="dropdown">Create Character</a>
											</li>
					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Dice</a>
											</li>
					<li><a href="logout.php" class="nav-item nav-link">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

	
	<div class="banner">
		<div class="container">
  

<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>

<h2 align="center"> Characters</h2>
	<?php

  $characterColumns = array(
    'Chname' => 'Character Name',
    'lvlE' => 'Level',
    'Hit' => 'Hit',
    'Throws' => 'Throws',
    'Initiative' => 'Initiative',
    'Speed' => 'Speed',
    'Inspir' => 'Inspiration',
    'PB' => 'Proficiency bonus',
    'PW' => 'Passive wisdom',
    'FT' => 'Features and Traits',
    'Prof' => 'Proficiency',
    'WEAP' => 'Weapons',
    'Arm' => 'Armor',
    'Trinkets' => 'Trinkets',
    'Acrobatics' => 'Acrobatics',
    'animalHandling' => 'Animal Handling',
    'Arcana' => 'Arcana',
    'Athletics' => 'Athletics',
    'Deception' => 'Deception',
    'History' => 'History',
    'Insight' => 'Insight',
    'Intimidation' => 'Intimidation',
    'Investigation' => 'Investigation',
    'Medicine' => 'Medicine',
    'Nature' => 'Nature',
    'Perception' => 'Perception',
    'Persuation' => 'Persuation',
    'Religion' => 'Religion',
    'Sleightofhand' => 'Sleightofhand',
    'stealth' => 'stealth',
    'Survival' => 'Survival',
    'Strength' => 'Strength',
    'Dexterity' => 'Dexterity',
    'Constitution' => 'Constitution',
    'Intelligence' => 'Intelligence',
    'Wisdom' => 'Wisdom',
    'Charisma' => 'Charisma'
  );



//$stmt = $con->prepare("SELECT Chname,lvlE,Hit,Throws,Init,Speed,Inspir,PB,PW,FT,Prof,WEAP,Arm,Trinkets,Acrobatics,animalHandling,Arcana,Athletics,Deception,History,Insight,Intimidation,Investigation,Medicine,Nature,Perception,Persuation,Religion,Sleightofhand,stealth,Survival,Strength,Dexterity,Constitution,Intelligence,Wisdom,Charisma FROM Characters WHERE id = '$_SESSION[\'id\']';");
$stmtColumns = implode(',', array_keys($characterColumns));

$stmt = $con->query("SELECT $stmtColumns FROM Characters WHERE AccountID = " . $_SESSION['id']);
while ($result = $stmt -> fetch_assoc()){

	foreach($characterColumns as $columnName => $columnDisplayValue) {

    echo "<b>" . $columnDisplayValue . ":</b> " . $result[$columnName] . "<br>";

  }

}

?>

<p><a href="homepage.php">Back to home</a></p>



		</div>

</body>
</html>
