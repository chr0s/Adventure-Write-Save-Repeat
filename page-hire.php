<?php

/* 
    Template name: Hire
*/

 get_header(); ?>

    </div>
    <!-- container-fluid -->

    <?php $filter = get_post_meta(get_the_ID(), 'filter', true); ?>

    <div class="container-fluid" id="awsr-blog-hero-container">


        <?php 
    
        if( have_posts() ):
    
            while( have_posts() ): the_post(); ?>




        <!-- hero image: style tag required for PHP call which applies filter, whose value is determined via post-specifc custom field entry -->

        <img id="awsr-blog-hero-image" style="filter: <?php echo $filter; ?>;" src="<?php the_post_thumbnail_url('full'); ?>
        ">

    </div>
    <!-- awsr-blog-hero-container -->

    <div id="awsr-single-title-container">

        <h2 id="awsr-single-title">

            <?php the_title(); ?>


        </h2>

    </div>
    <!-- awsr-single-title-container -->

    <div class="container" id="awsr-content">

        <div id="awsr-single-title-resp">
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>

        <h4>

            <?php the_tags( 'Part of a series about ' ); ?>

        </h4>

        <?php the_content(); ?>

        <?php endwhile;

    endif;

    ?>

    </div>
    <!-- .content -->
    </div>
    <!-- .bottom-container -->

    <?php get_footer(); ?>