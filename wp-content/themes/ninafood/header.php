
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="NINA is a London based food company."/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <!--    For Facebook-->
    <meta property="og:title" content="NINA - A Food Company"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/facebook/display-image.png"/>
    <meta property="og:description" content="NINA is a London based food company."/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="NINA - A Food Company"/>
    <!--    For Twitter-->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:creator" content="@antoninaparker"/>
    <meta name="twitter:site" content="@antoninaparker"/>

    <meta property="og:url" content="<?php the_permalink() ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>

    <?php wp_head(); ?>
</head>
<body>
<div class=" visible-xs">
    <nav class="navbar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse mobile-nav" id="navbar-collapse-target">
            <ul class="nav navbar-nav ">
                <li><a href="/book">book</a></li>
                <li><a href="/parties">parties</a></li>
                <li><a href="/van">Van</a></li>
                <li><a href="/food">Food</a></li>
                <li><a href="/press">press</a></li>
                <li><a href="/blog">blog</a></li>
                <li><a target="_blank" href="https://twitter.com/antoninaparker">twitter</a></li>
                <li><a target="_blank" href=" https://www.facebook.com/afoodcompany">facebook</a></li>
                <li><a target="_blank" href="https://www.youtube.com/user/ninaicecream24">youtube</a> </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    <h1 class="nina-title text-center"><a href="/">Nina</a></h1>

    <div class="container hidden-xs">
        <nav class="navbar">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/book">book</a></li>
                    <li><a href="/parties">parties</a></li>
                    <li class="dropdown">
                        <a id="ice-cream"  class="dropdown-toggle" data-toggle="dropdown">ice cream and cake</a>
                        <ul id="ice-cream-sub" class="dropdown-menu">
                            <li><a href="/van">Van</a></li>
                            <li><a href="/food">Food</a></li>
                        </ul>
                    </li>
                    <li><a href="/press">press</a></li>
                    <li><a href="/blog">blog</a> </li>
                    <li>
                        <a id="news" class="dropdown-toggle" data-toggle="dropdown">news</a>
                        <ul id="news-sub" class="dropdown-menu">
                            <li><a target="_blank" href="https://twitter.com/antoninaparker">twitter</a></li>
                            <li><a target="_blank" href=" https://www.facebook.com/afoodcompany">facebook</a></li>
                            <li><a target="_blank" href="https://www.youtube.com/user/ninaicecream24">youtube</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>