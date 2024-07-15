<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$parts = explode('/', $currentUrl);
$pageName = end($parts);
?>


<header class="site-navbar">
  <div class="site-navbar-top">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-md-4 order-2 order-md-1">
          <form action="shop.php" class="site-block-top-search">
            <input type="text" name="query" class="form-control border-0" placeholder="Search"
              value="<?php echo $search_query; ?>">
          </form>
        </div>

        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
          <div class="site-logo">
            <a href="home" class="js-logo-clone">DrugsDirect</a>
          </div>
        </div>

        <div class="text-right col-6 col-md-4 order-3 order-md-3">
          <div class="site-top-icons">
            <ul>
              <li><a href="signup"><span class="icon glyphicon glyphicon-user"></span></a></li>
              <li><a href="cart" class="site-cart"><span class="icon glyphicon glyphicon-shopping-cart"></span>
              <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span></a></li>
              </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
  <nav class="site-navigation text-md-center" role="navigation">
    <div class="container">
      <ul class="site-menu">
        <!-- Really awful code what am i doing here -->
        <li <?php if ($pageName == 'home') {
          echo ' class="active"';
        } ?>><a href="home">Home</a></li>
        <li <?php if ($pageName == 'about') {
          echo ' class="active"';
        } ?>><a href="about">About us</a></li>
        <li <?php if ($pageName == 'shop') {
          echo ' class="active"';
        } ?>><a href="shop">Shop</a></li>
      </ul>
    </div>
  </nav>
</header>