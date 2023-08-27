<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elite_Estates
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'elite_estates'); ?></a>

		<header id="masthead" class="site-header">
			<div class="header-bar container">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$elite_estates_description = get_bloginfo('description', 'display');
					if ($elite_estates_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $elite_estates_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																				?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="52" height="52" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path d="M4 6l16 0" />
							<path d="M4 12l16 0" />
							<path d="M4 18l16 0" />
						</svg>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>

			<?php if (is_front_page()) : ?>
				<div class="container">
					<div class="header-content">
						<h1 class="header-heading">Bienvenido a la excelencia inmobiliaria con Elite Estates</h1>

						<form class="form">
							<div class="field">
								<!-- <label for="city">Tipo de Propiedad</label> -->
								<select name="rent_or_buy" id="rent_or_buy">
									<!-- <option value="" selected disabled>Tipo de Propiedad</option> -->
									<?php
									$cities = get_field_object('field_64dffc5537bd8')['choices'];
									foreach ($cities as $value => $label) {
										echo '<option value="' . esc_attr($value) . '">' . esc_html($label) . '</option>';
									}
									?>
								</select>
							</div>

							<div class="field">
								<!-- <label for="city">Cuidad</label> -->
								<select name="city" id="city">
									<option value="" selected disabled>Ciudad</option>
									<?php
									$cities = get_field_object('field_64e002ed6c14f')['choices'];
									foreach ($cities as $value => $label) {
										echo '<option value="' . esc_attr($value) . '">' . esc_html($label) . '</option>';
									}
									?>
								</select>
							</div>

							<div class="field">
								<!-- <label for="city">Cuidad</label> -->
								<select name="type" id="type">
									<option value="" selected disabled>Tipo de Propiedad</option>
									<?php
									$terms = get_terms(array(
										'taxonomy' => 'type', // Reemplaza 'caracteristicas' con el nombre de tu taxonomía
										'hide_empty' => false,
									));
									foreach ($terms as $term) {
										echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
									}
									?>
								</select>
							</div>

							<input type="submit" value="Buscar">
						</form>
					</div>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->