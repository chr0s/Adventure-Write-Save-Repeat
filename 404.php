<?php



 get_header(); ?>

    </div>
    <!-- container-fluid -->

    <?php $filter = get_post_meta(get_the_ID(), 'filter', true); ?>

    <div class="container-fluid" id="awsr-blog-hero-container">

        <!-- hero image: style tag required for PHP call which applies filter, whose value is determined via post-specifc custom field entry -->

        <img id="awsr-blog-hero-image" src="<?php echo home_url('wp-content/uploads/2018/01/Wally404.jpg'); ?>">

        <div id="awsr-content-404">

            <h2>
                Nothing here!
            </h2>
            Find Wally instead, or head to the
            <a href="<?php echo home_url() ?>">home page</a> or
            <a href="<?php echo home_url('/thinking-about/') ?>">blog</a>.
        </div>
        <!-- awsr-single-title-container -->
    </div>
    <!-- awsr-blog-hero-container -->


    <div id="awsr-single-title-resp">
        <div class="container" id="awsr-content">
            <h2>
                Nothing here!
            </h2>


            Find Wally instead, or head to the
            <a href="<?php echo home_url() ?>">home page</a> or
            <a href="<?php echo home_url('/thinking-about/') ?>">blog</a>.

        </div>

    </div>
    <!-- .content -->
    </div>
    <!-- .bottom-container -->

    <?php get_footer(); ?>