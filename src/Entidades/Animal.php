<?php

declare(strict_types=1);

namespace Alfa\Entidades;

abstract class Animal
{
  protected int $pernas = 0;

  public function comer(): string
  {
    return "Nhac Nhac";
  }

  abstract public function emitirSom(): string;
}
