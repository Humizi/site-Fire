<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<h2 class="c__header"><?=$fields['title']->content; ?></h2>
<p class="c__text">
  <?=$fields['body']->content; ?>
</p>

<ul class="c__social-list">
  <li class="c__item">
    <a class="c__link" href="#">
      <span class="visually-hidden">ВКонтакте</span>
      <img src="sites/all/themes/Fire/img/social-1.png" width="57" height="57" alt="ВКонтакте">
    </a>
  </li>
  <li class="c__item">
    <a class="c__link" href="#">
      <span class="visually-hidden">Одноклассники</span>
      <img src="sites/all/themes/Fire/img/social-2.png" width="57" height="57" alt="Одноклассники">
    </a>
  </li>
  <li class="c__item">
    <a class="c__link" href="#">
      <span class="visually-hidden">Facebook</span>
      <img src="sites/all/themes/Fire/img/social-3.png" width="57" height="57" alt="Facebook">
    </a>
  </li>
</ul>