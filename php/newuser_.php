<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Nou usuari</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
    
    <?php
    $usuari = "";
    $password = "";
    $nom = "";
    $llinatge = "";
    $llinatge2 = "";
        if (isset($_POST['submit'])) {
        $usuari = $_POST['usuari'];
        $password = $_POST['password'];
        $nom = $_POST['nom'];
        $llinatge = $_POST['llinatge'];
        $llinatge2 = $_POST['llinatge2'];
        echo "nom: $nom llinatge: $llinatge<br>";
        $output_form = false;
        
        if (empty($usuari) || empty($password)||empty($nom)||empty($llinatge)||empty($llinatge2)){
            ?>
            <h2>Informació incompleta</h2>
            
            <?php
        }else{
            $output_form=true;
            }
            
        if ($output_form){
            $dbc = mysqli_connect('172.16.11.108', 'pau', 'pau', 'SIRIUS_DB')
        or die('Error connecting to MySQL server.');
        $query = "insert into users (Usuari,Password,Nom,Llinatge,Llinatge2) 
                    values ('$usuari','$password','$nom','$llinatge','$llinatge2');";
        echo "___".$query."<br/>";
        $result = mysqli_query($dbc, $query)
        or die('Error querying database.');
        mysqli_close($dbc);
        $usuari = "";
        $password = "";
        $nom = "";
        $llinatge = "";
        $llinatge2 = "";
            
            }
    }
        
    ?>
    
	<h1>Alta nou usuari</h1>
    <form method="post" action="newuser_.php">
			
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
	
</body>

</html>
