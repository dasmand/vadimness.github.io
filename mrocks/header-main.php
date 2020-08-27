<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php bloginfo('template_url')?>/img/favicon4.png">

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?> >
<!--::header part start::-->
<header class="main_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?php echo home_url()?>"> <img src="<?php bloginfo('template_url')?>/img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                         id="navbarSupportedContent">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'header_menu',
                            'menu_class'      => 'navbar-nav',
                            'menu_id'         => '',
                            'container' => false,
                            'walker' => new Menu, // создаем экземпляр класса
                        ))?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->