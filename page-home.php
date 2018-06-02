<?php

/* 
    Template name: Home
*/

 get_header(); ?>

    <div class="row" >
        <div id="writer" class="awsr-front-grid awsr-front-grid-left col-sm-6 ">
            <h1>
                <span style="vertical-align: -25vh;">
                    <small>A freelance &nbsp;</small><a href="<?php echo home_url('/a-writer'); ?>">writer</a>
                </span>
            </h1>

            <p>

                <div id="home-border" style="border-right: 0.5px #ffb600 solid; padding-right:10px; line-height: 2.5;">
                    <span style="background-color:whitesmoke;">
                        <h3 id="home">Words to make your business 💥 pop 💥</h3>
                        <br>Reliable, speedy, &amp; experienced
                        <br>My copy increases engagement, leads, &amp; conversions
                        <br> Reader focussed, backed up by
                        <A href="<?php echo home_url('/writing'); ?>">a portfolio of satisfied customers</A>
                        <br> SEO optimised: 10+ years in the industry
                        <br> Published in print and digital: magazines, newspapers &amp; beyond</span>
            </p>
            </div>
        </div>

        <div id="web-designer" class="awsr-front-grid awsr-front-grid-right col-sm-6 ">
            <h1 id="home">
                <span style="vertical-align: -25vh;">
                    <small>&amp; </small>
                    <a href="<?php echo home_url('/a-web-designer'); ?>">web designer</a>

            </h1>
            </p>

            <div id="home-border" style="border-left: 0.5px #ffb600 solid; padding-left:10px; line-height: 2.5;">
                <span style="background-color:whitesmoke;">
                    <h3 id="home">web presences that 🎶 sing 🎶</h3>
                    <span style="background-color:whitesmoke;">
                        <br>Wordpress themes and websites to inspire
                        <br> Confident with the time-tested trio of HTML, CSS, &amp; PHP
                        <br> Understanding of SEO requirements for effective web design
                        <br> Full websites from scratch, or oversight on redesign and optimisation
                        <br> Join my
                        <a href="https://chrislee.is/a-web-designer/">growing portfolio</a> of slick websites
                    </span>

            </div>
        </div>

    </div>
    <div class="row" id="work-together">
        <div class="col" style="text-align:center;">
            Want to work together? Let's chat,
            <a href="https://chrislee.is/contact-me">digitally</a> or over coffee ☕ </div>
    </div>

    <?php get_footer(); ?>