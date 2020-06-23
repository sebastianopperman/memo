<?php 

// Register post types
function postTypes() {
  register_post_type( 'memo_course',
    array(
      'labels' => array(
        'name' => __( 'Courses' ),
        'singular_name' => __( 'Course' ),
        'menu_name' => 'Courses',
        'edit_item' => 'Edit Course',
        'view_item' => 'View Course',
        'add_new' => 'Add Course',
      ),
      'public' => true,
      'hierarchical' => true,
      'menu_icon' => 'dashicons-laptop',
      'has_archive' => true,
      'show_in_rest' => true,
      'capability_type' => 'page',
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
      'rewrite'=> array( 'slug' => 'courses' )
    )
  );

  register_taxonomy(
    'course_category',
    'memo_course',
    array(
      'labels' => array(
        'name' => __( 'Categories' ),
        'add_new_item' => __('Add new Category')
      ),
      'rewrite' => array( 'slug' => 'course-categories' ),
      'hierarchical' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'course_status',
    'memo_course',
    array(
      'labels' => array(
        'name' => __( 'Status' ),
        'add_new_item' => __('Add new Status')
      ),
      'rewrite' => array( 'slug' => 'course-status' ),
      'hierarchical' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'course_level',
    'memo_course',
    array(
      'labels' => array(
        'name' => __( 'Skill Level' ),
        'add_new_item' => __('Add new Level')
      ),
      'rewrite' => array( 'slug' => 'course-skill-levels' ),
      'hierarchical' => true,
      'show_in_rest' => true,
    )
  );

  register_post_type( 'memo_group',
    array(
      'labels' => array(
        'name' => __( 'Groups' ),
        'singular_name' => __( 'Group' ),
        'menu_name' => 'Groups',
        'edit_item' => 'Edit Group',
        'view_item' => 'View Group',
        'add_new' => 'Add Group',
      ),
      'public' => true,
      'hierarchical' => true,
      'menu_icon' => 'dashicons-groups',
      'has_archive' => true,
      'capability_type' => 'post',
      'supports' => array('title', 'editor'),
      'rewrite'=> array( 'slug' => 'groups' )
    )
  );

  register_post_type( 'memo_student',
    array(
      'labels' => array(
        'name' => __( 'Students' ),
        'singular_name' => __( 'Student' ),
        'menu_name' => 'Students',
        'edit_item' => 'Edit Student',
        'view_item' => 'View Student',
        'add_new' => 'Add Student',
      ),
      'public' => true,
      'hierarchical' => true,
      'menu_icon' => 'dashicons-welcome-learn-more',
      'has_archive' => true,
      'capability_type' => 'post',
      'supports' => array('title', 'editor'),
      'rewrite'=> array( 'slug' => 'students' )
    )
  );

  register_post_type( 'memo_news',
    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'Post' ),
        'menu_name' => 'News',
        'edit_item' => 'Edit Post',
        'view_item' => 'View Post',
        'add_new' => 'Add Post',
      ),
      'public' => true,
      'hierarchical' => true,
      'menu_icon' => 'dashicons-media-document',
      'has_archive' => true,
      'show_in_rest' => true,
      'capability_type' => 'post',
      'supports' => array('title', 'editor'),
      'rewrite'=> array( 'slug' => 'news' )
    )
  );

}

add_action('init', postTypes);