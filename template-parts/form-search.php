<?php
$rent_or_buy = $_GET['rent_or_buy'] ?? '';
$city = $_GET['city'] ?? '';
$type = $_GET['type'] ?? '';
?>

<form action="<?php echo esc_url(home_url('/propiedades')); ?>" class="form">
  <div class="field">
    <!-- <label for="city">Tipo de Propiedad</label> -->
    <select name="rent_or_buy" id="rent_or_buy">
      <!-- <option value="" selected disabled>Tipo de Propiedad</option> -->
      <?php
      $options = get_field_object('field_64dffc5537bd8')['choices'];
      foreach ($options as $value => $label) : ?>
        <option value="<?php echo esc_attr($value)  ?>" <?php echo ($value === $rent_or_buy) ? 'selected' : ''; ?>><?php echo esc_html($label)  ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="field">
    <!-- <label for="city">Cuidad</label> -->
    <select name="city" id="city">
      <option value="" selected disabled>Ciudad</option>
      <?php
      $options = get_field_object('field_64e002ed6c14f')['choices'];
      foreach ($options as $value => $label) : ?>
        <option value="<?php echo esc_attr($value)  ?>" <?php echo ($value === $city) ? 'selected' : ''; ?>><?php echo esc_html($label)  ?></option>
      <?php endforeach; ?>
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
      foreach ($terms as $term) : ?>
        <option value="<?php echo esc_attr($term->slug)  ?>" <?php echo ($term->slug === $type) ? 'selected' : ''; ?>><?php echo esc_html($term->name)  ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <input type="submit" value="Buscar">
</form>