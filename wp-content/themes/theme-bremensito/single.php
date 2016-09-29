<?php get_header(); ?>
<body>
		<?php rewind_posts();?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<header>
				<h1> <?php the_title(); ?> </h1>
			</header>
			<!--post-->
			<article class="contenedor_item">
				<figure>
					<?php the_post_thumbnail('medium')?>
				</figure>
				<?php the_excerpt(); ?>
				<strong><?php the_author(); ?></strong> -
				<?php the_date(); ?>
			</article>
		<?php endwhile; ?>
			<!--post navigation-->
		<?php else: ?>
		<!--no post found-->
			<h3>No se encontraron entradas</h3>
		<?php endif; ?>
<?php get_footer(); ?>