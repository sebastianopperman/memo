<?php get_header(); ?>
<main>
  <header>
    <h1><?php post_type_archive_title(); ?></h1>
    <?php get_template_part('components/search'); ?>
  </header>
  <article class="posts">
    <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <div class='post'>
          <div class="post-image">
            <?php if(get_the_post_thumbnail_url()): ?>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
          </div>
          <h2>
            <?php the_title(); ?>
          </h2>
          <div class="post-date">
            <?php echo get_the_date('F d, Y', get_the_ID()); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p>There are no <?php post_type_archive_title(); ?> available.</p>
    <?php endif; ?>
  </article>
</main>
<?php get_footer(); ?>