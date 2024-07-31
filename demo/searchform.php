<?php
  // echo "hello";
?>

<form role="search" method="get" action="<?php echo esc_url(home_url("/"));?>" class="d-flex" role="search">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="<?php the_search_query();?>" name="s">
  <button class="btn btn-outline-success" type="submit">Search</button>
</form>
