<?php get_header(); ?>

<!-- Start of the post info -->
     
 <div class="container" id="awsr-content">

<img id="awsr-testimonial-head" src="<?php the_post_thumbnail_url('small-wide'); ?>">
    <h3 id="awsr-testimonial-margin">
        <?php the_title(); ?>
    </h3>

    <?php 
    
    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

    <div id="awsr-single-content">
        <?php the_content(); ?>
    </div>




</div>
<!-- .awsr-content -->

<?php endwhile;

    endif;

    ?>

<?php get_footer(); ?>