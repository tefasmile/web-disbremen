<?php get_header(); ?>
<body>
	<?php include(TEMPLATEPATH . '/nav.php') ?>
	<header>
		<h1> <?php bloginfo('name'); ?> </h1>
		<h2> <?php bloginfo('description'); ?> </h2>
	</header>
	<?php 
		dynamic_sidebar('sidebar-footer');
	?>
	<section class="contenedor">
		<h2>Ultimas entradas</h2>
		<?php rewind_posts();?>
		<!--Filtro orden de post y categoria-->
		<?php query_posts('order=Asc&cat=3') ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!--post-->
			<article class="contenedor_item">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<figure>
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
	<?php dynamic_sidebar('sidebar-header'); ?>
<?php get_footer ('landing') ?>	