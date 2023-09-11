<?php

get_header();
?>

<main id="primary" class="site-main two-columns container section">
  <aside class="sidebar-filters">
    <form class="form-filters">
      <div class="field">
        <h3>Tipo de Propiedad</h3>
        <?php
        $type = $_GET['type'] ?? '';
        $terms = get_terms(array(
          'taxonomy' => 'type', // Reemplaza 'caracteristicas' con el nombre de tu taxonomía
          'hide_empty' => false,
        ));
        foreach ($terms as $term) : ?>
          <div class="field-checkbox">
            <input type="checkbox" id="house" name="house" value="<?php echo esc_attr($term->slug) ?>">
            <label for="house"><?php echo esc_html($term->name)  ?></label>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="field">
        <h3>Ciudad</h3>
        <select name="city" id="city">
          <?php
          $city = $_GET['city'] ?? '';
          $options = get_field_object('field_64e002ed6c14f')['choices'];
          foreach ($options as $value => $label) : ?>
            <option value="<?php echo esc_attr($value)  ?>" <?php echo ($value === $city) ? 'selected' : ''; ?>><?php echo esc_html($label)  ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- <div class="field">
        <h3>Precio</h3>
        <div class="field-price">
          <input type="number" name="min" id="min" value="0">
          <input type="number" name="min" id="min" value="5000000">
        </div>
        <input type="range" id="price" name="price" min="0" max="5000000" step="1000" />
      </div> -->

      <div class="field">
        <h3 for="bedroom">Habitaciones</h3>
        <select name="bedroom" id="bedroom">
          <?php
          $bedroom = $_GET['bedroom'] ?? '';

          for ($i = 1; $i <= 5; $i++) : ?>
            <option value="<?php echo esc_attr($i)  ?>" <?php echo ($i === intval($bedroom)) ? 'selected' : ''; ?>><?php echo esc_html($i)  ?></option>
          <?php endfor; ?>
        </select>
      </div>

      <div class="field">
        <h3>Baños</h3>
        <select name="bathroom" id="bathroom">
          <?php
          $bathroom = $_GET['bathroom'] ?? '';

          for ($i = 1; $i <= 5; $i++) : ?>
            <option value="<?php echo esc_attr($i)  ?>" <?php echo ($i === intval($bathroom)) ? 'selected' : ''; ?>><?php echo esc_html($i)  ?></option>
          <?php endfor; ?>
        </select>
      </div>

      <div class="field">
        <h3 for="parking">Estacionamientos</h3>
        <select name="parking" id="parking">
          <?php
          $parking = $_GET['parking'] ?? '';

          for ($i = 1; $i <= 5; $i++) : ?>
            <option value="<?php echo esc_attr($i)  ?>" <?php echo ($i === intval($parking)) ? 'selected' : ''; ?>><?php echo esc_html($i)  ?></option>
          <?php endfor; ?>
        </select>
      </div>
    </form>
  </aside>

  <?php elite_estates_list_properties(); ?>
</main><!-- #main -->

<?php
get_footer();
