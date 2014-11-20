<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Report</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
    
    <?php
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $how_many = $_POST['howmany'];
    $alien_description = $_POST['aliendescription'];
    $fang_spotted = $_POST['fangspotted'];
    $what_they_did = $_POST['whattheydid'];
    $email = $_POST['email'];
    $other = $_POST['other'];
    
    
    
    ?>
    
    <h1>msg:: <?php echo $msg;?></h1>
    <h1>Thanks for submitting the form.</h1>
    <p>You where abducted<?php echo $when_it_happened;?> and were gone for <?php echo $how_long;?></p>
    <p>Describe them:<?php echo $alien_description;?></p>
    <p>Was Fang there?<?php echo $fang_spotted;?></p>
    <p>First name:<?php echo $frist_name;?></p>
    <p>Last name:<?php echo $last_name;?></p>
    <p>How many did you see?<?php echo $how_many;?></p>
    <p>Anything else you want to add?<?php echo $other;?></p>
    
    <?php
	$dbc = mysqli_connect('172.16.11.108', 'pau', 'pau', 'aliendatabase')
	or die('Error connecting to MySQL server.');
	$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happend, how_long, " .
	"how_many, alien_description, what_they_did, fang_spotted, other, email) " .
	"VALUES ('$first_name', '$last_name', '$when_it_happend', '$how_long', '$how_many', '$alien_description', " .
	"'$what_they_did', '$fang_spotted', '$other',  " .
	"'$email')";
	echo "___".$query."<br/>";
	$result = mysqli_query($dbc, $query)
	or die('Error querying database.');
	mysqli_close($dbc);
	
	
	
	?>
   
</body>

</html>
