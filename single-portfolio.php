<?php get_header(); ?>

<!-- Start of the post info -->

        <div class="container-fluid">
            <div class="awsr-postTitle">
                <h2 style="padding-bottom: 25px;"><?php the_title(); ?></h2>
            </div>

<div class="the-content">  <?php echo $post->post_content; ?>        
</div>
      


<div class="row">

<?php echo category_description(); ?>

    <?php 

    // The query, checks name of category

    $the_query = new WP_Query( array( 'post_type' => 'writing', 'category_name' => 'writing') ); 

    // The loop

    if( $the_query->have_posts() ):
    
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

<!-- Start of the featured image -->

            <a href="<?php the_permalink(); ?>"><div class="col-md-4 awsr-gallery-tile" style="height: auto;">

            <img class="awsr-gallery-img" style="opacity:0.9;" src="<?php the_post_thumbnail_url('small-wide'); ?>" >

<!-- Start of the post info -->

    <div class="awsr-gallery-title" style="background-color: white;">

        <h4><?php the_time('j/n/Y'); ?><br>
        <?php the_title(); ?><br></h4>

    </div><!-- .awsr-gallery-title --></a>

            </div><!-- .col -->

        <?php endwhile;

    endif;

?>

</div><!-- .row -->

</div><!-- .awsr-content -->

<?php get_footer(); ?>