	<?php
//Constante para el controlador por defecto para cuando se solicita
//un contrlador que no existe se sustituye por este.

define('BASE_URL', 'http://localhost/MVC/');
//define('BASE_URL', 'mercadito-rd.000webhostapp.com');
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'default');
define('SESSION_TIME', 60);
define('HASH_KEY', '5948861b6e066');

//Informacion sobre la compania
define('APP_NAME', 'Mercadito');
define('APP_SLOGAN', 'Vende todo lo que quieras, para el publica que quieras.');
define('APP_COMPANY', 'julio_dev');
define('MAIL_COMPANY', 'the_magnaboy@hotmail.com');


//Informacion de la base de datos

define('DB_HOST', '127.0.0.1:3307');
define('DB_NAME', 'tienda');
define('DB_USER', 'root');
define('DB_PASS', '123');
define('DB_CHARSET', 'utf8');