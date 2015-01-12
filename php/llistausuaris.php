<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Llista usauris</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<?php
	 $dbc = mysqli_connect('172.16.11.108', 'pau', 'pau', 'SIRIUS_DB')
        or die('Error connecting to MySQL server.');
     $sql = "select id,Usuari,Nom,Llinatge,Llinatge2 from users;";
	 $result = mysqli_query($dbc, $sql) or die('Error querying database.');

	 ?>	 
	 <table border='1'>
			<tr>
				<th>&nbsp;</th>
				<th>Usuari</th>
				<th>Nom</th>
				<th>Llinatge</th>
				<th>Llinatge2</th>
			</tr>
	<?php
	while($row = mysqli_fetch_array($result)){
		?>
		<tr>
			<td>&nbsp;</td>
			<td><a href="updateuser.php?id=<?= $row['id']?>"><?=$row['Usuari']?></a></td>
			<td><?=$row['Nom']?></td>
			<td><?=$row['Llinatge']?></td>
			<td><?=$row['Llinatge2']?></td>
		</tr>
		
		<?php
		}
	?>
	</table>
	
</body>
</html>
