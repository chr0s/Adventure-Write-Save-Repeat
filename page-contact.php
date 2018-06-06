<?php

/* 
    Template name: Contact
*/

 get_header(); ?>

    <div class="container" id="awsr-content">

        <h2><?php the_title(); ?></h2>

        <div class="row">

        <div class="col-12">

		If you're looking for a <strong>good</strong>, <strong>reliable</strong>, and <strong>cost-effective</strong> <a href="https://chrislee.is/a-writer/">freelance writer</a> or <a href="https://chrislee.is/a-web-designer">web designer</a></strong>, get in touch.<p>

			</div><!-- col --> 
            </div><!-- row -->

        <div class="row">
			
<div class="col-lg-4">

<p>Email: <strong><a href="mailto:hi@chrislee.is">hi@chrislee.is</a></strong></p>

<p>Social: <span id="awsr-social-icons"><strong><a id="social" href="http://instagram.com/chrislee.is" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></strong>
<strong><a id="social" href="https://twitter.com/chrisleeis" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a></strong>
<strong><a id="social" href="https://www.linkedin.com/in/chrisleeis/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a></strong>
<strong><a id="social" href="https://github.com/chr0s/" target="_blank"><i class="fab fa-github-square"></i></a></strong></span></p>

Form: <div id="right-point">👉</div><div id="down-point">👇</div><p>
</div>
          

            <div class="col-lg-8">

                <?php echo do_shortcode('[contact-form-7 id="1780" title="Contact page"]'); ?>

            </div>
            <!-- .col-6 -->

        </div>
        <!-- .row -->

    </div>
    <!-- .awsr-content -->

    <?php get_footer(); ?>