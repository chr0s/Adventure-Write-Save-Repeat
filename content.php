<div class="thumbnail-img">
    <?php the_post_thumbnail('thumbnail'); ?>
</div>

<h2>
    <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
</h2>
Posted
<?php the_time('F j, Y'); ?> at
<?php the_time('g:i a'); ?> in
<?php the_category(); ?>.
<?php the_content(); ?>