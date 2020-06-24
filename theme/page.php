<?php get_header(); ?>
  <main>
    <?php if(have_posts()): while(have_posts()): the_post() ?>
      <header>
        <h1><?php the_title(); ?></h1>
        <?php get_template_part('components/search'); ?>
      </header>
      <article class="fade">
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif; ?>
  </main>
<?php get_footer(); ?>