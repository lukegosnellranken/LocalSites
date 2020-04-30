<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>St. Charles County</strong> Veterans Museum</a></h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
            <nav class="main-navigation">
                <ul>
                <li <?php if (is_page('news') OR get_post_type() == 'news') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/news') ?>">News</a></li>
                <li <?php if (is_page('events') OR get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/events') ?>">Events</a></li>
                <li <?php if (is_page('stories')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/stories') ?>">Stories</a></li>
                <li <?php if (is_page('videos')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/videos') ?>">Videos</a></li>
                <li <?php if (is_page('gallery')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/gallery') ?>">Gallery</a></li>
                <li <?php if (is_page('sponsors') or wp_get_post_parent_id(0)) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/sponsors') ?>">Sponsors</a></li>
                <li <?php if (is_page('volunteers')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/volunteers') ?>">Volunteers</a></li>
                </ul>
            </nav>
            <div class="site-header__util">
                <a href="<?php echo site_url('/donate') ?>" class="btn btn--small btn--orange float-left push-right">Donate</a>
                
                <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            </div>
        </div>
    </header>
    