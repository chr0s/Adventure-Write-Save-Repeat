<?php get_header(); ?>

<!-- Start of the post info -->

<!--<div class="awsr-content-testimonial"> -->
     
 <div class="container" id="awsr-content">


    <h2 >
        <?php the_title(); ?>
    </h2>

    <?php 
    
    if( have_posts() ):
    
        while( have_posts() ): the_post(); ?>

        <?php the_content(); ?>

        <hr>

<!-- 
    Brief field
        -->

<div class="row">
<div class="col-md-1"><h3>Brief.</h3></div>
    <div class="col-md-10 offset-md-1">
            <?php
        // Grab the metadata from the database
        $writing_brief = wpautop(get_post_meta( get_the_ID(), 'writing_brief', true ));

        // Echo the metadata
        echo ( $writing_brief );
        ?><hr>
</div>

<!-- 
    Results field 
        -->

</div>
<div class="row">
<div class="col-md-1"><h3>Results.</h3></div>
    <div class="col-md-10 offset-md-1">
            <?php
        // Grab the metadata from the database
        $writing_results = wpautop( get_post_meta( get_the_ID(), 'writing_results', true ) );

        // Echo the metadata
        echo ( $writing_results );
        ?>    <hr>
    </div>
</div>

<!-- 
    Gallery field 
        --> 

<div class="row">
<div class="col-md-1"><h3>Gallery.</h3></div>
    <div class="col-md-10 offset-md-1">
       <?php jt_cmb2_file_list_images( 'writing_gallery', 'xs-wide' );?>
    </div>
</div>

<!-- 
    End of table
        -->

</div>
<!-- .awsr-content -->

<?php endwhile;

    endif;

    ?>



<?php get_footer(); ?>