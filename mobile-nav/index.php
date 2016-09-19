<?php

require_once('../_functions/function.php');

nav_mobile();

?>

<body>
<div id="mobile-navigation">

  <ul class="menu-icons nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#mob-menu" aria-controls="mob-menu" role="tab" data-toggle="tab" id="nav-trigger">
        <img class="menu-icon-navigation" src="/assets/img/mobile-menu-hamburger-icon.png">
      </a>
    </li>
    <li role="presentation">
      <a href="https://give.cru.org/give/VirtualCommonLinks/process/search2?Query=Florence" aria-controls="mob-search">
        <img src="/assets/img/mobile-menu-search-icon.png">
      </a>
    </li>
    <li role="presentation">
      <a href="https://www.cru.org/locator/colleges.html">
        <img src="/assets/img/mobile-menu-location-icon.png">
      </a>
    </li>
    <li role="presentation">
      <a href="#mob-global" aria-controls="mob-global" role="tab" data-toggle="tab">
        <img src="/assets/img/mobile-menu-globe-icon.png">
      </a>
    </li>
    <li role="presentation">
      <a href="#mob-cart" aria-controls="mob-cart" role="tab" data-toggle="tab">
        <img src="/assets/img/mobile-menu-cart-icon.png">
      </a>
    </li>
    <li role="presentation">
      <a href="#mob-more" aria-controls="mob-more" role="tab" data-toggle="tab">
        <img src="/assets/img/mobile-menu-ellipsis-icon.png">
      </a>
    </li>
  </ul>


  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="mob-menu">
      <?php include('mob-nav.php'); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="mob-search">
      <?php include('mob-search.php'); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="mob-nearme">
      <?php include('mob-nearme.php'); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="mob-global">
      <?php include('mob-global.php'); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="mob-cart">
      <?php include('mob-cart.php'); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="mob-more">
      <?php include('mob-more.php'); ?>
    </div>
  </div>

  
</div>
</body>
</html>