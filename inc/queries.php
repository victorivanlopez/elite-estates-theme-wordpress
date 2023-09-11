<?php

// var_dump($_GET);

function elite_estates_list_properties($cantidad = -1)
{
?>
  <div class="properties-listing">
    <?php

    $args = array(
      'post_type' => 'properties',
      'posts_per_page' => $cantidad,
    );

    // Procesar filtros de ACF si están presentes
    if (isset($_GET['rent_or_buy']) && !empty($_GET['rent_or_buy'])) {
      $args['meta_query'][] = array(
        'key' => 'rent_or_buy',
        'value' => $_GET['rent_or_buy'],
      );
    }

    if (isset($_GET['city']) && !empty($_GET['city'])) {
      $args['meta_query'][] = array(
        'key' => 'city',
        'value' => $_GET['city'],
      );
    }

    if (isset($_GET['type']) && !empty($_GET['type'])) {
      $args['tax_query'][] = array(
        'taxonomy' => 'type',
        'field' => 'slug',
        'terms' => $_GET['type'],
      );
    }

    $properties = new WP_Query($args);

    if ($properties->have_posts()) {
      while ($properties->have_posts()) {
        $properties->the_post(); ?>
        <?php
        $price = intval(get_field('price'));
        ?>

        <div class="property">
          <div class="property-image">
            <a href="<?php the_permalink() ?>">
              <?php the_post_thumbnail() ?>
            </a>
          </div>

          <div class="property-content">
            <div class="property-info">
              <p class="property-city"><?php echo esc_html(get_field('city')); ?></p>
              <p class="property-type"><?php echo esc_html(get_field('rent_or_buy')); ?></p>
            </div>
            <a href="<?php the_permalink() ?>">
              <h3 class="property-title"><?php the_title() ?></h3>
            </a>
            <p class="property-price">MXN <?php echo esc_html(number_format($price)); ?></p>
            <ul class="property-meta">
              <li class="property-beds"><span><?php echo esc_html(get_field('bedroom')); ?></span> Rec.</li>
              <li class="property-baths"><span><?php echo esc_html(get_field('bathroom')); ?></span> Baño(s)</li>
              <li class="property-parking"><span><?php echo esc_html(get_field('parking')); ?></span> Estac.</li>
            </ul>
            <p class="property-location"><?php echo esc_html(get_field('address')); ?></p>
          </div>
        </div>
      <?php };
      wp_reset_postdata();
    } else { ?>
      <div>
        <h2 class="page-title"><?php esc_html_e('En este momento no hay propiedades.', 'elite_estates'); ?></h2>
        <p>Prueba realizando otra búsqueda eliminando algunos filtros.</p>
      </div>
    <?php } ?>
  </div>
<?php
};
