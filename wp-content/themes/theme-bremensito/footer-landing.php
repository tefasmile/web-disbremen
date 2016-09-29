<footer class="footer-landing">
	<strong>&copy; By Tefasmile</strong><small>2016</small>
	<?php 
		wp_nav_menu( array(
	    	'theme_location' => 'menu-footer',
	    	'container'      => 'nav',
	    	'container_class'=> 'nav--footer',
	    	'menu_class'     => 'nav--footer__list'
		) );
	?>
</footer>