<?php get_header(); ?>

<!-- Start of the loop -->

<div class="container" id="awsr-content">



 <!--   <h2>Archive of posts about
        <?php single_tag_title(); ?>
</h2> -->

    <div class="row">

<?php echo category_description(); ?>

        <?php 
    
    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

        <!-- Start of the featured image -->

        <a href="<?php the_permalink(); ?>">
            <div class="col-md-4 awsr-gallery-tile">

                <img class="awsr-gallery-img" src="<?php the_post_thumbnail_url('169-gallery'); ?>">

                <!-- Start of the post info -->

                <div class="awsr-gallery-title">

                    <small id="awsr-archive-date">
                        <?php the_time('j/n/Y'); ?>
                    </small>
                    <br>
                    <small>
                        <?php the_title(); ?>
                        <br>
                    </small>

                </div>
                <!-- .awsr-gallery-title -->
        </a>

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