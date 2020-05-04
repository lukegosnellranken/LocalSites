<?php

/* Leave open-ended so other post types can be added to search */

add_action('rest_api_init', 'museumRegisterSearch');

function museumRegisterSearch() {
    register_rest_route('museum/v1', 'search', array(
      'methods' => WP_REST_SERVER::READABLE,
      'callback' => 'museumSearchResults'
    ));
  }

  function museumSearchResults($data) {
    $mainQuery = new WP_Query(array(
      'post_type' => array('story'),
      's' => sanitize_text_field($data['term'])
    ));

    $results = array(
        'stories' => array()
    );

    while($mainQuery->have_posts()) {
        $mainQuery->the_post();


        if (get_post_type() == 'story') {
            array_push($results['stories'], array(
              'title' => get_the_title(),
              'permalink' => get_the_permalink(),
              'image' => get_the_post_thumbnail_url(0, 'veteranCard')
            ));
        }
    }

    return $results;
}

?>