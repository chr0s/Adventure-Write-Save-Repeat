<?php get_header(); ?>

<!-- Start of the loop -->

<div class="container" id="awsr-content">

<h2>Portfolio of websites</h2> <p>

[add]

<div class="row" id="sticky-cta">
<div class="col-sm-6 offset-sm-3 col-10 offset-1" id="cta">
[add]
        </div></div>

<hr>
<div class="row">

        <?php 
    
    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

        <!-- Start of the featured image -->

        <a href="<?php the_permalink(); ?>">
            <div class="col-md-4" id="awsr-portfolio-container">

                <img id="awsr-portfolio-thumb"  src="<?php the_post_thumbnail_url('169-gallery'); ?>">

                <!-- Start of the post info -->

                <div class="awsr-gallery-title" >

                    
                    <small>
                        <?php the_title(); ?>
                        <br>
                    </small>

                </div>
                <!-- .awsr-gallery-title -->
        </a>

 <div >
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


    <?php get_footer(); ?>