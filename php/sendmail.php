<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ca" lang="ca">

<head>
	<title>Correu enviat!</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	<?php
		$subject=$_POST['subject'];
		$elvimail=$_POST['elvimail'];
		
		echo "SUBJECT: $subject <br/> MSG: $elvimail<br/>";
		$dbc = mysqli_connect('172.16.2.33', 'pamenguall', '123', 'elvis_store')
		or die('Error connecting to MySQL server.');
		$query = "SELECT first_name,last_name,email FROM email_list";
		$result = mysqli_query($dbc, $query);
		?>
		<table border="1" cellpadding="0" cellspacing="0">
			<tr>
				<th>&nbsp;</th>
				<th>Nom</th>
				<th>Cognom</th>
				<th>Email</th>
				<th>Assumpte</th>
				<th>Missatge</th>
			</tr>
		<?php
		$i=0;
		while($row = mysqli_fetch_array($result)){
			$i=$i+1;
		?>
			<tr>
				<td><?= $i ?></td>
				<td><?= $row['first_name']?></td>
				<td><?= $row['last_name']?></td>
				<td><?= $row['email']?></td>
				<td><?= $subject?></td>
				<td><?= $elvimail?></td>
			</tr>	
	<?php
	}
	?>
	</table>
	<?php
	mysqli_close($dbc);
	?>
</body>

</html>
