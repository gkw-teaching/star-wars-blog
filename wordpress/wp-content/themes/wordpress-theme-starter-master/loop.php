<?php 
	/* Template Name: Latest Posts 
		 Template Post Type: Post */
	if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- Code to use the Advanced Custom Field image -->
	<?php 
$image = get_field('image');
$size = 'small'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
    ?> <h1>suppppp</h1> <?php
} ?>



<!-- Dynamically adding alt text to variable -->
	<?php $thumbnail_id  = get_post_thumbnail_id( $post->ID ); ?>
	<?php $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

				<div class="placeholder bottom-line" style="background-image: url(<?php echo the_post_thumbnail_url();?>);" >
          <img src="<?php echo get_template_directory_uri();?>/img/clear-placeholders/small.png" alt="<?php echo $thumbnail_alt ?>">  
        </div>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<div class="padding">
			<!-- post title -->
			<h2 class="title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->
			<div class="text">
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			</div>
		</div>
	</article>
	<!-- /article -->
		<div class='padding py-0'>
			<!-- post details -->
			<span class="post-info byline-author"><?php _e( 'By:', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

			<div class="post-info byline-date d-flex">
				<?php the_category();?>&nbsp// <?php the_time('F j, Y'); ?>
			</div>
			<!-- /post details -->
		</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
