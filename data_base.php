<?php
/*
	configuracion de dino

*/



/* ***************************
	base de datos 
*************************** */
	//no cambiar el nombre de estas variables, ni el orden
	$DB_USER 	= "root";
	$DB_PASS 	= "";
	$DB_NAME 	= "mi-portafolio";
	$DB_SERVER = "localhost";




/* ***************************
	google analytics 
*************************** */
	//id de google analytics
	$DINO_GA_ID = "UA-11327997-2";

	//mute para los analytics, bueno para cuando estas
	//codificando ya que GA no le importa de donde venga
	$DINO_GA_MUTE = true;
	$enlace =new mysqli($DB_SERVER, $DB_USER, $DB_PASS,$DB_NAME);
	if($enlace->connect_error){
	  die("conexion fallida: ".$enlace->connect_error);
	}
