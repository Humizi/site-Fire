<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<section class="basket">
  <ul class="b-list">
    <?php foreach ($rows as $id => $row): ?>
        <?php print $row; ?>
    <?php endforeach; ?>
  </ul>

  <a class="b-btn-link" href="http://Fire.loc/basket/confirm">Перейти к оформлению</a>
</section>