<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo __('Job Avenue'); ?></title>   
    <?php 
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('customize');
        echo $this->Html->css('jquery.qtip.min');
    ?>
</head>
<body>
    <!-- navigation bar and modals -->
    <?php 
        echo $this->element('navigation_bar'); 
        echo $this->element('login_modal');
        echo $this->element('loader_modal');
        echo $this->element('success_modal');
    ?>
    
    <!-- main content -->
    <?php echo $this->fetch('content'); ?>
    
    <!-- footer -->
    <div class="container">
        <hr>
        <p class="footer col-md-offset-4">
            <?php echo __('&copy; Job Avenue 2014. All rights reserved'); ?>
        </p>
    </div>
    
    <?php 
        //JS Library
        echo $this->Html->script('jquery/jquery');
        echo $this->Html->script('bootstrap/bootstrap'); 
        echo $this->Html->script('qTip/jquery.qtip.min');
        echo $this->Html->script('qTip/imagesloaded.pkg.min');
        //JS files
        echo $this->Html->script('users/index');
    ?>
  </body>
</html>