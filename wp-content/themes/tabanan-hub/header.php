<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tabanan-hub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Fonts - Start -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap">
    <!-- Fonts - End -->

	<?php wp_head(); ?>
</head>
<body class="app">
<!-- Preloader - Start -->
<?= get_template_part('preloader'); ?>
<!-- Preloader - End -->

<header id="topnav" class="dark defaultscroll sticky">
    <div class="container">
        <!-- Logo container - Start -->
        <div class="logo-container">
            <a class="logo" href="<?= home_url(); ?>">
                <img src="<?= get_theme_file_uri('assets/logo/logo-64.png') ?>" height="64" alt="">
            </a>
        </div>
        <!-- Logo container - End -->

        <!-- Mobile menu toggle - Start -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- Mobile menu toggle - Start -->

        <div id="navigation">
            <!-- Navigation menu - Start -->
            <ul class="navigation-menu justify-content-end">
                <li><a href="<?= home_url(); ?>">Home</a></li>
                <li><a href="<?= home_url(); ?>/tentang-kami">Tentang Kami</a></li>
                
                <?php
                $query = new WP_Query(array(
                    'post_type'      => 'news',
                    'post_status'    => 'publish',
                    'order'          => 'DESC',
                    'posts_per_page' => 1)
                );
                    if($query->have_posts()){
                        while ($query->have_posts()){
                            $query->the_post()
                ?>

                <li><a href="<?= the_permalink() ?>">Berita</a></li>

                <?php
                    }
                }
                ?>

                <li><a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScZ8bLE90lknFTWS4dO8aJZln45LrsY-occ1tE7nozSFxTNcQ/viewform?usp=sf_link">Kurasi UMKM</a></li>

            </ul>
            <!-- Navigation menu - End -->
        </div>
    </div>
</header>
