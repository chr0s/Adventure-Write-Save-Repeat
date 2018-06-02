<?php get_header(); ?>

<!-- Start of the post info -->

<div class="awsr-content-testimonial">
    <img style="width: 100px; border: 1px solid #ffb600; border-radius: 50px;" src="<?php the_post_thumbnail_url('small-wide'); ?>">
    <h3 style="display: inline; margin-left: 20px;">
        <?php the_title(); ?>
    </h3>

    <?php 
    
    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

    <div class="the-content" id="testimonial">
        <?php the_content(); ?>
    </div>




</div>
<!-- .awsr-content -->

<?php endwhile;

    endif;

    ?>

<?php get_footer(); ?>