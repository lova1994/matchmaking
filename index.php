<?php

get_header();
if (have_posts()) :
   while (have_posts()) :

      ?> <div class="wrapper" style="min-height:600px;">

      <section class="centered">
      

      <?php
echo get_the_title();
      the_post();
      the_content();
   endwhile;
endif;

?>

</section>
</div>

<?php get_footer();
