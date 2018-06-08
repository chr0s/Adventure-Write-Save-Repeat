<?php

/* 
    Template name: Plain
*/

 get_header(); ?>

    <div class="container" id="awsr-content" >

        <h2><?php the_title(); ?></h2>

		<?php echo  $post->post_content; ?>

			</div><!-- container --> 
           

    <?php get_footer(); ?>