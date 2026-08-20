<?php

require 'vendor/autoload.php';
require_once __DIR__.'/src/Buscador.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br']);
$crawler = new Crawler();


$buscador = new Buscador($client,$crawler);
$cursos = $buscador->buscar('/cursos-online-back-end/php');


foreach ($cursos as $curso) {
    echo $curso.PHP_EOL;
}





