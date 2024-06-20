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
            <li class="nav-item">
              <a class="nav-link" href="<?php echo esc_url($header_menu->url)?>"><?php echo esc_html($header_menu->title);?></a>
            </li>
          <?php endforeach;?>
        </ul>
      <?php endif;?>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
