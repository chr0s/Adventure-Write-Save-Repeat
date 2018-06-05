<?php get_header(); ?>

 <div class="container" id="awsr-content">
    <div class="awsr-postTitle">
        <h2>Search results 🕵️</h2>
    </div>

    <?php
global $query_string;
$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
  $query_split = explode("=", $string);
  $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$the_query = new WP_Query($search_query);
if ( $the_query->have_posts() ) : 
?>
        <!-- the loop -->

        <ul>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="row">

                <div class="col-lg-5 col-md-6" style="padding-bottom: 20px;">

                    <a href="<?php the_permalink(); ?>">
                        <img class="awsr-gallery-img" src="<?php the_post_thumbnail_url('small-wide'); ?>">
                    </a>

                </div>
                <!-- col -->

                <div class="col-lg-7 col-md-6">

                    <a href="<?php the_permalink(); ?>">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                    </a>
                    <br>
                    <strong>Type:</strong>
                    <?php echo get_post_type(); ?>
                    <br>
                    <strong>Published on:</strong>
                    <?php the_time('j/n/Y'); ?>
                    <br>
                    <?php the_excerpt(); ?>

                    <hr>

                </div>
                <!-- .col -->
                </a>

            </div>
            <!-- .row -->
            <?php endwhile; ?>
        </ul>
        <!-- end of the loop -->

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p>Hmm, nothing found unfortunately!<p> Head to
            <a href="<?php echo home_url(); ?>">the home page</a> or
            <a href="<?php echo home_url('/thinking-about'); ?>">the blog</a>.</p>
        <?php endif; ?>