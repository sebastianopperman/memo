<div class="filter">
  <?php $items = get_terms([
    'taxonomy' => 'course_status',
    'hide_empty' => false,
  ]);?>
  <article>
    <select>
      <option value="all" selected>All</option>
      <?php foreach($items as $item): ?>
        <option value="<?php echo $item->slug ?>"><?php echo $item->name ?></option>
      <?php endforeach; ?>
    </select>
  </article>
  <ul>
    <li class="active">
      <a href="all">
        All
      </a>
    </li>
    <?php foreach($items as $item): ?>
      <li>
        <a href="<?php echo $item->slug ?>">
          <?php echo $item->name ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>