<?php

/* 
    Template name: Contact
*/

 get_header(); ?>

    <!-- Start of the loop -->

    <div class="awsr-background" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>

    <div class="awsr-background-resp">
        <img style="width: 100vw; height: auto; padding:0px; margin:0px;" src="<?php the_post_thumbnail_url('small-wide'); ?>">
    </div>

    <!-- Start of the post info -->

    <div class="awsr-content" style="position: relative; border-top: none; top: 120px;">

        <div class="row">
			
			If you're looking for a &nbsp;<strong>good, reliable and cost-effective <a href="https://chrislee.is/a-writer/">freelance writer</a> or <a href="https://chrislee.is/a-web-designer">web designer</a></strong>, get in touch.<p>

If you're looking for <strong>help planning your own cycling adventure, especially across Canada</strong>, definitely get in touch!<p>
			
			<hr>

            <div class="col-lg-6">

                <?php echo $post->post_content; ?>

            </div>
            <!-- .col-6 -->

            <div class="col-lg-6">

                <?php echo do_shortcode('[contact-form-7 id="1780" title="Contact page"]'); ?>

            </div>
            <!-- .col-6 -->

        </div>
        <!-- .row -->

    </div>
    <!-- .awsr-content -->

    <?php get_footer(); ?>