<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>New user</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	 <?php
		$nom = "";
        $cif = "";
        $domicili = "";
        $codipostal = "";
        $telefon = "";
        
        if (isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $cif = $_POST['cif'];
        $domicili = $_POST['domicili'];
        $codipostal = $_POST['codipostal'];
        $telefon = $_POST['telefon'];
        
        $output_form = false;
        
        if (empty($nom) || empty($cif)||empty($domicili)||empty($codipostal)||empty($telefon)){
            ?>
            <h2>Informació incompleta</h2>
            
            <?php
        }else{
            $output_form=true;
            }
            
        if ($output_form){
            $dbc = mysqli_connect('172.16.11.108', 'pau', 'pau', 'GESTIO_DB')
        or die('Error connecting to MySQL server.');
        $query = "insert into client (nom,cif,domicili,codipostal,telefon) 
                    values ('$nom','$cif','$domicili','$codipostal','$telefon');";
        echo "___".$query."<br/>";
        $result = mysqli_query($dbc, $query)
        or die('Error querying database.');
        mysqli_close($dbc);
        $nom = "";
        $cif = "";
        $domicili = "";
        $codipostal = "";
        $telefon = "";
            
            }
    }
        
    ?>
    
	<h1>Alta nou usuari</h1>
    <form method="post" action="NewUser.php">
			
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
</body>

</html>
