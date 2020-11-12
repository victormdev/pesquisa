<?php

$servername = "localhost";
$ussername = "root";
$password = "";
$db_name = "tb001";

$connect = mysqli_connect($servername, $ussername, $password, $db_name);

if(mysqli_connect_error()):
    echo "Erro na conexão".mysqli_connect_error();
endif;

?>