<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Funcions 2</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
	<script>
		
		function palindrom(cadena){//exercici 9
			//PRIMER HEM DE LLEVAR ELS ESPAIS EN BLANC
			var cadenaAux = "";
			for (c in cadena){
				if(cadena[c]!= " "){
							//concatenar a cadenaAux
							cadenaAux+=cadena[c];
				}
			}
			cadena = cadenaAux.toLowerCase();
			
			var llista = cadena.split("");
			var llistaInv = cadena.split("").reverse();
			
			i=0;
			
			while(i<llista.length){
				if(llista[i]!=llistaInv[i]){
					return false;
				}
				i++;
			}
			
			return true;
		}
		
		function majuscules_a_minuscules(cadena){//exercici 8
		
			var minuscules = cadena.toLowerCase();
			var majuscules = cadena.toUpperCase();
			
			if(minuscules == cadena){
				return "tota la cadena eren minuscules";
			}
			if(majuscules == cadena){
				return "TOTA LA CADENA EREN MAJUSCULES"
			}
			return "Estan majuscules i minuscules mesclades";
		}
		//alert(majuscules_a_minuscules("HOLA MUNDO!"));
		
		alert(palindrom( "La rutx nos aporto otro paso natural"));
	</script>
</head>

<body>
	
</body>

</html>
