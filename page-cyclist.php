<?php

/* 
    Template name: Cyclist
*/

 get_header(); ?>

    <!-- Start of the loop -->

    <div class="awsr-background" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>

    <div class="awsr-background-resp">
        <img style="width: 100vw; height: auto; padding:0px; margin:0px;" src="<?php the_post_thumbnail_url('small-wide'); ?>">
    </div>

    <!-- Start of the post info -->

    <div class="awsr-content">

        <?php echo $post->post_content; ?>

        <hr>

        <div class="row">
            <div class="col-md-7">

                <h3>What people have said about my ride leading</h3>

                <?php 

    // The query, pulls posts that are 'trip' post type

    $the_query = new WP_Query( array( 'post_type' => 'testimonial', 'category_name' => 'Testimonial-cycling') ); 

    // The loop

    if( $the_query->have_posts() ):
    
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

                <div class="row">
                    <div class="col-sm-3">

                        <a href="<?php the_permalink(); ?>">
                            <img style="width: 100px; max-width: 100%; border: 1px solid #ffb600; border-radius: 50px;" src="<?php the_post_thumbnail_url('small-wide'); ?>">
                        </a>
                        <br>

                    </div>
                    <!-- col -->
                    <div class="col-sm-8">

                        <h4>
                            <?php the_title(); ?>
                        </h4>
                        <?php the_excerpt(); ?>
                        <h4>-
                            <a href="<?php the_permalink(); ?>">Read full testimonial</a>
                        </h4>
                        <hr>
                    </div>
                    <!-- col -->

                </div>
                <!-- row -->

                <?php endwhile;

    endif;

?>

            </div>
            <!-- .col -->

            <div class="col-md-5">

                <hr class="resp">

                <h3>Rides:</h3>

                <div class="row">

                    <?php 

    // The query, pulls posts that are 'trip' post type

    $the_query = new WP_Query( array( 'post_type' => 'trip') ); 

    // The loop

    if( $the_query->have_posts() ):
    
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

                    <!-- Start of the featured image -->

                    <a href="<?php the_permalink(); ?>">
                        <div class="col-sm-6 awsr-gallery-tile" style="height: auto;">

                            <img class="awsr-gallery-img" src="<?php the_post_thumbnail_url('small-wide'); ?>">

                            <!-- Start of the post info -->

                            <div class="awsr-gallery-title" style="background-color: white;">

                                <h4>
                                    <?php the_title(); ?>
                                    <br>
                                </h4>

                            </div>
                            <!-- .awsr-gallery-title -->
                    </a>

                    <div class="awsr-ride-blurb">
                        <?php the_excerpt(); ?>
                    </div>

                    </div>
                    <!-- .col -->

                    <?php endwhile;

    endif;

?>

                </div>
                <!-- .row -->
            </div>
            <!-- .col -->
        </div>
        <!-- .row -->
    </div>
    <!-- .awsr-content -->

    <?php get_footer(); ?>