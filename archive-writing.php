<?php get_header(); ?>

<div class="container" id="awsr-content">

<h2>My writing portfolio</h2> <p>

An ever-growing gallery of my published writing. If the descriptions aren't juicy enough for you, click the image for more detailed information about each project.<p>

If you like the look of these writings and fancy one for yourself, click the big blue button:

<div class="row" id="sticky-cta">
<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 " id="cta">

                <a href="<?php echo home_url('/contact-me'); ?>">Hire me</a>, and join my list of happy customers
            </div></div>

<hr>
<div class="row">

        <?php 
    
    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

        <a href="<?php the_permalink(); ?>">
            <div class="col-md-4" id="awsr-portfolio-container">

                <img id="awsr-portfolio-thumb"  src="<?php the_post_thumbnail_url('169-gallery'); ?>">

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

<?php get_footer(); ?>