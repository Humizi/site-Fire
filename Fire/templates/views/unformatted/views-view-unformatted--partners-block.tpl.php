<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<article class="trust">
    <div class="big-wrapper">
        <div class="wrapper">
            <h2 class="block-header">Нам доверяют</h2>
            
            <div class="swiper-container-2">
                <div class="swiper-wrapper">  
                    <?php foreach ($rows as $id => $row): ?>
                        <div class="swiper-slide">
                            <?php print $row; ?>
                        </div>             
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</article>
