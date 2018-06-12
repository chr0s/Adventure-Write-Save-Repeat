<?php

/* 
    Template name: Web Designer
*/

 get_header(); ?>

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

    $the_query = new WP_Query( array( 'post_type' => 'testimonial', 'category_name' => 'Testimonial-web') ); 

    // The loop

    if( $the_query->have_posts() ):
    
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

                        <div class="row">
                            <div class="col-sm-2">

                                    <img id="awsr-testimonial-head" src="<?php the_post_thumbnail_url('xs-test'); ?>">
                                <br>

                            </div>
                            <!-- col -->
                            <div class="col-sm-9">

                                <h4>
                                    <?php the_title(); ?>
                                </h4>
                                <small><?php the_content(); ?><p><h4> -
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

                        <small>Click to see more project info.</small>

                        <div class="row">

                            <?php 

    $the_query = new WP_Query( array( 'post_type' => 'websites' ) ); 

    // The loop

    if( $the_query->have_posts() ):
    
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

                            <a href="<?php the_permalink(); ?>">
                        <div class="col-sm-12" id="awsr-portfolio-container" >

                            <img id="awsr-portfolio-thumb" src="<?php the_post_thumbnail_url('small-wide'); ?>">

                            <div class="awsr-gallery-title">

                                <h4>
                                    <?php the_title(); ?>
                                    <br>
                                </h4>

                            </div>
                            <!-- .awsr-gallery-title -->
                    </a>
                                <!-- .awsr-gallery-title -->

                                <div class="awsr-ride-blurb">
                                    <small>
                                        <?php the_excerpt(); ?>
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