<?php get_header(); ?>

<!-- Start of the post info -->

<!--<div class="awsr-content-testimonial"> -->
     
 <div class="container" id="awsr-content">


    <h2 >
        <?php the_title(); ?>
    </h2>


    <?php 
    
    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

<div class="row">
    <div class="col-sm-1 offset-sm-1" style="text-transform:uppercase;"><strong>Brief</strong></div>
    <div class="col-sm-10"><?php the_content(); ?></div>
</div>
<div class="row">
    <div class="col-sm-1 offset-sm-1" style="text-transform:uppercase;"><strong>Image</strong></div>
    <div class="col-sm-10"><img style="border: 1px darkslategrey solid; width: 400px; max-width:100%;" src="<?php the_post_thumbnail_url('full'); ?>"></div>
</div>

    




</div>
<!-- .awsr-content -->

<?php endwhile;

    endif;

    ?>

<?php get_footer(); ?>