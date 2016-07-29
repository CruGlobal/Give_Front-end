<?php

require_once('./_functions/function.php');

give_head();

?>

<!-- TITLE BAR -->
  <div class="site-header"></div>
  <div class="section-title  u-centerBlock  masonry__item  col-md-12  col-xs-12  mb mt" >
    <h1 class="u-inlineBlock  banner-title  ">Give.Cru.Org</h1>
  </div>
  <div class="col-xs-12" >
    <div class="panel  panel-default">
      <div class="panel-heading">Sign In</div>
      <div class="panel-body">
        <ul class="listBare">
          <li>Coming soon</li>
        </ul>
      </div>
    </div>
  </div>
    <div class="col-xs-12" >
    <div class="panel  panel-default">
      <div class="panel-heading">Screens 6</div>
      <div class="panel-body">
        <ul class="listBare">
          <li><a a href="checkout-payment-method/index.html">add a new payment method</a></li>
          <li><a href="checkout-step-3-copy/index.html">Checkout - Step 3</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-xs-12" >
    <div class="panel  panel-default">
      <div class="panel-heading">Product Pages</div>
      <div class="panel-body">
        <ul class="listBare">
          <li><a href="/product-detail/">Product detail page with Gift Modal</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-xs-12" >
    <div class="panel  panel-default">
      <div class="panel-heading">Checkout Pages</div>
      <div class="panel-body">
        <ul class="listBare">
          <li><a href="/cart/">Cart</a></li>
          <li><a a href="/sign-in/">Sign In or Checkout As Guest</a></li>
          <li><a href="/checkout-step-1/">Checkout - Step 1</a></li>
          <li><a href="/checkout-step-2/">Checkout - Step 2</a></li>
          <li><a href="/checkout-step-3/">Checkout - Step 3</a></li>
          <li><a href="/thank-you/">Checkout - Thank You</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-xs-12" >
    <div class="panel  panel-default">
      <div class="panel-heading">Modals</div>
      <div class="panel-body">
        <ul class="listBare">
          <li><a data-toggle="modal" data-target="#signinModal">Sign In Modal (all of *.cru.org)</a></li>
          <li><a data-toggle="modal" data-target="#signinModalRec">Sign In Modal (pre-auth)</a></li>
          <li><a data-toggle="modal" data-target="#signupModal">Sign Up Modal (all of *.cru.org)</a></li>
          <li><a data-toggle="modal" data-target="#resetModal">Reset Password (all of *.cru.org)</a></li>
          <li><a data-toggle="modal" data-target="#modalBenefits">Thank You Page Modal - Register Your Account</a></li>
          <li><a data-toggle="modal" data-target="#checkoutModal1">Checkout Step 1 of 3</a></li>
        </ul>
      </div>
    </div>
  </div>

  <?php include('_modals/modal-sign-in.php'); ?>
  <?php include('_modals/modal-sign-in-recognized.php'); ?>
  <?php include('_modals/modal-sign-up.php'); ?>
  <?php include('_modals/modal-reset.php'); ?>
  <?php include('_modals/modal-benefits.php'); ?>
  <?php include('_modals/checkout-step-1.php'); ?>

<?php

give_footer();

?>
