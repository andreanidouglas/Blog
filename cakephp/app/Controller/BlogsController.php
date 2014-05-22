<?php

class BlogsController extends AppController {
     
    public function index()
    {
        $this->set('blogs', $this->Blog->find('all'));
        $this->set('logado', $this->Auth->loggedIn());
    }
            
}