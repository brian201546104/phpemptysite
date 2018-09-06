<?php

//incluir el archivo principal
include("Slim/Slim.php");

//registran la instancia de slim
\Slim\Slim::registerAutoloader();
//aplicacion 
$app = new \Slim\Slim();

//routing 
//accediendo VIA URL
//http:///www.google.com/
//localhost/apirest/index.php/ => "Hola mundo ...."

$app->get(
    '/intento/:dato/:contr',function($estado,$contra) use ($app){
    	$id = $estado;
    	
    	//almaceno el ID
    	//conexion con base de datos
    	//el proceso
    	// retorno un JSON
    	//$mensaje="la contraseña".$contra."es".$estado;
       // mail("culpatanlopezl@gamil.com","intento de entrada al garage",$mensaje);
        echo "la contraseña".$contra." es" . $estado;
    }
);

//inicializamos la aplicacion(API)
$app->run();

