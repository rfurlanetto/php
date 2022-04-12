<?php

include_once 'classes/Pessoa1.class.php';
include_once 'classes/Conta1.class.php';

$carlos = new Pessoa;
$carlos->codigo = 10;
$carlos->nome = 'Carlos da Silva';
$carlos->altura = 1.85;
$carlos->idade = 25;
$carlos->nascimento = '10/04/1976';
$carlos->escolaridade = 'Ensino Médio';

echo "Manipulando o objeto {$carlos->nome}: <br>\n";
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} <br>\n";

$carlos->formar('Técnico em Eletricidade');

echo "{$carlos->nome} é formado em: {$carlos->escolaridade} <br>\n";

echo "{$carlos->nome} é possui: {$carlos->idade} anos <br>\n";

$carlos->envelhecer(1);

echo "{$carlos->nome} é possui: {$carlos->idade} anos <br>\n";

$contaCarlos = new Conta;

$contaCarlos->agencia = 6677;
$contaCarlos->codigo = 'CC.1234.56';
$contaCarlos->dataDeCriacao = '10/07/2002';
$contaCarlos->titular = $carlos;
$contaCarlos->senha = 9876;
$contaCarlos->saldo = 567.89;
$contaCarlos->cancelada = false;

echo "<br>\n";

echo "Manipulando a conta de : {$contaCarlos->titular->nome} <br>\n";

echo "O saldo atual é R\$ : {$contaCarlos->obterSaldo()} <br>\n";

$contaCarlos->depositar(70);

echo "O saldo atual é R\$ : {$contaCarlos->obterSaldo()} <br>\n";

$contaCarlos->retirar(50);

echo "O saldo atual é R\$ : {$contaCarlos->obterSaldo()} <br>\n";
