<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("formulario",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$name = $_POST['name'];
	$discord = $_POST['discord'];
	$message = $_POST['message'];

	//Obtiene la longitus de un string
	$req = (strlen($name)*strlen($discord)*strlen($message)) or die("No se han llenado todos los campos");


	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('','$name','$discord','$message')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Formulario enviado");
			location.href="index.html";
		</script>
	'


?>
