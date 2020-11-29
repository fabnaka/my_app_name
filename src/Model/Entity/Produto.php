<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $nome_produto
 * @property int $categorias_produto_id
 * @property string $marca_produto
 * @property float $preco_produto
 * @property string $descricao_produto
 * @property string $image
 *
 * @property \App\Model\Entity\CategoriasProduto $categorias_produto
 */
class Produto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome_produto' => true,
        'categorias_produto_id' => true,
        'marca_produto' => true,
        'preco_produto' => true,
        'descricao_produto' => true,
        'image' => true,
        'categorias_produto' => true,
    ];
}
