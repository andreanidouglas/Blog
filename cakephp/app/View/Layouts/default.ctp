
<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Gerenciador de Blogs'; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.css');
	?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
     
</head>
<body>
	<div class='container'> 
            
            <div class='span12'>
                <p class='lead text-center'>SISTEMA DE GERENCIAMENTO DE BLOGS</p>
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>
            </div>
        </div>
		
</body>
</html>
