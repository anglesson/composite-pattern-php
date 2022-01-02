<?php

/**
 * Representa o Composite ou Container do Composite Pattern
 * @author Anglesson Araujo
 */
class Caixa implements ItemDoPedido
{
  private $codigo;
  private $items;

  public function __construct($codigo)
  {
      $this->items = [];
      $this->codigo = $codigo;
  }

  /**
   * Método responsável por adicionar items à Caixa.
   * @param ItemDoPedido Objeto do tipo ItemDoPedido
   */
  public function adiciona(ItemDoPedido $item)
  {
    $this->items[] = $item;
  }

  /**
   * Método responsável por remover item da Caixa.
   * @param ItemDoPedido Item do Pedido
   */
  public function remove(ItemDoPedido $item)
  {
    $key = array_search($item, $this->items);
    if($key!==false){
        unset($this->items[$key]);
    }
  }

  /**
   * Método responsável por retornar todos os items da Caixa.
   * @return array Lista de items que compõem a caixa.
   */
  public function getItens()
  {
    return $this->items;
  }

  /**
   * Método responsável por definir o código da caixa.
   * @param string Codigo da caixa
   * @return void
   */
  public function setCodigo(string $codigo)
  {
    $this->codigo = $codigo;
  }

  /**
   * Método responsável retornar o código da caixa.
   * @return string Codigo da caixa
   */
  public function getCodigo()
  {
    return $this->codigo;
  }

  /**
   * Método responsável por delegar a atividade de calculo para os items que compõe a caixa.
   * @return float Soma dos produtos na caixa.
   */
  public function calcular()
  {
    $soma = 0;
    foreach ($this->items as $item)
    {
      $soma = $soma + $item->calcular();
    }
    return $soma;
  }
}
