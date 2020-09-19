<?php

declare(strict_types=1);

namespace Alfa\Entidades;

use Alfa\Interfaces\Estimacao;

class Cachorro extends Animal implements Estimacao 
{
  private string $nome;
  private bool $alimentado = false;

  public function emitirSom(): string
  {
    return "Auau";
  }

  public function comer(): string
  {
    if ($this->alimentado) {
      return "Animal já foi alimentado";
    }
    $this->alimentado = true;
    return parent::comer();
  }

  public function brincar(): string
  {
    return sprintf("%s está brincando com a bolinha de tênis", $this->getNome());
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }
}