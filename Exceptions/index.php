<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');


require "Validacao.php";
require "ContaCorrente.php";


$contaJoao = new ContaCorrente("Joao", "1212", "343477-9", 2000.00);

$contaMaria = new ContaCorrente("Maria", "1212", "343423-9", 6000.00);

$contaJose = new ContaCorrente("Jose", "1212", "343423-9", 6000.00);

$contaFernanda = new ContaCorrente("Fernanda", "1212", "1343423-9", 6000.00);

$contaBernardo = new ContaCorrente("Bernardo", "1212", "2343423-9", 6000.00);

$contaFelipe = new ContaCorrente("Felipe", "1212", "3343423-9", 6000.00);

$contaLucas = new ContaCorrente("Lucas", "1212", "4343423-9", 6000.00);


echo "total de contas: " . ContaCorrente::$totalDeContas . PHP_EOL;

echo "" . PHP_EOL;

echo "taxa: " . ContaCorrente::$taxaOperacao;

echo "" . PHP_EOL;
echo "" . PHP_EOL;

echo "Contas Correntes" . PHP_EOL;

echo "" . PHP_EOL;

echo "Conta Corrente: Titular: " . $contaJoao->getTitular() . PHP_EOL;

echo "" . PHP_EOL;

var_dump($contaJoao) . PHP_EOL;

echo "" . PHP_EOL;

try {
    $contaJoao->transferir(-10, $contaMaria);
} catch (Exception $error) {
    echo $error->getMessage();
}

echo "" . PHP_EOL;
echo "" . PHP_EOL;

var_dump($contaJoao);
