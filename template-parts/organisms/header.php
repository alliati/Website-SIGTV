<header>

	<div class="video">
		<video autoplay>
        <source src="<?php bloginfo('template_directory'); ?>/video/video.mp4" type="video/mp4">
		</video>
	</div>

	<div class="container">

		<div class="logo" title="<?php bloginfo('name'); ?>">
			<?php the_custom_logo(); ?>	
		</div>

		<div class="links">
		
			<?php get_template_part('template-parts/organisms/menu'); ?>
			
			<div class="search-header">
				<?php get_search_form(); ?>
			</div>

		</div>

	</div>

</header>

<main>