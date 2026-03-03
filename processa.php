<?php

// Recebendo dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$frase = $_POST["frase"];

echo "<h1>Resultado:</h1>";

// 1️- Nome formatado (minúsculo + primeira letra maiúscula)
$nome = strtolower($nome);
$nomeFormatado = ucfirst($nome);
echo "Nome formatado: ".$nomeFormatado."<br>";

// 2️- Quantidade de caracteres
$totalCaracteres = strlen($nome);
echo "Total de caracteres do seu nome: ".$totalCaracteres."<br>";

// 3️- Primeiro nome
$posicaoEspaco = strpos($nome, " ");

if($posicaoEspaco !== false){
    $primeiroNome = substr($nome, 0, $posicaoEspaco);
}else{
    $primeiroNome = $nome;
}

echo "Primeiro nome: ".$primeiroNome."<br>";

// 4️- Verificar email
if(strpos($email,"@") !== false){
    echo "Email válido!<br>";
}else{
    echo "Email inválido<br>";
}

// 5️- Substituir "programação" por "tecnologia"
$fraseModificada = str_replace("programação","tecnologia",$frase);
echo "Frase modificada: ".$fraseModificada."<br>";

// 6️- Frase invertida
$fraseInvertida = strrev($frase);
echo "Frase invertida: ".$fraseInvertida."<br>";

// 7️- Comparar se primeiro nome é "admin"
$resultadoComparacao = strcmp(strtolower($primeiroNome),"admin");

if($resultadoComparacao == 0){
    echo "Usuário administrador detectado!<br>";
}else{
    echo "Você é um usuário comum!<br>";
}

echo "<h1>Atividade Extra:</h1>";

//  1️- Nome em MAIÚSCULO
$nomeMaiusculo = strtoupper($nome);
echo "Nome em maiúsculo: ".$nomeMaiusculo."<br>";


//  2️- Apenas os 10 primeiros caracteres da frase
$primeiros10 = substr($frase, 0, 10);
echo "Primeiros 10 caracteres da frase: ".$primeiros10."<br>";


//  3️- Repetir a frase 3 vezes
$fraseRepetida = str_repeat($frase." ", 3);
echo "Frase repetida 3 vezes: ".$fraseRepetida."<br>";


//  4️- Contar quantas vezes aparece a letra "a"
$quantidadeA = substr_count(strtolower($frase), "a");
echo "Quantidade de letras 'a' na frase: ".$quantidadeA."<br>";

?>