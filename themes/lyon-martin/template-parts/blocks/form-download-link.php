<?php

/**
 * Form Download Link Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$url = get_field('form_url') ?: 'Paste your url here...';
$title = get_field('form_title') ?: 'Add form title here...';
$relative_url = strstr($url, '/wp-content');

?>
<p class="has-large-font-size"><a download="<?php echo esc_attr($title); ?>" href="<?php echo esc_attr($relative_url); ?>" data-type="URL" data-id="/wp-content/uploads/2021/05/fw9.pdf"><?php echo $title ?></a></p>
