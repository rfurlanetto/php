<?php

echo '<pre>';

// Conceito de Variáveis Variantes;

$variavel = 'nome';

$$variavel = 'maria';

// Resultado será 'maria';
echo $nome;

/******************************************************************************/

// Conceito de Referência entre variáveis

$a = 5;
$b = &$a;
$b = 10;

echo $a;
echo $b;

echo '<br/>';


/******************************************************************************/

// Valores Falsos

var_dump(0 == true);
echo '<br/>';
var_dump(0.0 == true);
echo '<br/>';
var_dump("" == true, "0" == true);
echo '<br/>';
var_dump(array() == true);
echo '<br/>';
// Aparentemente no PHP 7.4 o objeto vazio não é mais considerado como um boolean false
$objVazio = new stdClass();
var_dump($objVazio == true, $objVazio);
echo '<br/>';
var_dump(null == true);
echo '<br/>';

/******************************************************************************/

// Tipos numéricos

$decimal = 1234;
echo $decimal;
echo '<br/>';
$decimalNegativo = -123;
echo $decimalNegativo;
echo '<br/>';
$octal = 0123;
echo $octal;
echo '<br/>';
$hexadecimal = 0x1A;
echo $hexadecimal;
echo '<br/>';
$pontoFlutuante = 1.234;
echo $pontoFlutuante;
echo '<br/>';
$notacaoCientifica = 4e23;
echo $notacaoCientifica;
echo '<br/>';


/******************************************************************************/

// Array

$array = array('teste', 123, array('testte'));
var_dump($array);


/******************************************************************************/

