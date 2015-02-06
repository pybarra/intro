<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Funcions 1</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
	<script>
		function suma(a,b){
				return a+b;
		}
		
		function resta(a,b){
				return a-b;
		}
		function producte(a,b){
				return a*b;
		}
		function divisio(a,b){
				return a/b;
		}
		function modul(a,b){
				return a%b;
		}
		
		function parell_senar(a){
			var m=a%2;
			if (m==0){
				return "parell";
			}else{
				return "senar";
			}
		}
			
		
		var s=suma(4,7);
		alert(s);
		
		var r=resta(4,7);
		alert(r);
		
		var p=producte(4,7);
		alert(p);
		
		var d=divisio(4,7);
		alert(d);
		
		var m=modul(4,7);
		alert(m);
	</script>
</head>

<body>
	
	<p onclick="alert('funcions1')">Funcions 1</p>
	
</body>

</html>
