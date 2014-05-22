<h1>Usuarios</h1>

<?php echo $this->Html->link(
    'Adicionar Usuarios',
    array('controller' => 'users', 'action' => 'add')
); ?>
<table class='table table-striped '>
    
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Funcao</th>
        <th>Acao</th>
        <th>Created</th>
    </tr>

        <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $user['User']['username']; ?>
        </td>
        <td>
            <?php echo $user['User']['role']; ?>
        </td>
         <td>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $user['User']['id'])
                );
            ?>
             <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Voce tem certeza')
                );
            ?>
        </td>
        <td><?php echo $user['User']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>


