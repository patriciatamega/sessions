<?php

session_id('u2cj7221vlpbacl6seors1rkfj'); //para recuperação de ID do Servidor.

require_once("config.php");

session_regenerate_id(); //um fator de segurança, que a cada F5 altera o ID do browser. 

echo session_id();

var_dump($_SESSION);

?>