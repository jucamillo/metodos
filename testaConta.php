<?php
declare (strict_types = 1);
require 'conta.php';


$conta = new Conta();
echo "Saldo inicial: $conta->saldo" . PHP_EOL;

$conta->deposita(2000);
echo "Saldo depois deposito: $conta->saldo" . PHP_EOL;


$conta->saca(100);
echo "Saldo depois sacar: $conta->saldo" . PHP_EOL;

echo "Extrato" . PHP_EOL;
$conta->imprimeExtrato();


echo "Consulta saldo" . PHP_EOL;
$conta->consultaSaldo();
