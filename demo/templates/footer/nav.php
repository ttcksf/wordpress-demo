<?php
  $locations = get_nav_menu_locations();
  $menu_id = $locations["footer_menu"];
  $footer_menus = wp_get_nav_menu_items($menu_id);
?>
<div class="row">
  <?php if(!empty($footer_menus) && is_array($footer_menus)):?>
    <ul class="nav justify-content-center py-5">
      <?php foreach($footer_menus as $footer_menu):?>
        <li class="nav-item">
          <a href="<?php echo esc_url($footer_menu->url); ?>" class="nav-link text-white">
            <?php echo esc_html($footer_menu->title); ?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>
  <?php endif;?>
</div>
