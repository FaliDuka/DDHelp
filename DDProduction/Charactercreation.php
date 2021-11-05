  <?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: homepage.php');
	exit;
}
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
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="Charactercreation.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
			
	<h1>DnD Helper+ Character Creation</h1>
    <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
	<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
	</div>
	</nav>
	<div class="content">
   
<?php
 $aid= $_SESSION['id'];
// $un = $_POST['Uname']; 
 $nn= $_POST['Chname'] ? $_POST['Chname'] : "";
 //$st=$_POST['stats'];
 //$sk=$_POST['skills'];
// $cd=$_POST['CharData'];
 $lvl=$_POST['lvlE'];
 $hit=$_POST['Hit'];
 $thr=$_POST['Throws'];
 $Initiative=$_POST['Initiative'];
 $sp=$_POST['Speed'];
 $insp=$_POST['Inspir'];
 $pb=$_POST['PB'];
 $pw=$_POST['PW'];
 $ft=$_POST['FT'];
 $prof=$_POST['Prof'];
 $weap=$_POST['Weap'];
 $arm=$_POST['Arm'];
 $tr=$_POST['Trinkets'];
 $Ac=$_POST['Acrobatics'];
 //$Ac = array_key_exists("Acrobatics", $_POST);
 $AH=$_POST['animalHandling'];
 //$AH = array_key_exists("animalHandling", $_POST);
 $Arc=$_POST['Arcana'];
 //$Arc = array_key_exists("Arcana", $_POST);
 $Alth=$_POST['Athletics'];
 //$Alth = array_key_exists("Athletics", $_POST);
 $Dec=$_POST['Deception'];
 //$Dec = array_key_exists("Deception", $_POST);
  $His=$_POST['History'];
  //$His = array_key_exists("History", $_POST);
 $ins=$_POST['Insight'];
  //$ins = array_key_exists("Insight", $_POST);
 $Intim=$_POST['Intimidation'];
 // $Intim = array_key_exists("Intimidation", $_POST);
 $inves=$_POST['Investigation'];
  //$inves = array_key_exists("Investigation", $_POST);
 $Med=$_POST['Medicine'];
 //$Med = array_key_exists("Medicine", $_POST);
 $Nat=$_POST['Nature'];
 //$Nat = array_key_exists("Nature", $_POST);
 $perc=$_POST['Perception'];
  //$perc = array_key_exists("Perception", $_POST);
 $pers=$_POST['Persuation'];
 //$pers = array_key_exists("Persuation", $_POST);
 $rel=$_POST['Religion'];
 // $rel = array_key_exists("Religion", $_POST);
 $SlH=$_POST['Sleightofhand'];
  // $SlH = array_key_exists("Sleightofhand", $_POST);
 $Ste=$_POST['stealth'];
    //$Ste = array_key_exists("stealth", $_POST);
 $surv=$_POST['Survival'];
 //$surv = array_key_exists("Survival", $_POST);
 $Str=$_POST['Strength'];
 $Dext=$_POST['Dexterity'];
 $Cons=$_POST['Constitution'];
 $INtell=$_POST['Intelligence'];
 $wis=$_POST['Wisdom'];
 $Cha=$_POST['Charisma'];
 $stmt = $con->prepare("INSERT INTO Characters (Chname,lvlE,Hit,Throws,Initiative,Speed,Inspir,PB,PW,FT,Prof,WEAP,Arm,Trinkets,Acrobatics,animalHandling,Arcana,Athletics,Deception,History,Insight,Intimidation,Investigation,Medicine,Nature,Perception,Persuation,Religion,Sleightofhand,stealth,Survival,Strength,Dexterity,Constitution,Intelligence,Wisdom,Charisma, AccountID) values ('$nn','$lvl','$hit','$thr','$Initiative','$sp','$insp','$pb','$pw','$ft','$prof','$weap','$arm','$tr','$Ac','$AH','$Arc','$Alth','$Dec','$His','$ins','$Intim','$inves','$Med','$Nat','$perc','$pers','$rel','$SlH','$Ste','$surv','$Str','$Dext','$Cons','$INtell','$wis','$Cha','$aid')");
?>
<?php
if ($stmt)
{
	//echo "run query";
	$output = $stmt->execute();
	$stmt->store_result();
	if ($output){
?>
		<h2> Character Created </h2>
		<p><?=$_SESSION['name']?>'s Character has been created</p> 
<?php 
	} 
	else {
?>
		<h2> Error Creating Character </h2> 
		<p><?=$_SESSION['name']?>'s Character has not been created</p>
<?php		
		//print_r($con->error);
	}
}
 else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
?>
	
	<h2> Database Error </h2> 
		<p>Unable to connect to database.</p>
<?php
}

?>




<p><a href="homepage.php">Back to home</a></p>
<p><a href="Charactercreation.html">Make another hero</a></p>

		
		</div>
	</body>
</html>
