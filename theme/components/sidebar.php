<aside class="sidebar" role="complementary">
  <a href="<?php echo home_url(); ?>" class="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="Memo">
  </a>
  <nav class="primary-nav" role="navigation">
    <button class="toggle-menu"></button>
    <?php if (has_nav_menu('main-menu')){wp_nav_menu(array('theme_location' => 'main-menu','container' => false));}?>
  </nav>
  <nav class="meta-nav">
    <ul>
      <li>
        <a>
          Account
        </a>
      </li>
      <li>
        <a>
          Settings
        </a>
      </li>
    </ul>
  </nav>
</aside>