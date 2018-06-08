<?php get_header(); ?>

 <div class="container" id="awsr-content">
   
        <h2>Search results 🕵️</h2>

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

        
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

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
                    <h4> <?php the_time('j/n/Y'); ?></h4>
                    
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
            <?php endwhile; ?>
        </ul>
        <!-- end of the loop -->

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p>Hmm, nothing found unfortunately!<p> Head to
            <a href="<?php echo home_url(); ?>">the home page</a> or
            <a href="<?php echo home_url('/thinking-about'); ?>">the blog</a>.</p>
        <?php endif; ?>