<?php get_header(); ?>
<div class="clear"></div>
<div class="blog">
    <div class="wrap">
        <h2>BLOG</h2>
        
        <div class="box-liste-posts">

        <?php 
            $args = array('post_type'=>'post', 'showposts'=> 2);
            $my_posts = get_posts( $args );       
        ?>
        <?php $cont = 1; if( $my_posts ) : foreach( $my_posts as $post ) : setup_postdata( $post ); ?>
            <div class="liste-posts <?php if( $cont == 2 ) echo "segundo-post"; ?>">

                <?php the_post_thumbnail(); ?>

              <div class="box-content-post">
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="custom-botao">Leia mais</a>
              </div>
            </div>
          <?php $cont ++; endforeach; endif; ?>
        </div>
    </div>
</div>


<div class="clear"></div>

<div class="galeria">
  <div class="wrap">
 
    <?php 
            $args = array('post_type'=>'page', 'pagename' => 'galeria');
            $my_page = get_posts( $args );       
        ?>
        <?php $cont = 1; if( $my_page ) : foreach( $my_page as $post ) : setup_postdata( $post ); ?>

        <?php the_content(); ?>

        <?php $images = easy_image_gallery_get_image_ids(); ?>
        <?php if($images) : foreach ( $images as $attachment_id ): ?>
        <?php $imagefull = wp_get_attachment_image_src ($attachment_id, '' ); ?>
        <?php $image = wp_get_attachment_image_src ($attachment_id, 'thumb-custom' ); ?>

          <a class="popup" rel="fancybox[group]" href="<?phpo $imagefull[0]; ?>">
              <img src="<?php echo $image[0]; ?>">
          </a>
        <?php endforeach; endif; ?>

        <?php $cont ++; endforeach; endif; ?>


  </div>
</div>


<?php get_footer(); ?>


  