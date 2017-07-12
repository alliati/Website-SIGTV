<section class="sigtv">

	<div class="container">

		<img src="<?php bloginfo('template_directory') ?>/images/logo-sigtv.png" alt="SIG TV">

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum nihil, voluptatum consequatur corporis velit omnis consectetur iusto autem delectus fuga nobis, pariatur officia commodi totam perspiciatis ducimus earum esse soluta sunt incidunt ratione? Voluptas sequi dicta tenetur, blanditiis ea, deleniti dolorem maiores quo amet at sit? Error illum cumque illo!</p>

		<a href="<?php echo get_page_link(9); ?>" class="button medium"><i class="fa fa-eye"></i> Continue Lendo</a>

	</div>

</section>

<section class="products-services">

	<div class="container">

		<h1>Produtos & Serviços</h1>
		
		<?php query_posts('post_type=produtos&post_per_page=1'); ?>

			<ul class="box-midia">

			<?php if(have_posts()): while(have_posts()): the_post(); ?>

				<li>
					<figure>

						<figcaption>

							<h1><?php the_title(); ?></h1>

							<p><?php the_excerpt(); ?></p>

							<a href="<?php the_permalink(); ?>" class="button medium"><i class="fa fa-eye"></i> Continue Lendo</a>
							
						</figcaption>

						<img src="<?php the_post_thumbnail_url(); ?>" alt="Thumb">

					</figure>

				</li>

			<?php endwhile; ?>

			<?php else : ?>

				Não há nenhum Produto inserido

			<?php endif; ?>
			
			</ul>

		<?php wp_reset_query(); ?>
			
	</div>

</section>

<section class="cases">

	<div class="container">

		<h1>Cases de Sucesso</h1>

		<?php query_posts('post_type=cases&post_per_page=-1'); ?>

			<ul class="box-midia">

			<?php if(have_posts()): while(have_posts()): the_post(); ?>

				<li>
					<figure>

						<img src="<?php the_post_thumbnail_url(); ?>" alt="Thumb">

					</figure>

				</li>

			<?php endwhile; ?>

			<?php else : ?>

				Não há nenhum Case inserido

			<?php endif; ?>
			
			</ul>

		<?php wp_reset_query(); ?>
		
	</div>

</section>