<?php 
/*
Template Name: Página con sidebar
*/ 
?>
<?php get_header(); ?>
<body class="table">
	<section class="page sidebar">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="contenedor_item">	
			<!--Contenido-->
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<!--post navigation-->
			<?php else: ?>
			<!--no post found-->
				<h3>No se encontraron entradas</h3>
		<?php endif; ?>
		</article>
	</section>
	<?php get_sidebar(); ?>
</body>
<?php get_footer(); ?>