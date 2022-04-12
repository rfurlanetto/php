<?php

include_once 'classes/Produto2.class.php';

$produto1 = new Produto;
$produto2 = new Produto;

$produto1->codigo = '4001';
$produto1->descricao = 'CD - Reação em Cadeira' ;

$produto2->codigo = '4002';
$produto2->descricao = 'CD - Legião Urbana' ;

$produto1->imprimeEtiquetas();
$produto2->imprimeEtiquetas();

