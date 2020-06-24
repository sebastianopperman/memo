<div class="filter">
  <?php $items = get_terms([
    'taxonomy' => 'course_status',
    'hide_empty' => false,
  ]);?>
  <article>
    <select>
      <option value="all">All</option>
      <?php foreach($items as $item): ?>
        <option value="<?php echo $item->slug ?>"><?php echo $item->name ?></option>
      <?php endforeach; ?>
    </select>
  </article>
  <ul>
    <li data-filter="all" class="active">
      All
    </li>
    <?php foreach($items as $item): ?>
      <li data-filter="<?php echo $item->slug ?>">
        <?php echo $item->name ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>