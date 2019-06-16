<?php
 /* Template Name: Front Page */
get_header();

      ?>  


<?php
/* Hämtar en banner som går att ändra via sidans featured image */
$thumb = get_the_post_thumbnail_url(); ?>
<div class="header" style="background-image: url('<?php echo $thumb;?>')">
<div style="margin:0 auto;">
            <h1> </H1>
            </div>
        </header>
    </div>

<div class="wrapper-first-box" >
<?php   if(is_active_sidebar('front-page-1')){
dynamic_sidebar('front-page-1');
}
?>

         <?php   if(is_active_sidebar('front-page-2')){
dynamic_sidebar('front-page-2');
}
?>

        </div> <!-- wrapper ends-->
    <div class="wrapper">
            <section class="centered">
            
    <?php
## Custom query start, text på startsidan
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'frontpage-area',
    'posts_per_page' => 1,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
   while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
            
            <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('frontpage-area');
            endif;
            ?>
            <h2><?php the_title(); ?></h2>
                <?php
                the_content(); ?>
            
        <?php ## nollställer query
    endwhile;
endif;
wp_reset_query();
?>

</section>
    </div>



<!-- three column with icon area start -->
<div class="wrapper">
<?php
## Custom query start, ska skriva ut ikoner med titel och tillhörande text
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'icons',
    'posts_per_page' => 3,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
   while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
            <div class="three-column">
            <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('icons');
            endif;
            ?>
            <h1><?php the_title(); ?></h1>
                <?php
                the_content(); ?>
            </div>
        <?php ## nollställer query
    endwhile;
endif;
wp_reset_query();
?>
    </div>
      <?php
get_footer();

