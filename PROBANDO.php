<html>
<head>
<title>Ejemplo sencillo de AJAX</title>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./index.js"></script>
</head>
</head>
<body>
Introduce valor 1
<input type="text" name="caja_texto" id="valor1" value="0"/> 
Introduce valor 2
<input type="text" name="caja_texto" id="valor2" value="0"/>
Realiza suma
<input type="button" onclick="realizaProceso();return false;" value="Calcula"/>
<br/>
Resultado: <span id="resultado">0</span>
</body>
</html>