<h3>
    <a href="<?php the_permalink(); ?>">Aside:
        <?php the_title(); ?>
    </a>
</h3>
Posted
<?php the_time('F j, Y'); ?> at
<?php the_time('g:i a'); ?> in
<?php the_category(); ?>.
<?php the_content(); ?>