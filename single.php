<?php get_header(); ?>

</div><!-- container-fluid -->

<?php $filter = get_post_meta(get_the_ID(), 'filter', true); ?>

<div class="container-fluid" id="awsr-blog-hero-container">

    <?php 
    
        if( have_posts() ):
    
            while( have_posts() ): the_post(); ?>

        <img 
            id="awsr-blog-hero-image"
            style="filter: <?php echo $filter; ?>;" 
            src="<?php the_post_thumbnail_url('full'); ?>
        ">

   
    <div id="awsr-single-title-container">

        <h2 id="awsr-single-title">

            <?php the_title(); ?>

        </h2>

    </div>
    <!-- awsr-single-title -->

</div>   <!-- awsr-blog-hero-container -->

    <div class="container" id="awsr-content"  >

        <div id="awsr-single-title-resp">
            <h2 >
                <?php the_title(); ?>
            </h2>
        </div>

        <h4 >

            Published on
            <?php the_time('F j Y'); ?>

        </h4>

        <h4>

            <?php the_tags( 'Part of a series about ' ); ?>

        </h4>

        <hr>
        <div id="awsr-single-content">

            <?php the_content(); ?>

        </div>
        <!-- .the-content -->

        <hr>

        <?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>

        <?php endwhile;

    endif;

    ?>

    </div>
    <!-- .content -->
</div>
<!-- .bottom-container -->

<?php get_footer(); ?>