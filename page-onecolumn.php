<?php
/* Template Name: One column Page  */
/* Template Post Type: post, page, event, blog */

get_header();

if (has_post_thumbnail() ): 
$thumb = get_the_post_thumbnail_url(); ?>

<div class="header-small" style="background-image: url('<?php echo $thumb;?>')">

<div style="margin:0 auto;">
            <h1 > <?php echo get_the_title(); ?> </H1>
            </div>

    </div>
<?php endif;

if (have_posts()) :
    while (have_posts()) :


       
?>
        



<div class="wrapper">

            <section>

           
            
        <?php
      the_post();
      the_content();
    
      
   endwhile;
endif;

?>


  


            
            </section>

        </div>


<?php get_footer();






