<header>
    <h1 class="col-sm-6">

        <img class="row" src="<?php bloginfo('template_directory'); ?>/img/logo.png"/>
    </h1>

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
