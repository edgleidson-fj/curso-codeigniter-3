<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Estacionamento&nbsp; | &nbsp;<?php echo (isset($titulo) ? $titulo : 'Padrão'); ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo base_url('public/plugins/bootstrap/dist/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('public/plugins/fontawesome-free/css/all.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('public/plugins/icon-kit/dist/css/iconkit.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('public/plugins/ionicons/dist/css/ionicons.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('public/plugins/perfect-scrollbar/css/perfect-scrollbar.css');?>">         -->
        <link rel="stylesheet" href="<?php echo base_url('public/dist/css/theme.min.css');?>">
		
		<!-- Se $styles que vem do Controller estiver definido, faz um foreach percorrendo todas posições-->
		<?php if(isset($styles)) : ?>
			<?php foreach($styles as $s) : ?>
				<link rel="stylesheet" href="<?php echo base_url('public/'. $s);?>">
			<?php endforeach; ?>				
		<?php endif; ?>	
	</head>

    <body>        
        <div class="wrapper">



		
