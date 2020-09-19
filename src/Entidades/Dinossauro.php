<?php

declare(strict_types=1);

namespace Alfa\Entidades;

class Dinossauro extends Animal 
{
  public function emitirSom(): string
  {
    return "Graaaaauuuu";
  }
}