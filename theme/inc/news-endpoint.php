<?php

function get_news() {
  $payload = [];
  $news = new WP_Query(array(
    'post_type' => 'memo_news',
    'posts_per_page' => 3
  ));
  $posts = $news->posts;

  foreach($posts as $post){
    $topics = [];
    foreach(get_the_terms( $post->ID,'news_topic') as $topic) {
      array_push($topics, $topic->name);
    }
    array_push($payload, [
      'title' => $post->post_title,
      'image' => get_the_post_thumbnail_url($post->ID),
      'date' => get_the_date('F d, Y', $post->ID),
      'topics' => $topics,
      'fields' => get_post_meta($post->ID, null, true)
    ]);
  }

  return new WP_REST_Response($payload, 200);
}

add_action('rest_api_init', function () {
  register_rest_route( 'v2', 'news',array(
    'methods'  => 'GET',
    'callback' => 'get_news'
  ));
});