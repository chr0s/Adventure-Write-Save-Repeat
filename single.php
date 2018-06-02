<?php get_header(); ?>

</div>
<!-- .container-fluid -->

<?php $filter = get_post_meta(get_the_ID(), 'filter', true); ?>

<div class="top-container" style="border: none;
  width: 100vw;
  max-width: 100%;
  height: calc(100vh - 5px);
  position: relative;
  z-index: 1;">

    <?php 
    
        if( have_posts() ):
    
            while( have_posts() ): the_post(); ?>



    <div class="awsr-image-to-fix" style="width: auto; height: 100%;">

        <img style="filter: <?php echo $filter; ?>;  position: fixed;
  object-fit: cover;
  height: 100%;
  width: 100vw;
  max-width: 100%;
  left: 0;
  top: 0;" class="background" src="<?php the_post_thumbnail_url('full'); ?>">

    </div>
    <!-- .awsr-image-to-fix -->

    <div class="awsr-new-title-to-fix" style="background-color: transparent;
  position: absolute;
  bottom: 3rem;
  width: auto;
  max-width: calc(100% - 10px - 10px - 4px);
  height: auto;
  text-shadow: 0 1px 2px rgba(18,31,31,.6);
  padding: 0 2em;">

        <h2 id="awsr-single-title-resp" style="font-size: 60px;
  font-weight: 700;
  color: white;
  word-wrap: break-word;
  font-family: raleway;
  text-transform: uppercase;
  text-shadow: 3px 3px 6px rgba(18,31,31,0.8);">

            <?php the_title(); ?>

        </h2>

    </div>
    <!-- .title -->

</div>
<!-- .top-container -->

<div class="bottom-container" style="
  width: 100vw;
  max-width: 100%;
  position: relative;
  z-index: 1;
  height: 100%; background-color: white; border-top: 1px solid #ffb600;">





    <div class="content">

        <div class="awsr-single-title-resp">
            <h2 id="awsr-single-title-resp">
                <?php the_title(); ?>
            </h2>
        </div>

        <h4 style="margin-bottom: 10px;">

            Published on
            <?php the_time('F j Y'); ?>

        </h4>

        <h4>

            <?php the_tags( 'Part of a series about ' ); ?>

        </h4>

        <hr>
        <img src="<?php the_post_thumbnail_url('small-wide'); ?>" class="hide-resp" style="width: 90vw">
        <div class="the-content">

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