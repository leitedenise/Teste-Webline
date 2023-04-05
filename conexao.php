<?php

$host='HOST';
$user='USER';
$password='PASSWORD';
$database='DATABASE';

$conexao = new mysqli($host, $user, $password, $database);

if($conexao){
    echo'Conexão estabelecida com sucesso!<br><br>';

};

?>
