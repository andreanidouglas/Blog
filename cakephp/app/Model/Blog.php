<?php

class Blog extends AppModel{
    public $hasMany=array(
        'Post' => array(
            'className' => 'Post',
            'foreignKey' => 'blog_id',
            'order' => 'Post.created DESC', //ordena decrescente a data da postagem
            'limit' => '5', //limita a 5 resultados
            'dependent' => true
        )
    );
            
            
            
            //'Post'; //1 --- * relacionamento
}