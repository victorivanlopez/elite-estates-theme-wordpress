<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elite_Estates
 */

?>

<footer id="colophon" class="site-footer footer">
	<div class="footer-grid container">
		<div class="footer-widget">
			<h3 class="footer-heading">Navegación</h3>
			<nav class="footer-navegacion">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
		</div>

		<div class="footer-widget">
			<h3 class="footer-heading">Nosotros</h3>
			<p class="footer-text">Nos enorgullecemos de ser tu compañero de confianza. Nuestra pasión por bienes raíces y nuestro compromiso con la excelencia nos impulsan a brindarte un servicio excepcional en cada paso del camino.</p>
		</div>

		<div class="footer-widget">
			<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logotipo">
		</div>
	</div>
	<p class="footer-copyright">&copy;<?php echo date('Y') ?>. Desarrollado por <a href="#">Víctor Iván López</a></p>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>