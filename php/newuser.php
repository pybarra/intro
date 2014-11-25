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
		$nombre = $_POST['nombre'];
		$llinatge = $_POST['llinatge'];
		$llinatge2 = $_POST['llinatge2'];
		
		echo "usuari: $usuari password: $password nombre: $nombre llinatge: $llinatge llinatge2: $llinatge2<br>";
   
    
   
	$dbc = mysqli_connect('172.16.11.108', 'pau', 'pau', 'SIRIUS_DB')
	
	or die('Error connecting to MySQL server.');
	
	$query = "insert into users (Usuari, Password, Nom, Llinatge,Llinatge2) 
	VALUES ('$usuari', '$password', '$nombre', '$llinatge', '$llinatge2');";
	
	echo "___".$query."<br/>";
	$result = mysqli_query($dbc, $query)
	or die('Error querying database.');
	mysqli_close($dbc);

	?>
   
</body>

</html>
