<?php

class Conta
{
  public $numero = 122121; //atributo
  public $saldo = 0; //atributo
  public $limite = 100; //atributo
  public $agencia = 232; //atributo

  function deposita(float $valor){
    $this->saldo += $valor;
  }
  function saca(float $valor){
    $this->saldo -= $valor;
  }
  function imprimeExtrato(){
    echo "Agencia: $this->agencia" . PHP_EOL;
    echo "Numero: $this->numero" . PHP_EOL;
    echo "Saldo: $this->saldo" . PHP_EOL;
  }
  function consultaSaldo(){
    echo "Saldo Disponível: $this->saldo" . PHP_EOL;
  }

}
