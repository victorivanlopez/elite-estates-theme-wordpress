<?php

function elite_estates_list_properties($cantidad = -1)
{
?>
  <div class="properties-listing">
    <?php
    $args = array(
      'post_type' => 'properties',
      'posts_per_page' => $cantidad
      // 'meta_query' => array(
      //   array(
      //     'key'   => 'parking',
      //     'value' => '1',
      //   )
      // )
    );

    $properties = new WP_Query($args);

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
    wp_reset_postdata(); // Volver a su estado original la clase de WordPress ya que se modificó previamente
    ?>
  </div>
<?php
};
