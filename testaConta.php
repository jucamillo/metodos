<?php
declare (strict_types = 1);
require 'conta.php';


$conta = new Conta();
echo "Saldo inicial: $conta->saldo" . PHP_EOL;

$conta->deposita('2000 maçãs');
echo "Saldo final: $conta->saldo" . PHP_EOL;
