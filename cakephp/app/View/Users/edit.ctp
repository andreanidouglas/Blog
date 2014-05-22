<h1>Editar Usuario</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Blogueiro')
        ));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Salvar usuario');
?>