<footer>

            <div class="wrapper">

                <div class="footer-column-left">

                <?php

                // Widget area för sidfot
	if(is_active_sidebar('footer-1')){
	dynamic_sidebar('footer-1');
	}
	?>
                  
                </div>

                <div class="footer-column-right">
                  <p class="footer-logo"> <?php echo get_bloginfo( 'name' ); ?></p>
                  
                 <?php 
                 // Dynamisk meny
                 wp_nav_menu(); ?>
                    
                </div>

            </div>
            <div id="footer-2">

<?php
if(is_active_sidebar('footer-2')){
dynamic_sidebar('footer-2');
}
?>
</div>
        </footer>

    </div> <!-- Container ends -->
    <?php wp_footer(); ?> 
</body>

</html>