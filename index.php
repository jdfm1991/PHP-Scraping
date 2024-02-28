<?php

require 'vendor/autoload.php';

use Goutte\Client;
$client = new Client();

$url = "https://www.bcv.org.ve/";
$crawler = $client->request('GET', $url);

$dato = $crawler->filter("#dolar")->text();

$data = explode(" ", $dato);

$valor = $data[1];

$dolar = str_replace(",", ".", $valor);



echo number_format($dolar, 4, '.', '');;

