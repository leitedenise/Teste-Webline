<?php

require('conexao.php');

$nome = $_POST['nome'];
$placa = $_POST['placa'];
$chassi = $_POST['chassi'];
$montadora = $_POST['montadora'];

$sql="INSERT INTO automoveis VALUES (null, '$nome', '$placa', '$chassi', '$montadora');";

if(mysqli_query($conexao,$sql)){
    echo'<br>Dados inseridos com sucesso!';
};


?>