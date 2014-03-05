<!-- File: /app/View/Posts/index.ctp -->

<h1>Posts do Blog</h1>

<?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add'));?>

<table>
    <tr>
        <th>Id</th>
        <th>T�tulo</th>
        <th>Data de Cria��o</th>
    </tr>

    <!-- Aqui � onde n�s percorremos nossa matriz $posts, imprimindo
         as informa��es dos posts -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>