<section class="courses">
  <?php
  $courses = new WP_Query(array(
    'post_type' => 'memo_course',
    'posts_per_page' => 3
  )); ?>
  <?php get_template_part('components/course-filter'); ?>
  <?php if($courses->have_posts()): ?>
  <div class="list">
    <?php while($courses->have_posts()): $courses->the_post(); ?>
    <div class="course" data-filter="<?php echo $category = get_the_terms( get_the_ID(), 'course_status' )[0]->slug ?>">
      <div class="course-month">
        <?php echo get_the_date( 'M' ); ?>
      </div>
      <div class="course-heading">
        <h2 class="course-title">
          <?php the_title(); ?>
        </h2>
        <div class="course-category">
          <?php echo $category = get_the_terms( get_the_ID(), 'course_category' )[0]->name ?>
        </div>
      </div>
      <article class="course-info">
        <div class="course-date">
          <?php echo get_the_date( 'F d, Y' ); ?>
        </div>
        <div class="course-image">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
            alt="<?php the_title(); ?>'s Image'">
        </div>
        <div class="course-excerpt">
          <?php echo get_the_excerpt(); ?>...<a>more</a>
        </div>
      </article>
    </div>
    <?php endwhile; ?>
  </div>
  <?php else: ?>
  <p><?php _e( 'There are no Courses available.' ); ?></p>
  <?php endif; ?>
</section>