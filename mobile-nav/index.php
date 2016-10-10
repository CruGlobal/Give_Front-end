<?php

require_once('../_functions/function.php');

nav_mobile();

?>

<body>

<div class="mobile-nav-wrap">
  <div id="mobile-header">
    <div id="mobile-logo"></div>

    <div id="sign-in-section">
      <div id="sign-in">Sign In</div>

      <div id="mobile-nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

  <div id="mobile-navigation" class="hidden">
    <ul class="menu-icons nav nav-tabs" role="tablist">
      <li role="presentation" class="active">
        <a href="#mob-menu" aria-controls="mob-menu" role="tab" data-toggle="tab" id="nav-trigger">
          <img class="menu-icon-navigation" src="/assets/img/mobile-menu-hamburger-icon.png">
        </a>
      </li>
      <li role="presentation">
        <a href="#mob-search" aria-controls="mob-search" role="tab" data-toggle="tab">
          <img src="/assets/img/mobile-menu-search-icon.png">
        </a>
      </li>
      <li role="presentation">
        <a href="#mob-nearme" aria-controls="mob-nearme" role="tab" data-toggle="tab">
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
</div>

<?php include("../_includes/mobile-sub-navigation.php") ?>

<div class="mobile-nav-overlay"></div>

<div class="content-holder-demo">
  <p>The top of the content</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum ut magna id fermentum. Pellentesque interdum eros a elit cursus molestie. Nulla facilisi. Duis tempor quam vel enim rhoncus tempus. Suspendisse quis tempor sem, non lacinia ligula. Nulla pharetra nisi justo, at suscipit nisi vulputate ut. Fusce consectetur augue non elit finibus rutrum. In hac habitasse platea dictumst. Donec erat lorem, euismod ut odio vel, condimentum mollis metus. Nam dapibus volutpat neque eget placerat.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum ut magna id fermentum. Pellentesque interdum eros a elit cursus molestie. Nulla facilisi. Duis tempor quam vel enim rhoncus tempus. Suspendisse quis tempor sem, non lacinia ligula. Nulla pharetra nisi justo, at suscipit nisi vulputate ut. Fusce consectetur augue non elit finibus rutrum. In hac habitasse platea dictumst. Donec erat lorem, euismod ut odio vel, condimentum mollis metus. Nam dapibus volutpat neque eget placerat.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum ut magna id fermentum. Pellentesque interdum eros a elit cursus molestie. Nulla facilisi. Duis tempor quam vel enim rhoncus tempus. Suspendisse quis tempor sem, non lacinia ligula. Nulla pharetra nisi justo, at suscipit nisi vulputate ut. Fusce consectetur augue non elit finibus rutrum. In hac habitasse platea dictumst. Donec erat lorem, euismod ut odio vel, condimentum mollis metus. Nam dapibus volutpat neque eget placerat.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum ut magna id fermentum. Pellentesque interdum eros a elit cursus molestie. Nulla facilisi. Duis tempor quam vel enim rhoncus tempus. Suspendisse quis tempor sem, non lacinia ligula. Nulla pharetra nisi justo, at suscipit nisi vulputate ut. Fusce consectetur augue non elit finibus rutrum. In hac habitasse platea dictumst. Donec erat lorem, euismod ut odio vel, condimentum mollis metus. Nam dapibus volutpat neque eget placerat.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum ut magna id fermentum. Pellentesque interdum eros a elit cursus molestie. Nulla facilisi. Duis tempor quam vel enim rhoncus tempus. Suspendisse quis tempor sem, non lacinia ligula. Nulla pharetra nisi justo, at suscipit nisi vulputate ut. Fusce consectetur augue non elit finibus rutrum. In hac habitasse platea dictumst. Donec erat lorem, euismod ut odio vel, condimentum mollis metus. Nam dapibus volutpat neque eget placerat.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum ut magna id fermentum. Pellentesque interdum eros a elit cursus molestie. Nulla facilisi. Duis tempor quam vel enim rhoncus tempus. Suspendisse quis tempor sem, non lacinia ligula. Nulla pharetra nisi justo, at suscipit nisi vulputate ut. Fusce consectetur augue non elit finibus rutrum. In hac habitasse platea dictumst. Donec erat lorem, euismod ut odio vel, condimentum mollis metus. Nam dapibus volutpat neque eget placerat.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum ut magna id fermentum. Pellentesque interdum eros a elit cursus molestie. Nulla facilisi. Duis tempor quam vel enim rhoncus tempus. Suspendisse quis tempor sem, non lacinia ligula. Nulla pharetra nisi justo, at suscipit nisi vulputate ut. Fusce consectetur augue non elit finibus rutrum. In hac habitasse platea dictumst. Donec erat lorem, euismod ut odio vel, condimentum mollis metus. Nam dapibus volutpat neque eget placerat.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum ut magna id fermentum. Pellentesque interdum eros a elit cursus molestie. Nulla facilisi. Duis tempor quam vel enim rhoncus tempus. Suspendisse quis tempor sem, non lacinia ligula. Nulla pharetra nisi justo, at suscipit nisi vulputate ut. Fusce consectetur augue non elit finibus rutrum. In hac habitasse platea dictumst. Donec erat lorem, euismod ut odio vel, condimentum mollis metus. Nam dapibus volutpat neque eget placerat.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum ut magna id fermentum. Pellentesque interdum eros a elit cursus molestie. Nulla facilisi. Duis tempor quam vel enim rhoncus tempus. Suspendisse quis tempor sem, non lacinia ligula. Nulla pharetra nisi justo, at suscipit nisi vulputate ut. Fusce consectetur augue non elit finibus rutrum. In hac habitasse platea dictumst. Donec erat lorem, euismod ut odio vel, condimentum mollis metus. Nam dapibus volutpat neque eget placerat.</p>
</div>

</body>
</html>