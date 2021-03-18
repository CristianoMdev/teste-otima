<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
    
</head>
    <body>


<div class="header">

    <div class="wrap">
        <h1> <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>">CRMDEV</a> </h1>

        <div class="infor">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur molestias exercitationem omnis voluptatem magnam excepturi assumenda? Quisquam voluptate nostrum perferendis, eligendi ea esse voluptas, maiores totam sint eveniet quam culpa.</p>
            <a href="#" class="custom-botao">Saiba Mais</a>
        </div>
    </div>

</div>
  