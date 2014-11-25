<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>New user.php</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
     <?php
		$usuari = $_POST['usuari'];
		$password = $_POST['password'];
		
		$dbc = mysqli_connect('172.16.11.108', 'pau', 'pau', 'SIRIUS_DB')
		or die('Error connecting to MySQL server.');
		$query ="SELECT usuari, password, nom, llinatge, llinatge2 FROM users where usuari='$usuari'";
		echo "$query<br>";
		
		$result = mysqli_query($dbc, $query);
		$row = mysqli_fetch_array($result);
		
		if ($password==$row['password']){
			echo "LOGIN CORRECTE<BR>";
			echo "<h1>Benvingut ".$row['usuari']." " .$row['nom']." " .$row['llinatge']." " .$row['llinatge2']. "</h1>";
		}else{
			echo "LOGIN INCORRECTE<BR>";
			echo "<h1><a href='login.html'>Error</a></h1>";
		}
		?>
		
		
		
</body>

</html>
