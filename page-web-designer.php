<?php

/* 
    Template name: Web Designer
*/

 get_header(); ?>

    <!-- Start of the loop -->

    <div class="container" id="awsr-content">

        <h2>
            WEB PRESENCES THAT 🎶 SING 🎶
        </h2>
        <p>


            <p>
                <?php echo $post->post_content; ?>

                <hr>

                <div class="row">
                    <div class="col-md-8">

                        <h3>Testimonials.</h3>

                        <?php 

    // The query, pulls posts that are 'trip' post type

    $the_query = new WP_Query( array( 'post_type' => 'testimonial', 'category_name' => 'Testimonial-web') ); 

    // The loop

    if( $the_query->have_posts() ):
    
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

                        <div class="row">
                            <div class="col-sm-2">

                                    <img id="awsr-testimonial-head" src="<?php the_post_thumbnail_url('small-wide'); ?>">
                                <br>

                            </div>
                            <!-- col -->
                            <div class="col-sm-9">

                                <h4>
                                    <?php the_title(); ?>
                                </h4>
                                <small><?php the_content(); ?><p> -
                                    <a href="<?php the_permalink(); ?>">Read full testimonial</a></small>
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

                    <div class="col-md-4">

                        <hr class="resp">

                        <h3>Portfolio.</h3>

                        <div class="row">

                            <?php 

    // The query, pulls posts that are 'trip' post type

    $the_query = new WP_Query( array( 'post_type' => 'websites' ) ); 

    // The loop

    if( $the_query->have_posts() ):
    
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

                            <!-- Start of the featured image -->

                            <div class="col-sm-12 awsr-gallery-tile" style="height: auto;">

                                <img  id="awsr-blog-thumb" class="awsr-gallery-img awsr-portfolio-img" style="filter: grayscale(60%);" src="<?php the_post_thumbnail_url('small-wide'); ?>">

                                <!-- Start of the post info -->

                                <div class="awsr-gallery-title" style="background-color: white;">

                                    <h4>
                                        <?php the_title(); ?>
                                        <br>
                                    </h4>

                                </div>
                                <!-- .awsr-gallery-title -->

                                <div class="awsr-ride-blurb">
                                    <small>
                                        <?php the_content(); ?>
                                    </small>
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
                <!-- .col -->
    </div>
    <!-- .row -->
    </div>
    <!-- .container -->


    <?php get_footer(); ?>