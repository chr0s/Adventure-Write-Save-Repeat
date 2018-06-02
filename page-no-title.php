<?php

/* 
    Template name: No title
*/

 get_header(); ?>

    <!-- Start of the loop -->

    <?php 
    
    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

    <!-- Start of the post info -->

    Posted
    <?php the_time('F j, Y'); ?> at
    <?php the_time('g:i a'); ?> in
    <?php the_category(); ?>.
    <?php the_content(); ?>
    <hr>

    <?php endwhile;

    endif;

    ?>

    <!-- End of the loop -->

    <?php get_footer(); ?>