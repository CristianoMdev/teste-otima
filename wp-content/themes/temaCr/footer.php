<div class="footer">
  <div class="wrap">
        <?php echo FrmFormsController::get_form_shortcode(array('id' => 2, 'key' => '', 'title' => false, 'description' => false, 'readonly' =>false, 'entry_id' => false)); ?>
  </div>   
</div>   

<script>
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect :'none',
            closeEffect : 'none'
        });
        $('.bxslider').bxSlider();
    });
</script>
     
     <?php wp_footer(); ?>
    </body>
</html>