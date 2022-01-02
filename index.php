<?php

include_once 'ItemDoPedido.php';
include_once 'Produto.php';
include_once 'Caixa.php';
include_once 'Pedido.php';

// Cria produtos
$produto1 = new Produto('001');
$produto1->setValor(5.00);

$produto2 = new Produto('002');
$produto2->setValor(15.00);

$produto3 = new Produto('003');
$produto3->setValor(50);

$produto4 = new Produto('004');
$produto4->setValor(234.00);

// Cria Caixa Filha
$caixaFilha = new Caixa('CXFILHA001');
$caixaFilha->adiciona($produto3);
$caixaFilha->adiciona($produto4);

// Cria Caixa Mãe
$caixa = new Caixa('CXMAE001');
$caixa->adiciona($produto1);
$caixa->adiciona($produto2);
$caixa->adiciona($caixaFilha);

// Classe Pedido representa a classe cliente.
$pedido = new Pedido('PED123');
$pedido->adicionarItem($caixa);

echo "O valor do PEDIDO - {$pedido->getCodigo()} é R$ ".$pedido->finalizarPedido()."\n";
