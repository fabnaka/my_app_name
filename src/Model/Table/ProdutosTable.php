<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produtos Model
 *
 * @property \App\Model\Table\CategoriasProdutosTable&\Cake\ORM\Association\BelongsTo $CategoriasProdutos
 *
 * @method \App\Model\Entity\Produto newEmptyEntity()
 * @method \App\Model\Entity\Produto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProdutosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('produtos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('CategoriasProdutos', [
            'foreignKey' => 'categorias_produto_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome_produto')
            ->maxLength('nome_produto', 255)
            ->requirePresence('nome_produto', 'create')
            ->notEmptyString('nome_produto');

        $validator
            ->scalar('marca_produto')
            ->maxLength('marca_produto', 255)
            ->requirePresence('marca_produto', 'create')
            ->notEmptyString('marca_produto');

        $validator
            ->numeric('preco_produto')
            ->requirePresence('preco_produto', 'create')
            ->notEmptyString('preco_produto');

        $validator
            ->scalar('descricao_produto')
            ->maxLength('descricao_produto', 1000)
            ->requirePresence('descricao_produto', 'create')
            ->notEmptyString('descricao_produto');

        $validator
            ->allowEmptyFile('image')
            ->add('image',[
                'mimeType' =>[
                    'rule'=> ['mimeType',['image/jpg','image/png','image/jpeg']],
                    'message'=> 'Please upload only jpg and png.',
                ],
                'fileSize'=>[
                    'rule'=>['fileSize','<=','1MB'],
                    'message'=>'Tamanho de imagem não suportado, precisa ser menor que 1MB',
                ],

            ]);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['categorias_produto_id'], 'CategoriasProdutos'), ['errorField' => 'categorias_produto_id']);

        return $rules;
    }
}
