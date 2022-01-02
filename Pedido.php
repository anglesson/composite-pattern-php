<?php
/**
 * Representa o Client do Composite Pattern.
 * @author Anglesson Araujo
 */
class Pedido
{
    private $items;
    private string $codigo;

    /**
     * Método contrutor da classe
     * @param string $codigo
     */
    public function __construct(string $codigo)
    {
        $this->codigo = $codigo;
        $this->items = [];
    }

    /**
     * Método responsável por adicionar itens ao pedido.
     * @param ItemDoPedido $item Item do pedido pode ser um Produto ou uma Caixa.
     * @return void
     */
    public function adicionarItem(ItemDoPedido $item)
    {
        $this->items[] = $item;
    }

    /**
     * Método responsável por remover item da Caixa.
     * @param ItemDoPedido Item do Pedido
     */
    public function removerItem(ItemDoPedido $item)
    {
        $key = array_search($item, $this->items);
        if($key!==false){
            unset($this->items[$key]);
        }
    }

    /**
     * Método responsável por retornar a soma de todos os items,
     * independente se são caixas com produtos ou apenas produtos.
     * @return int|mixed
     */
    public function finalizarPedido()
    {
        $total = 0;
        foreach ($this->items as $item)
        {
            $total = $total + $item->calcular();
        }
        return $total;
    }

    /**
     * Método responsável por retornar o código do produto.
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}