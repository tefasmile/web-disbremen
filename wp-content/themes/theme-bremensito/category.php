<?php get_header(); ?>
<body>
	<header>
		<h1> <?php bloginfo('name'); ?> </h1>
		<h2> <?php bloginfo('description'); ?> </h2>
	</header>
	<section class="contenedor">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!--post-->
			<article class="page">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<figure class="image">
					<?php the_post_thumbnail('thumbnail')?>
				</figure>
				<?php the_excerpt(); ?>
				<?php the_category(); ?>
				<strong><?php the_author(); ?></strong> -
				<?php the_date(); ?>
			</article>
		<?php endwhile; ?>
			<!--post navigation-->
		<?php else: ?>
		<!--no post found-->
			<h3>No se encontraron entradas</h3>
		<?php endif; ?>
	</section>
<?php get_footer ('landing') ?>	