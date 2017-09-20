<!DOCTYPE html>

<html lang="en">
  <head>
  		<title>Test</title>

  		<?php echo Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'); ?>

  		<?php echo Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'); ?>


</head>

  <body>
  
    <div class="wrapper"><!--main content start-->

        <div class="main-content">
            <?php echo $__env->yieldContent('content'); ?>           
        </div>

    </div><!--main content end-->


   		<?php echo Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'); ?>

    	<?php echo Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'); ?>


  </body>

</html>
