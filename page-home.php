<?php

/* 
    Template name: Home
*/

 get_header(); ?>

    <div class="row" id="awsr-home-lr-container">
        <div id="writer" class="awsr-front-grid awsr-front-grid-left col-md-6 ">
            <h1>
                <small>A freelance </small><a href="<?php echo home_url('/a-writer'); ?>">writer&nbsp;</a>
            </h1>

            <p>

                <div id="home-border-left">
                    <h3 id="home">Words that 💥 pop 💥</h3>
                    <br>Reliable, speedy, &amp; experienced
                    <br> Backed up by
                    <A href="<?php echo home_url('/writing-portfolio'); ?>">a portfolio of satisfied customers</A>
                    <br>My copy increases engagement, leads, &amp; conversions
                    <br> SEO optimised: 10+ years in the industry
                    <br> Published in print and digital: magazines, newspapers &amp; beyond
            </p>
            </div>
        </div>

        <div id="web-designer" class="awsr-front-grid awsr-front-grid-right col-md-6">
            <h1 >
                <small>&amp; </small>
                <a href="<?php echo home_url('/a-web-designer'); ?>">web designer</a>

            </h1>
            </p>

            <div id="home-border-right">

                <h3 id="home">web presences that 🎶 sing 🎶</h3>

                <br>Wordpress themes and websites to inspire
                <br> Confident with the time-tested trio of HTML, CSS, &amp; PHP
                <br> Understanding of SEO requirements for effective web design
                <br> Full websites from scratch, or oversight on redesign and optimisation
                <br> Join my
                <a href="<?php echo home_url(); ?>/a-web-designer/">growing portfolio</a> of slick websites
                </p>


            </div>
        </div>
    </div>
    <div class="row" id="work-together">
        <div class="col-sm-6 offset-sm-3 col-10 offset-1" id="cta">
            Want to work together? Let's chat,
            <a href="<?php echo home_url('/contact-me'); ?>">digitally</a> or over coffee ☕
        </div>
    </div>

    </div>

    <script>
        $('#writer').mouseover(function () {
            $('#web-designer').css("background-image",
                "url('<?php echo home_url(); ?>/wp-content/uploads/2017/10/Typewriter-1.png')");
            $('#home-border-right').css("opacity", "0"); // change css
        });
        $('#writer').mouseleave(function () {
            $('#web-designer').css("background-image", "none"); // change back css as it was
            $('#home-border-right').css("opacity", "1");
        });

        $('#web-designer').mouseover(function () {
            $('#writer').css("background-image",
                "url('<?php echo home_url(); ?>/wp-content/uploads/2018/06/surfing-the-web.png')");
            $('#home-border-left').css("opacity", "0"); // change css
        });
        $('#web-designer').mouseleave(function () {
            $('#writer').css("background-image", "none"); // change back css as it was
            $('#home-border-left').css("opacity", "1");
        });
    </script>

    <?php get_footer(); ?>