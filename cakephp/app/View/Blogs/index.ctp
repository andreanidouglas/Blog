<div class='span4'>
<?php

if (!$logado)
{
    echo $this->Html->link('Login',array(
                            'controller' => 'users',
                            'action' => 'login')
   );
}
else
{
    echo $this->Html->link('Posts',array(
                            'controller' => 'posts',
                            'action' => 'index')
   );
    echo '</div><div class=\'span4\'>';
   
   echo $this->Html->link('Users',array(
                            'controller' => 'users',
                            'action' => 'index')
   );
}
?>
</div>
<table class='table table-striped '>
    <?php foreach ($blogs as $blog): ?>
        <?php foreach ($blog['Post'] as $posts): ?>
            <tr>
                <th colspan='2' style='text-align: center;'><?php echo $posts['title'] ?></th> </h1>
            </tr>
            <tr>
                <h3><td colspan='2' style='text-align: left;'> <?php echo $posts['body']; ?>  </td></h3>
            </tr>
            <tr>
                <td> <?php echo '0 Comentarios';     ?></td>
                <td><?php echo $posts['created']; ?></td>
            </tr>    
            <tr><td><p><BR></p></td></tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>

