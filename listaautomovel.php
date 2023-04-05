<?php
require('conexao.php');

$query = "SELECT automoveis.codigo, automoveis.nome, automoveis.placa, automoveis.chassi, 
automoveis.montadora, montadoras.codigoMontadora, montadoras.nomeMontadora
FROM automoveis LEFT JOIN montadoras ON automoveis.montadora = montadoras.codigoMontadora;";

$resultado = mysqli_query($conexao, $query);

if(mysqli_num_rows($resultado) > 0){
    while($linha = mysqli_fetch_array($resultado)){
        echo "Codigo: " . $linha['codigo'] . "<br>";
        echo "Nome: " . $linha['nome'] . "<br>";
        echo "Placa: " . $linha['placa'] . "<br>";
        echo "Chassi: " . $linha['chassi'] . "<br>";
        echo "Montadora: " . $linha['montadora'] . "<br>";
        
        echo "Codigo da Montadora: " . $linha['codigoMontadora'] . "<br>";
        echo "Nome da Montadora: " . $linha['nomeMontadora'] . "<br>";
        echo "<hr>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

?>