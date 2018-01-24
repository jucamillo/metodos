<?php
declare (strict_types = 1);
require 'funcionario.php';


$funcionario = new Funcionario();
echo "Salario inicial: $funcionario->salario" . PHP_EOL;

$funcionario->aumentaSalario(2000);
echo "Salario final: $funcionario->salario" . PHP_EOL;


$funcionario->consultaDados('Rafael');
