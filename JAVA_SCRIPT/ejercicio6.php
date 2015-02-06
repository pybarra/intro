<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Ejercicio 6</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
	<script>
	
	var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
	
	var numero = prompt("Introdueix el DNI");
	var letra = prompt("Introdueix la lletra");
	
	if(numero < 0 || numero > 99999999) {
		alert ("No és válid");
	}
	else {
	  var letraCalculada = letras[numero % 23];
	  if(letraCalculada != letra) {
		alert("No són correctes");
	  }
	  else {
		alert('Són correctes, el seu NIF és:' + numero+letra);
	  }
	}

	</script>
</head>

<body>
	
	<p onclick="alert('ejercicio 6')">Ejercicio 6</p>
	
</body>

</html>
