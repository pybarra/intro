var valores = [true, 5, false, "hola", "adios", 2];
 
// Cual de los 2 elementos de texto es mayor
// Si el resultado es true, el primer texto es mayor

var resultado = valores[3] > valores[4]; //resultado = true
alert(resultado);

var resultado = valores[4] > valores[3]; //resultado = false
alert(resultado);

// Combinar valores booleanos
var x = valores[0];
var y = valores[2];
 
// Obtener un resultado TRUE
var resultado = x || y; //resultado = true
alert(resultado);
 
// Obtener un resultado FALSE
resultado = x && y; //resultado = flase
alert(resultado);
 
// Operaciones matemá¡ticas
var x = valores[1];
var y = valores[5];
 
var suma = x + y; //resultado = 7 
alert(suma);
 
var resta = x - y; //resultado = 3
alert(resta);
 
var multiplicacion = x * y; //resultado = 10
alert(multiplicacion);
 
var division = x / y; //resultado = 2.5 
alert(division);
 
var modulo = x % y; //resultado = 1
alert(modulo);
