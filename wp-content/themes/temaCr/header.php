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

    <?php
        if(is_home()):
    ?>

<div class="header">

    <div class="wrap">
        <h1> <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>">CRMDEV</a> </h1>

        <div class="infor">
            
            <?php
                $args =array('post_type'=> 'page', 'pagename'=> 'sobre');
                $my_page = get_posts( $args );
            ?>
          <?php if($my_page) : foreach($my_page as $post ) : setup_postdata( $post ); ?>

          <<h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
            
          <a href="<?php the_permalink(); ?>" class="custom-botao">Saiba Mais</a>
            <?php endforeach; ?>

            <?php else: ?>
                <p>Nenhum Conteudo Inserido</p>
            <?php endif; ?>

        </div>
    </div>

</div>
        
<?php
        else:
    ?>
            <<div class="header-page">
              <div class="wrap">
                <h1> <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>">CRMDEV</a> </h1>
              </div>
              <div class="bg-page">
                <div class="wrap">
                    <h2><?php the_title(); ?></h2>
                </div>
              </div>
            </div>
    <?php
        endif;
    ?>