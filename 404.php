<?php get_header(); ?>

<div class="awsr-background" style="background-image: url('<?php echo home_url('/wp-content/uploads/2018/01/Wally404.jpg'); ?>');"></div>

<div class="awsr-content-404" style="background-color: white;">

    <p>
        <h2>Nothing here!</h2>
        <br>You can either double-check the URL, head to
        <strong>
            <a href="<?php echo home_url(); ?>">the home page</a>
        </strong> or
        <strong>
            <a href="<?php echo home_url('/thinking-about'); ?>">the blog</a>
        </strong>, or
        <strong>find Wally!</strong>
    </p>

    <a href="<?php echo home_url('/wp-content/uploads/2018/01/Wally404sm.jpg'); ?>">
        <img class="awsr-resp-img" src="<?php echo home_url('/wp-content/uploads/2018/01/Wally404sm.jpg'); ?>">
    </a>

</div>
<!-- .awsr-content -->

<?php get_footer(); ?>