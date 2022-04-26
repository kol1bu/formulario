<?php
include("pessoa.class.php");

//O campo Nome deve passar o valor para o método setNome
//e você deverá imprimir o valor pelo método getNome


//echo $_GET ['txtNome'];

$pessoa = new Pessoa();

$pessoa->setNome($_GET ['txtNome']);
echo "Nome: " . $pessoa->getNome();

?>