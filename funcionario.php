<?php

class Funcionario
{
  public $nome; //atributo
  public $salario = 5000; //atributo

  function aumentaSalario(float $valor){
    $this->salario += $valor;
  }
  function consultaDados(string $nome){
    echo "Nome: $nome" . PHP_EOL;
    echo "Salario: $this->salario" . PHP_EOL;
  }
}
