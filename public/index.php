<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Entidades\Dinossauro;
use Alfa\Entidades\Gato;
use Alfa\Entidades\Cachorro;
use Alfa\Servicos\InteragirEstimacao;

$dinossauro = new Dinossauro();
$gato = new Gato("Satanas");
$cachorro = new Cachorro();
$cachorro->setNome("Estrelinha");
echo $gato->comer() . "\n";
try {
  echo $cachorro->comer() . "\n";
  echo $cachorro->comer() . "\n";
} catch (Exception $e) {
  echo $e->getMessage() . "\n";
}
$interagir = new InteragirEstimacao();
echo $interagir->brincar($cachorro) . "\n";
echo $interagir->brincar($gato) . "\n";