<?php get_header(); ?>

<div class="container" id="awsr-content" >

    <h2>The blog</h2>

    <div id="awsr-tags">I write about the following things:<p>

    <?php $tags = get_tags();
$html = '<div >';
foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
			
	$html .= "<a href='{$tag_link}' class='{$tag->slug}' id='awsr-tag'>";
	$html .= "{$tag->name}</a>";
}
$html .= '<hr></div>';
echo $html; ?>

</div>


    <?php 

    // The loop

    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

    <div class="row">

        <div class="col-sm-4">

            <a href="<?php the_permalink(); ?>">
                <img id="awsr-blog-thumb" src="<?php the_post_thumbnail_url('small-wide'); ?>">
            </a>

        </div>
        <!-- col -->

        <div class="col-sm-8">

            <a href="<?php the_permalink(); ?>">
                <h2>
                    <?php the_title(); ?>
                </h2>
            </a>
            <h4>
                <?php the_time('j/n/Y'); ?>
                <?php the_tags( '| #', '&nbsp;&nbsp;#', $after ); ?>
            </h4>
            <?php the_excerpt(); ?>
            <h4>
                <a href="<?php the_permalink(); ?>">Read more</a>
            </h4>

            <hr>

        </div>
        <!-- .col -->
        </a>




    </div>
    <!-- .row -->

    <?php endwhile;

    endif;

?>

    <div class="col-8 offset-2 awsr-nav">
        <h3>
            <?php posts_nav_link(); ?>
        </h3>
    </div>


</div>
<!-- .awsr-container -->

<?php get_footer(); ?>