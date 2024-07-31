<?php
  $locations = get_nav_menu_locations();
  $menu_id = $locations["header_menu"];
  $header_menus = wp_get_nav_menu_items($menu_id);
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <?php
      if(function_exists("the_custom_logo")){
        the_custom_logo();
      }
    ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if(!empty($header_menus) && is_array($header_menus)):?>
        <ul class="navbar-nav mr-auto">
          <?php foreach($header_menus as $header_menu):?>
            <li class="nav-item <?php if($header_menu->menu_item_parent != 0): ?>dropdown<?php endif; ?>">
              <?php if ($header_menu->menu_item_parent) : ?>
                <a class="nav-link dropdown-toggle" href="<?php echo esc_url($header_menu->url); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo esc_html($header_menu->title); ?>
                </a>
                <ul class="dropdown-menu">
                  <?php foreach ($header_menus as $sub_menu) : ?>
                    <?php if ($sub_menu->menu_item_parent == $header_menu->ID) : ?>
                      <li class="dropdown-item">
                        <a class="nav-link" href="<?php echo esc_url($sub_menu->url); ?>">
                          <?php echo esc_html($sub_menu->title); ?>
                        </a>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
              <?php else:?>
                <a class="nav-link" href="<?php echo esc_url($header_menu->url)?>">
                  <?php echo esc_html($header_menu->title);?>
                </a>
              <?php endif;?>
            </li>
          <?php endforeach;?>
        </ul>
      <?php endif;?>
      <!-- デフォルトでinputタグが挿入される -->
       <!-- カスタマイズするにはsearchform.phpを作る -->
      <?php get_search_form(); ?>
    </div>
  </div>
</nav>
