<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<article class="goods">
  <ul class="g__list">          
    <?php foreach ($rows as $id => $row): ?>
      <li class="g__item">
          <?php print $row; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</article>