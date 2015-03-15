<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Bed and Breakfast, B-N-B, rooms, visitor, plattsmouth, eastern nebraska, nebraska, midwest, oregon trail, lewis and clark, omaha, hotel, lodging, accomodations, hunting, nebraska inns"/>
    <meta name="description"
          content="Plattsmouth, Nebraska Bed and Breakfast Lodging. Just minutes from Omaha, Nebraska"/>
    <title>Omaha and Plattsmouth Area - Beautiful Vacation Lodging.</title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php bloginfo('template_url'); ?>/css/style_forestfire.css" rel="stylesheet" type="text/css"/>
    <link href="<?php bloginfo('template_url'); ?>/slideshow/slideshow.css" rel="stylesheet" type="text/css"/>
    <script src="<?php bloginfo('template_url'); ?>/slideshow/swfobject.js" type="text/javascript"></script>
    <?php wp_head(); ?>
</head>
<body class="w_wide f_default forestfire">
<div id="wrapper">
<div id="shadow">
<div id="header">
    <a href="/index.php"><span id="logo"></span></a>

    <div id="tabarea">
    </div>
</div>
<div id="graphic">
    <div id="spotlight">
        <div id="quote">
            <div class="random-image">
                <a href="#">
                    <img src="<?php bloginfo('template_url'); ?>/images/historic_plattsmouth_hd.png"
                         alt="historic_plattsmouth_hd.png"
                         width="465" height="120"/></a>
            </div>
        </div>
    </div>
</div>
<div class="clr"></div>
<table class="nopad">
<tr valign="top">
<td id="left-col">
    <div id="left">
        <div id="left-menu">
            <div class="shadow"></div>
            <div class="padding">
                <div class="moduletable">
                    <h3>Visitor Menu</h3>
                    <?php wp_nav_menu(array('theme_location' => 'sidebar_menu')); ?>
                </div>
                <!--<div class="moduletable">-->
                <!--<div class="custom">-->
                <!--<p>-->
                <!--<a href="http://www.parmelehouse.com/reservations/index.php?option=com_content&amp;view=article&amp;id=2"-->
                <!--mce_href="http://www.parmelehouse.com/reservations/index.php?option=com_content&amp;view=article&amp;id=2"-->
                <!--style="color: rgb(27, 87, 177); text-decoration: none; font-family: Tahoma, Helvetica, Arial, sans-serif; line-height: 15px; "><img-->
                <!--alt="click here to book your room online" border="0"-->
                <!--mce_src="images/stories/online_booking.png"-->
                <!--src="images/online_booking.png" style="border: 0px; "/></a></p>-->
                <!--</div>-->
                <!--</div>-->
<!--                <div class="moduletable">-->
<!--                    <ul class="menu" id="more_info">-->
<!--                        <li class="item-105"><a href="/check-in-times-policies">Check-in Times / Policies</a></li>-->
<!--                        <li class="item-114"><a href="/the-photo-tour">The Photo Tour</a></li>-->
<!--                        <li class="item-124"><a-->
<!--                                class="background: url(../../rt_fire/images_forestfire/fr_title.png) 0 0 no-repeat; font-size: 150%; color: #D60000;"-->
<!--                                href="/contact-us">Contact Us</a></li>-->
<!--                        <li class="item-125"><a href="/map-and-directions">Map and Directions</a></li>-->
<!--                        <li class="item-126"><a href="/area-info-links">Area Info Links</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
                <div class="moduletable">
                    <h3>More Information</h3>
                    <?php wp_nav_menu(array('theme_location' => 'sidebar_sub_menu')); ?>
                </div>
                <div class="moduletable">
                    <div id="TA_rated594" class="TA_rated">
                        <ul id="nOWFU6" class="TA_links fka82KztHKK9">
                            <li id="KIV9FJ9A" class="RiNMOm8Ndq3">
                                <a target="_blank" href="http://www.tripadvisor.com/"><img src="http://www.tripadvisor.com/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a>
                            </li>
                        </ul>
                    </div>
                    <script src="http://www.jscache.com/wejs?wtype=rated&amp;uniq=594&amp;locationId=1674721&amp;lang=en_US&amp;display_version=2"></script>

                </div>
            </div>
        </div>
    </div>
</td>
<td id="middle-col">
    <div id="middle">
        <div class="shadow_1">
            <div class="page-content shadow_2">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; else: ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</td>
<td id="right-col">
    <div id="right">
        <div class="shadow">
            <div class="padding">
                <!--                <div class="moduletable">-->
                <!--                    <div class="custom">-->
                <!--                        <script src="-->
                <!--/slideshow/swfobject.js" type="text/javascript"></script>-->
                <!--                        <div id="monoSlideshow">-->
                <!--                            <p>-->
                <!--                                <strong>Please install Flash and turn on Javascript.</strong></p>-->
                <!--                        </div>-->
                <!--                        <script type="text/javascript">// <![CDATA[-->
                <!--                        var so = new SWFObject("slideshow/monoslideshow.swf", "SOmonoSlideshow", "190", "350", "7", "#DBAD54");-->
                <!--                        so.addParam("base", "slideshow/");-->
                <!--                        so.addVariable("showLogo", "false");-->
                <!--                        so.write("monoSlideshow");-->
                <!--                        // ]]></script>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="moduletable">
                    <h3>Latest News</h3>
                    <ul class="latestnews">
                        <li><a href="#">Some News!</a></li>
                        <li><a href="#">Some News!</a></li>
                        <li><a href="#">Some News!</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</td>
</tr>
</table>
<footer>
    Copyright &copy; 2010-15 Parmele House | <span id="login"><?php wp_loginout(); ?></span>
</footer>
</div>
<? wp_footer(); ?>
</body>
</html>