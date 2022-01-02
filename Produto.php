<?php

/**
 * Representa o Leaf(Folha) do Composite Pattern
 * @author Anglesson Araujo
 */
class Produto implements ItemDoPedido
{
    private string $codigo;
    private float $valor;

    public function __construct(string $codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * Método responsável por retornar o valor do produto.
     * @return float Valor do Produto
     */
    public function calcular()
    {
      return $this->valor;
    }

    /**
    * Método responsável por definir o valor do produto.
    * @param float Preço do Produto
    */
    public function setValor(float $valor)
    {
      $this->valor = $valor;
    }

    /**
     * Método responsável por retornar o valor do produto.
     * @return string Código do produto.
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
