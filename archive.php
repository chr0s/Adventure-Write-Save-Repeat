<?php get_header(); ?>

<!-- Start of the loop -->

<div class="container" id="awsr-content">



    <h2>Archive of posts about
        <?php single_tag_title(); ?>
</h2> <hr>

    <div class="row">

<?php echo category_description(); ?>

        <?php 
    
    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

        <!-- Start of the featured image -->

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

<!-- End of the loop -->