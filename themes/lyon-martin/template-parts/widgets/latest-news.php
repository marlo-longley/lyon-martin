<div class="wp-block-group alignwide">
<div class="wp-block-group__inner-container">
<div class="wp-block-columns alignwide">

<?php
// Define our WP Query Parameters
$the_query = new WP_Query( 'posts_per_page=3' ); ?>


<?php
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post();
$image_id = get_post_thumbnail_id();
$imagesize="thumbnail";
$image_url = wp_get_attachment_image_src($image_id, $imagesize, true);
?>

<div class="wp-block-column latest-news">
<p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
<?php if ( has_post_thumbnail() ) {
// without parameter -> Post Thumbnail (as set by theme using set_post_thumbnail_size())
    the_post_thumbnail();
} ?>

<p><?php
// Display the Post Excerpt
the_excerpt(__('(more…)')); ?></p>

</div>
<?php
// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
?>
</div>
</div>
</div>

