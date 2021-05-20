<?php

/**
 * FAQ Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$question = get_field('question') ?: 'Enter your question here...';
$answer = get_field('answer') ?: 'Enter your answer here...';

?>
<div class="faq fullwidth">
<?php echo do_shortcode( '[expand title="'. $question .'"]' . $answer . '[/expand]' ); ?>
</span>
