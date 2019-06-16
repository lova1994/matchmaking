<?php
/* Sidan för blogginlägg */
get_header();
?>

<div class="wrapper">

<?php
## Custom query start, ska skriva ut ikoner med titel och tillhörande text
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'blogg',
    'posts_per_page' => 10,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
   while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
 <section class="centered">           
            <h1><?php the_title(); ?></h1>
            <p class="date"> <?php echo get_the_date(); ?> </p>

                <?php
                the_content(); 
                 
             if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail( 'full', array( 'class'  => 'page-image' ) ); // show featured image
            } 
            ?>
            </section>
        <?php ## nollställer query
    endwhile;
endif;
wp_reset_query();
?>

       
</div>



<?php
 
get_footer();