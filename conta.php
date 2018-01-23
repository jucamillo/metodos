<?php

class Conta
{
  public $numero; //atributo
  public $saldo = 0; //atributo

  function deposita(float $valor){
    $this->saldo += $valor;
  }
}
