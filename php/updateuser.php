<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Update User</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	 <?php
	 
		$usuari = "";
		$password = "";
		$nombre = "";
		$llinatge = "";
		$llinatge2 = "";
		$id = "";
		
		$dbc = mysqli_connect('172.16.11.108', 'pau', 'pau', 'SIRIUS_DB')
        or die('Error connecting to MySQL server.');
		if (isset($_POST['submit'])) {
		//hem de fer update
		//recollim els valors amb $_POST
		$id=$_POST['id'];
		$usuari=$_POST['usuari'];
		$password=$_POST['password'];
		$nom=$_POST['nom'];
		$llinatge=$_POST['llinatge'];
		$llinatge2=$_POST['llinatge2'];
		
		
		
		//CONSTRUIM UPDATE	
		$sql="UPDATE users SET usuari='$usuari', nom='$nom, llinatge='$llinatge', llinatge2='$llinatge2', password='$password'
		where id=$id";
		echo "$sql <br>";
	}else{
    
		//hem fet clic a un usuari i el volem editat
        
        $id=$_GET['id'];
        echo "id: $id<br/>";
        $sql = "select id, Usuari, Password, Nom, Llinatge, Llinatge2 from users WHERE id=$id;";
        $result = mysqli_query($dbc, $sql) or die('Error querying database.');
       	$row = mysqli_fetch_array ($result);

		$usuari=$row['Usuari'];
		$password=$row['Password'];
		$nom=$row['Nom'];
		$llinatge=$row['Llinatge'];
		$llinatge2=$row['Llinatge2'];
	}
        
    ?>

		<h1>MODIFICA USUARI</h1>
    <form method="post" action="updateuser.php">
			
			<input type="hidden" name="id" value="<?=$id?>" />
			<label for="usuari">Usuari</label> 
			<input type="text" name="usuari" id="usuari" value="<?=$usuari?>" /><br/>
			
			<label for="password">Password</label> 
			<input type="password" name="password" id="password" value="<?=$password?>" /><br/>
		
			<label for="nombre">Nom</label> 
			<input type="text" name="nom" id="nom" value="<?=$nom?>" /><br/>
			
			<label for="llinatge">Llinatge</label> 
			<input type="text" name="llinatge" id="llinatge" value="<?=$llinatge?>" /><br/>
		
			<label for="llinatge2">Llinatge2</label> 
			<input type="text" name="llinatge2" id="llinatge2" value="<?=$llinatge2?>" /><br/>
			
			<input type="submit" value="submit" name="submit" />
		</form>
		
		<a href="llistausuaris.php">Tornar al llistat</a>
	
</body>

</html>
