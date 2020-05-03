<?php

function museum_post_types() {

    /* Events post type */
    register_post_type('event', array(
        'has_archive' => true,
        'public' => true,
        'rewrite' => array(
            'slug' => 'events'
        ),
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));

    /* Wars post type */
    register_post_type('war', array(
        'supports' => array('title', 'editor'),
        'has_archive' => true,
        'public' => true,
        'rewrite' => array(
            'slug' => 'stories'
        ),
        'labels' => array(
            'name' => 'Wars',
            'add_new_item' => 'Add New War',
            'edit_item' => 'Edit War',
            'all_items' => 'All Wars',
            'singular_name' => 'War'
        ),
        'menu_icon' => 'dashicons-admin-site-alt3'
    ));

    /* Stories post type */
    register_post_type('story', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'public' => true,
        'rewrite' => array(
            'slug' => 'storiesarchive'
        ),
        'labels' => array(
            'name' => 'Stories',
            'add_new_item' => 'Add New Story',
            'edit_item' => 'Edit Story',
            'all_items' => 'All Stories',
            'singular_name' => 'Story'
        ),
        'menu_icon' => 'dashicons-book'
    ));
  }

  add_action('init', 'museum_post_types');



  ?>