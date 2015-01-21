<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Update Client</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	 <?php
	 
		$id = "";
		$nom = "";
		$cif = "";
		$domicili = "";
		$codipostal = "";
		$telefon = "";
		
		$dbc = mysqli_connect('172.16.11.108', 'pau', 'pau', 'GESTIO_DB')
        or die('Error connecting to MySQL server.');
		if (isset($_POST['submit'])) {
		//hem de fer update
		//recollim els valors amb $_POST
		$id=$_POST['id'];
		$nom=$_POST['nom'];
		$cif=$_POST['cif'];
		$domicili=$_POST['domicili'];
		$codipostal=$_POST['codipostal'];
		$telefon=$_POST['telefon'];
		
		
		
		//CONSTRUIM UPDATE	
		$sql="UPDATE client SET nom='$nom', cif='$cif, domicili='$domicili', codipostal='$codipostal', telefon='$telefon'
		where id=$id";
		echo "$sql <br>";
	}else{
    
		//hem fet clic a un nom i el volem editat
        
        $id=$_GET['id'];
        echo "id: $id<br/>";
        $sql = "select id, nom, cif, domicili, codipostal, telefon from client WHERE id=$id";
        echo "$sql <br>";
        $result = mysqli_query($dbc, $sql)  or die('Error querying database. ');
       	$row = mysqli_fetch_array ($result);

		$nom=$row['nom'];
		$cif=$row['cif'];
		$domicili=$row['domicili'];
		$codipostal=$row['codipostal'];
		$telefon=$row['telefon'];
	}
        
    ?>

		<h1>MODIFICA CLIENT</h1>
    <form method="post" action="updateclient.php">
			
			<input type="text" name="id" value="<?=$id?>" />
			
			<label for="nom">Nom</label> 
			<input type="text" name="nom" id="nom" value="<?=$nom?>" /><br/>
			
			<label for="cif">CIF</label> 
			<input type="text" name="cif" id="cif" value="<?=$cif?>" /><br/>
		
			<label for="domicili">Domicili</label> 
			<input type="text" name="domicili" id="domicili" value="<?=$domicili?>" /><br/>
			
			<label for="codipostal">Codipostal</label> 
			<input type="text" name="codipostal" id="codipostal" value="<?=$codipostal?>" /><br/>
		
			<label for="telefon">Telefon</label> 
			<input type="text" name="telefon" id="telefon" value="<?=$telefon?>" /><br/>
			
			<input type="submit" value="submit" name="submit" />
		</form>
		
		<a href="Llistaclient.php">Tornar al llistat</a>
	
</body>

</html>
