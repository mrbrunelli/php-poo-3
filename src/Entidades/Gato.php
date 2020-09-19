<?php

declare(strict_types=1);

namespace Alfa\Entidades;

use Alfa\Interfaces\Estimacao;

class Gato extends Animal implements Estimacao
{
  private string $nome;

  public function __construct(string $nome)
  {
    $this->nome = $nome;
  }

  public function brincar(): string
  {
    return sprintf("%s está brincando com a bolinha de lã", $this->getNome());
  }

  public function emitirSom(): string
  {
    return "Miau";
  }

  public function getNome(): string
  {
    return $this->nome;
  }
}
