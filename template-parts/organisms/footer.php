	</main>

	<footer>
			
		<?php get_template_part('template-parts/organisms/menu-footer'); ?>
		
		<div class="logo-footer">

			<a href="<?php home_url(); ?>" title="<?php bloginfo('name') ?>">

				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/logo-footer.png" alt="Logo Footer">

			</a>	

		</div>

		<div class="alliati-footer">
			
			<a href="http://www.alliati.com.br" title="Alliati Soluções em TI">

				<img src="<?php bloginfo('template_directory'); ?>/images/logo-alliati-footer.png" alt="Logo Alliati Footer">

			</a>	

		</div>

		<div class="search-footer">
			
			<?php get_search_form(); ?>

		</div>

		<p><?php echo date('Y'); ?> <?php bloginfo('name') ?>. Todos os Direitos Reservados</p>

	</footer>

</div>