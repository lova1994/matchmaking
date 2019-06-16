<?php

/* Template Name: Two column Page */
/* Template Post Type: post, page, event, blog */

get_header();
?>

  <div class="wrapper">


<div class="column-left">
<?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail( 'full', array( 'class'  => 'page-image' ) ); // show featured image
        } 
    ?>
    </div>

    <div class="column-right">
    <?php if (have_posts()) :
   while (have_posts()) :
        the_post();
      the_content();
      ?>

    </div>

</div>
<?php
endwhile;
endif;
get_footer();