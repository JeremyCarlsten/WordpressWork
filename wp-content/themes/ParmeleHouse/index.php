<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"/>

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>
<div id="page-wrap" class="container-fluid center-block">
    <div class="col-md-12">
        <header id="header" class="row">
            <div class="col-sm-6">
                <img class="row" src="<?php bloginfo('template_directory'); ?>/img/logo.png"/>
            </div>

            <div class="col-sm-5">
                <img class="row" src="<?php bloginfo('template_directory'); ?>/img/historic_plattsmouth_hd.png">

            </div>
            <div class="col-sm-1 login">
        <span class="row">
            <?php wp_loginout(); ?>
            <?php if (is_user_logged_in()) : ?>
                | <a href="<?php blogInfo('url'); ?>/wp-admin">Dashboard</a>
            <?php endif; ?>
        </span>
            </div>
        </header>
        <div class="row">

            <aside class="col-md-2 align-right no-gutters">
        <!--         <ul id="main-navigation">
                    <li id="sidebar-header"><h3>Visitor Menu</h3></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Contact</a></li>
                </ul> -->
               
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'sidebar_navigation', // menu slug from step 1
                        'container' => false, // 'div' container will not be added
                        'menu_class' => 'main-navigation', // <ul class="nav"> 
                    ));
                ?>
            </aside>
            <article id="main-content" class="col-md-10">
                <div class="row">
                    <?php if (have_posts()): while (have_posts()): the_post();
                        the_content();
                    endwhile;
                    else:?>
                        <p>Oh dear, ... It looks like we've forgotten to add any content to this page.</p>
                    <?php endif; ?>
                </div>
            </article>
        </div>
    </div>
</div>


<? get_footer(); ?>

</body>
</html>