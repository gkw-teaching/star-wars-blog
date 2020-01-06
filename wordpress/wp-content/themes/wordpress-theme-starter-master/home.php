<?php get_header(); ?>

	<main role="main" class="home">
		<!-- section -->
		<section>

			<h1 class="cats-menu">All News + Blog Categories<div id="trapezoid"></div></h1>
			
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
