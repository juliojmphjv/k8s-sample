<?php

require_once __DIR__ . "/../vendor/autoload.php";

$date = new \DateTime;
$date->setDate(1991, 10, 11);
$today = new \DateTime;

$age = new \App\Age($date, $today);

?>

Minha Idade = <?=$age->calculate();?>