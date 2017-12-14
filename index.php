<?php 
if ( current_theme_supports( 'get-the-image' ) ):
    $image_full=wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'full');
    $image_thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single-thumbnail');
?> 
<a href="<?php echo $image_full[0]; ?>" rel="lightbox">
<img class="alignnone wp-image-2770 size-single-thumbnail" src="<?php echo $image_thumbnail[0]; ?>" alt="2015-04-10_190211" width="636" height="460" style="opacity: 1;">
</a>
<?php
endif;
?>