<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Chrislee.is</title>
    <?php wp_head(); ?>

    <base href="http://localhost/chris">

    <link rel="shortcut icon" href="https://chrislee.is/wp-content/uploads/2018/04/ico.ico" />

    <script>
        (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-102373825-1', 'auto');
        ga('send', 'pageview');

    </script>

    <?php
#twitter cards hack
if(is_single() || is_page()) {
  $twitter_url    = get_permalink();
 $twitter_title  = get_the_title();
 $twitter_desc   = get_the_excerpt();
   $twitter_thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
    $twitter_thumb  = $twitter_thumbs[0];
      if(!$twitter_thumb) {
      $twitter_thumb = 'http://www.gravatar.com/avatar/8eb9ee80d39f13cbbad56da88ef3a6ee?rating=PG&size=75';
    }}
?>
        <meta name="twitter:card" value="summary" />
        <meta name="twitter:url" value="<?php echo $twitter_url; ?>" />
        <meta name="twitter:title" value="<?php echo $twitter_title; ?>" />
        <meta name="twitter:description" value="<?php echo $twitter_desc; ?>" />
        <meta name="twitter:image" value="<?php echo $twitter_thumb; ?>" />
        <meta name="twitter:site" value="@ChrisLee_is" />
  

            <meta name="twitter:creator" value="@ChrisLee_is" />
         

                <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<!-- Checking whether we're on the home page -->



<body <?php body_class( $awsr_classes ); ?> >

    <div class="container-fluid">

        <!-- Initiate header -->

        <div class="awsr-header">

            <div class="row">

                <div class="col-12">
                    <h1>
                        <a href="<?php echo home_url(); ?>">Chrislee
                            <span style="font-size:26px;">.is</span>
                        </a>
                    </h1>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .awsr-header -->

        <div class="awsr-sub-header">

            <div class="row">

                <div class="col-xs-12 col-sm-6 offset-sm-3">
                    <small>a</small>
                    <a href="<?php echo home_url('/a-writer'); ?>">freelance writer</a>
                    <small>&</small>
                    <a href="<?php echo home_url('/a-web-designer'); ?>">web designer</a>
                    <small>|
                        <a href="<?php echo home_url('/thinking-about'); ?>">blog</a>
                        <small>|</small>
                        <a href="<?php echo home_url('/contact-me'); ?>">contact me</a>
                    </small>
                </div>
                <!-- .col -->

                <div class="col-xs-12 col-sm-3">
                    <?php get_sidebar(); ?>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .awsr-sub-header -->
