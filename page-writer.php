<?php

/* 
    Template name: Writer
*/

 get_header(); ?>

    <div class="container" id="awsr-content" >
        <h2>WORDS TO MAKE YOUR BUSINESS 💥 POP 💥</h2>
        <div class="row">
            <div class="col-md-8">
                <p>
                    <?php echo $post->post_content; ?>

            </div>
            <!-- col -->
            <div class="col-md-4">
                <p>
                    <p>
                        My copy is:
                        <small>
                            <ul>
								<li>Compelling, persuasive and professional</li>
                                <li>Benefit-led and tailored to personas and audiences</li>
                                <li>Strategic, well structured, and optimised for SEO performance</li>
                                <li>Underpinned by analytics and research</li>
                            </ul>
                        </small>
                       
            </div>
            <!-- col -->
        </div>
        <!-- row -->

        <hr>

        <div class="row">
            <div class="col-lg-6 col-md-12">

                <h3>Testimonials.</h3>

                <?php 

    // The query, pulls posts that are 'trip' post type

    $the_query = new WP_Query( array( 'post_type' => 'testimonial', 'category_name' => 'Testimonial-writing') ); 

    // The loop

    if( $the_query->have_posts() ):
    
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

                <div class="row">
                    <div class="col-sm-3">

                       
                            <img id="awsr-testimonial-head" src="<?php the_post_thumbnail_url('small-wide'); ?>">
                       
                        <br>

                    </div>
                    <!-- col -->
                    <div class="col-sm-9">

                        <h4>
                            <?php the_title(); ?>
                        </h4><p>
                        <small><?php the_excerpt(); ?></small>
                        
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

            <div class="col-lg-3 col-md-6">

                <hr class="resp">

                <h3>Portfolio.</h3>

				<small>Highlights below, extensive portfolio <a href="<?php echo home_url('/writing-portfolio'); ?>">here</a>.</small>

                <div class="row">

                    <?php 

    // The query, pulls posts that are 'trip' post type

    $the_query = new WP_Query( array( 'post_type' => 'writing', 'category_name' => 'portfolio featured') ); 

    // The loop

    if( $the_query->have_posts() ):
    
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

                    <!-- Start of the featured image -->

                    <a href="<?php the_permalink(); ?>">
                        <div class="col-sm-12" id="awsr-portfolio-container" >

                            <img id="awsr-portfolio-thumb" src="<?php the_post_thumbnail_url('small-wide'); ?>">

                            <!-- Start of the post info -->

                            <div class="awsr-gallery-title">

                                <h4>
                                    <?php the_title(); ?>
                                    <br>
                                </h4>

                            </div>
                            <!-- .awsr-gallery-title -->
                    </a>

                    <div >
                        <small id="awsr-writer-blurb">
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
            </div>
            <!-- .col -->

            <div class="col-lg-3 col-md-6">

                <hr class="resp">

                <h3>Clients.</h3>

                <small>As a freelance writer.</small><p>

                <div class="row">

                    <?php 

    // The query, pulls posts that are 'trip' post type

    $the_query = new WP_Query( array( 'post_type' => 'clients', 'category_name' => 'client own') ); 

    // The loop

    if( $the_query->have_posts() ):
    
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

                    <!-- Start of the featured image -->

                    <div class="col-4 col-sm-6 awsr-gallery-tile" >
<div id="awsr-portfolio-client-image-wrapper">
                        <img id="awsr-portfolio-client-image"  src="<?php the_post_thumbnail_url('small-wide'); ?>">
    </div>
                        <!-- Start of the post info : copy and paste from prev section if needed again -->

                        <div class="awsr-ride-blurb" >
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
                <small>Through agencies.</small><p>
                <div class="row">

                 

                </div>
                <!-- .row -->

                <div class="row">

                    <?php 

    // The query, pulls posts that are 'trip' post type

    $the_query = new WP_Query( array( 'post_type' => 'clients', 'category_name' => 'client agency') ); 

    // The loop

    if( $the_query->have_posts() ):
    
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

                    <!-- Start of the featured image -->

                    <div class="col-4 col-sm-6 awsr-gallery-tile"  >
                    <div id="awsr-portfolio-client-image-wrapper">
                        <img id="awsr-portfolio-client-image" src="<?php the_post_thumbnail_url('small-wide'); ?>">
    </div>
                        <!-- Start of the post info : copy and paste from prev section if needed again -->

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
        <!-- .row -->
    </div>
    <!-- .container -->
    </div>
    <!-- .container-fluid -->

    <?php get_footer(); ?>