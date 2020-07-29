<?php

require_once("config.php");

/*

session_unset($_SESSION); limpa variáveis de sessão.

Se não inserir nenhuma variável, ele apaga todas as variáveis de sessão.

session_destroy(); além de limpar a variável, ele remove o usuário.

*/

echo $_SESSION['nome'];

?>