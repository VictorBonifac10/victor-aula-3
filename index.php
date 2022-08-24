<?php

$lista = array("Victor");//variavel recebendo a função nativa arrray (aqui estamos iniciando um arrray em branco)
//echo $lista[0];
//echo $lista[0] Não funcionará
//Não existe dados no indice 0;

$nomes = array("Fernando", "Vitoria", "Denise", "Mateus", "Guilherme", "Roge", "Virlene"); //ind 0, ind 1, ind 2, ind 3, ind 4, ind 5, ind 6

//acessando cvada item do array Manualmente
echo $nomes[0]."<br>";
echo $nomes[1]."<br>";
echo $nomes[2]."<br>";
echo $nomes[3]."<br>";
echo $nomes[4]."<br>";
echo $nomes[5]."<br>";
echo $nomes[6]."<br>";

for($i = 0; $i< count($nomes); $i++)
{
    //echo $nomes[$i]."<br>";
}

$dados = array();
$dados["Nome"] = array("Fer", "Maria", "Joao",); //indice 0
$dados["Idade"] = array(32, 18, 25); //indice 1
$dados["Solteiro"] = array(true, false, false); //indice 2

for($i = 0; $i<10; $i++){
        array_push($dados["Idade"],$i);
}

echo "<pre>";
var_dump($dados); //função nativa do php
echo "</pre>";
echo $dados[1] = "Fernando está no indice 1";
echo $dados[1];

echo "<pre>";
var_dump($dados); //função nativa do php
echo "</pre>";

/*$_POST["Senha"];
$_GET["Id"];
$_COOKIE["Carrinho"];
$_SESSION
$_FILES*/
$listaBanco = mysqli_query($conn, "select nome, idade from tabela");
$listaBanco["nome"];

?>