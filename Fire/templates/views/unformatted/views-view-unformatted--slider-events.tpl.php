<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<article class="events">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php foreach ($rows as $id => $row): ?>
        <div class="swiper-slide">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</article>
