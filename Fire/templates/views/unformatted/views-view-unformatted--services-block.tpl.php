<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<article class="services">
  <ul class="s__list">        
    <?php foreach ($rows as $id => $row): ?>
      <li class="s__item">
          <?php print $row; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</article>