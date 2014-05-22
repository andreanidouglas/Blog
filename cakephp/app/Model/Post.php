<?php

class Post extends AppModel{
    public $belongsTo = 'User'; //1--1 relacionamento
    public function isOwnedBy($post, $user) 
    {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }
}
