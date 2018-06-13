<?php get_header(); ?>

<div class="container" id="awsr-content">



    All posts in the series '
        <?php single_tag_title(); ?>':
 <hr>

    <div class="row">

<?php echo category_description(); ?>

        <?php 
    
    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

        <a href="<?php the_permalink(); ?>">
            <div class="col-md-4">

                <img id="awsr-portfolio-thumb" src="<?php the_post_thumbnail_url('169-gallery'); ?>">

                 <div class="awsr-gallery-title" >

                    
<small>
    <?php the_title(); ?>
    <br>
</small>

</div>
<!-- .awsr-gallery-title -->
</a>

<div id="awsr-archive-blurb">
    <small>
        <?php the_excerpt(); ?>
    </small>
    <hr>
</div>

</div>
        <!-- .col -->

        <?php endwhile;

    endif;

?>

    </div>
    <!-- .row -->

    <div class="col-8 offset-2 awsr-nav">
        <h3>
            <?php posts_nav_link(); ?>
        </h3>
    </div>

</div>
<!-- .awsr-content-archive -->
