<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Chrislee.is</title>
    <?php wp_head(); ?>

    <base href="https://chrislee.is/">

    <link rel="shortcut icon" href="<?php echo home_url(); ?>/wp-content/uploads/2018/04/ico.ico" />


    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-102373825-1', 'auto');
        ga('send', 'pageview');
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
        <meta name="twitter:site" value="@ChrisLeeis" />


        <meta name="twitter:creator" value="@ChrisLeeis" />


        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- fontawesome -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
            crossorigin="anonymous">


</head>

<body>
    <div class="wrapper">
        <div class="awsr-header">

            <div class="row">

                <div class="col-12">
                    <h1>
                        <a href="<?php echo home_url(); ?>">Chrislee
                            <span id="awsr-is">.is</span>
                        </a>
                    </h1>

                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .awsr-header -->

        <nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align:center;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <small id="awsr-nav-inline">
                            <span id="awsr-nav-hide">a&nbsp;</small>
                        </span>
                        <a id="awsr-nav-inline" class="nav-link" href="<?php echo home_url('/a-writer'); ?>">freelance writer</a>
                    </li>
                    <li class="nav-item">
                        <small id="awsr-nav-inline">
                            <span id="awsr-nav-hide">&amp;&nbsp;</small>
                        </span>
                        <a id="awsr-nav-inline" class="nav-link" href="<?php echo home_url('/a-web-designer'); ?>">Web Designer</a>
                    </li>
                    <li class="nav-item">
                        <small id="awsr-nav-inline">
                            <span id="awsr-nav-hide">| </span>
                            <a id="awsr-nav-inline" class="nav-link" href="<?php echo home_url('/thinking-about'); ?>">Blog</a>
                        </small>
                    </li>
                    <li class="nav-item">
                        <small id="awsr-nav-inline">
                            <span id="awsr-nav-hide">| </span>
                            <a id="awsr-nav-inline" class="nav-link" href="<?php echo home_url('/contact-me'); ?>">Contact me</a>
                        </small>
                    </li>
                    <li class="nav item">
                        <?php get_sidebar(); ?>
                    </li>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">