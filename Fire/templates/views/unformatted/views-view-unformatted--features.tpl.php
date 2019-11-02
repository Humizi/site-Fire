<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<article class="features">
  <ul class="f__list">
    <?php foreach ($rows as $id => $row): ?>
      <li class="f__item">
        <?php print $row; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</article>
