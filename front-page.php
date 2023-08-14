<?php
get_header();
?>

<main id="primary" class="properties site-main container section">
	<h2 class="heading underline">Nuestras <span>Propiedades</span></h2>

	<div class="properties-listing">
		<div class="property">
			<div class="property-image">
				<img src="<?php echo get_template_directory_uri(); ?>/img/property-1.jpg" alt="">
			</div>

			<div class="property-content">
				<div class="property-info">
				<a href="#/colima" class="property-city">Colima</a>
					<p class="property-type">Venta</p>
				</div>
				<h3 class="property-title">Hermosa casa en venta en Colima </h3>
				<p class="property-price">MXN 2,500,000</p>
				<ul class="property-meta">
					<li class="property-beds"><span>3</span> Rec.</li>
					<li class="property-baths"><span>1</span> Baño(s)</li>
					<li class="property-parking"><span>1</span> Estac.</li>
				</ul>
				<p class="property-location">Villa Verde, Colima</p>
			</div>
		</div>

		<div class="property">
			<div class="property-image">
				<img src="<?php echo get_template_directory_uri(); ?>/img/property-2.jpg" alt="">
			</div>

			<div class="property-content">
				<div class="property-info">
					<a href="#/colima" class="property-city">Colima</a>
					<p class="property-type">Renta</p>
				</div>
				<h3 class="property-title">Casa en renta en zona residencial</h3>
				<p class="property-price">MXN  5,700</p>
				<ul class="property-meta">
					<li class="property-beds"><span>2</span> Rec.</li>
					<li class="property-baths"><span>1</span> Baño(s)</li>
					<li class="property-parking"><span>1</span> Estac.</li>
				</ul>
				<p class="property-location">Residencia Victoria, Colima</p>
			</div>
		</div>

		<div class="property">
			<div class="property-image">
				<img src="<?php echo get_template_directory_uri(); ?>/img/property-3.jpg" alt="">
			</div>

			<div class="property-content">
				<div class="property-info">
				<a href="#/manzanillo" class="property-city">Manzanillo</a>
					<p class="property-type">Venta</p>
				</div>
				<h3 class="property-title">Casa de lujo en venta Club Santiago</h3>
				<p class="property-price">MXN 3,200,000</p>
				<ul class="property-meta">
					<li class="property-beds"><span>4</span> Rec.</li>
					<li class="property-baths"><span>2</span> Baño(s)</li>
					<li class="property-parking"><span>1</span> Estac.</li>
				</ul>
				<p class="property-location">Club Santiago, Manzanillo</p>
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
