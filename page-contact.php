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

    <div class="container" id="awsr-content">

        <h2><?php the_title(); ?></h2>

        <div class="row">

        <div class="col-12">

		If you're looking for a <strong>good</strong>, <strong>reliable</strong>, and <strong>cost-effective</strong> <a href="https://chrislee.is/a-writer/">freelance writer</a> or <a href="https://chrislee.is/a-web-designer">web designer</a></strong>, get in touch.<p>

If you're looking for <strong>help planning your own cycling adventure, especially across Canada</strong>, definitely get in touch!<p>

Email: <strong><a href="mailto:hi@chrislee.is">hi@chrislee.is</a></strong><p>

Social media: <span style="font-size: larger;"><strong><a id="social" href="http://instagram.com/chrislee.is" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></strong>
<strong><a id="social" href="https://twitter.com/chrisleeis" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a></strong>
<strong><a id="social" href="https://www.linkedin.com/in/chrisleeis/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a></strong>
<strong><a id="social" href="https://github.com/chr0s/" target="_blank"><i class="fab fa-github-square"></i></a></strong></span>
			</div><!-- col --> 
            </div><!-- row -->

        <div class="row">
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