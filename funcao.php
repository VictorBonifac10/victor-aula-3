<?php

function nomeFuncao(){
        if(true){
            echo "funcionando a função";
        }else{
            echo "Nunca vai cair aqui";
        }
}

function Adicao($num1, $num2){
    $soma = $num1 + $num2;
    return $soma;
}

function Subtracao($num1, $num2){
    $resultado = $num1 - $num2;
    return $resultado;
}

function Multiplicacao($num1, $num2){
    $resultado = $num1 * $num2;
    return $resultado;
}

function Divisao($num1, $num2){
    $resultado = $num1 / $num2;
    return $resultado;
}

function Media($num1, $num2){
    $resultado = ($num1 + $num2) / 2;
    return $resultado;
}

function LendariaCalculadora($numero1, $numero2, $operacao){
    //$resultado = 0; - Não é necessario neste caso/ O proprio "return" já fara a opração solicitado
    echo "<br>";
        if($operacao == "+"){
            //return Adicao($numero1,$numero2);
            echo Adicao($numero1,$numero2);
        }else if($operacao == "-"){
            //return Subtracao($numero1,$numero2);
            echo Subtracao($numero1,$numero2);
        }else if($operacao == "*"){
            //return Multiplicacao($numero1,$numero2);
            echo Multiplicacao($numero1,$numero2);
        }else if($operacao == "/"){
            //return Divisao($numero1,$numero2);
            echo Divisao($numero1,$numero2);
        }else if($operacao == "M"){
            //return Divisao($numero1,$numero2);
            echo Media($numero1,$numero2);
            //return Media($numero1,$numero2);
        }else{
            echo "Digite uma operação Valida";
        }


}

function SomaArray($array)
{
    $retorno = 0;
    for($i = 0; $i < count($array); $i++){
        $retorno += $array[$i];
    }
    return $retorno; 
} //somando tudo*

    //nomeFuncao();
    /*
    $valor1 = 65647;
    $resultado = Adicao(512, $valor1);
    echo "Primeira Adição: ". Adicao(273642,3457465)."<br>";
    echo "Segunda Adição: ". Adicao(234,465)."<br>";
    echo "3 Adição: ". Adicao(2,90)."<br>";
    echo "4 Adição: ". Adicao(34,1)."<br>";
    echo "5 Adição: ". Adicao(22,67)."<br>";
    echo "O resultado da soma é: ".$resultado;
    */

    //$numeros = array(1,5,10,15,20,25,30,35,40);
    //echo SomaArray($numeros);  //somando tudo*

    /*echo*/LendariaCalculadora(8,6,"*");
    /*echo*/LendariaCalculadora(8,6,"-");
    /*echo*/LendariaCalculadora(8,6,"/");
    /*echo*/LendariaCalculadora(8,6,"+");
    /*echo*/LendariaCalculadora(4,6,"M");
    /*echo*/LendariaCalculadora(8,6,"sdgkquagk");

?>