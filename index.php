<?php

require_once('./_functions/function.php');

give_head();

?>

<div class="container">
  <div class="row">

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
          <li><a href="/product-detail/">Product Detail page with Gift Modal</a></li>
          <li><a href="/product-detail-edit/">Product Detail Edit</a></li>
          <li><a href="/product-article/">Product Article page with Gift Modal</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-xs-12" >
    <div class="panel  panel-default">
      <div class="panel-heading">Self Service</div>
      <div class="panel-body">
        <ul class="listBare">
          <li><a href="/manage-giving/">Manage Your Giving</a></li>
          <li><a href="/payment-methods/">Payment Methods</a></li>
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
          <li><a data-toggle="modal" data-target="#signinModal" href="#">Sign In Modal (all of *.cru.org)</a></li>
          <li><a data-toggle="modal" data-target="#signinModalRec" href="#">Sign In Modal (Password Challenge)</a></li>
          <li><a data-toggle="modal" data-target="#signupModal" href="#">Sign Up Modal (all of *.cru.org)</a></li>
          <li><a data-toggle="modal" data-target="#resetModal" href="#">Reset Password (all of *.cru.org)</a></li>
          <li><a data-toggle="modal" data-target="#modalBenefits" href="#">Thank You Page Modal - Register Your Account</a></li>
          <li><a data-toggle="modal" data-target="#checkoutModal1" href="#">Checkout - Step 1 - Contact Information</a></li>
          <li><a data-toggle="modal" data-target="#userMatchIsThisYou" href="#">User Match - Is This You?</a></li>
          <li><a data-toggle="modal" data-target="#userMatchActivateYourAccount" href="#">User Match - Activate Your Account</a></li>
          <li><a data-toggle="modal" data-target="#userMatchQuestions" href="#">User Match - Questions</a></li>
          <li><a data-toggle="modal" data-target="#modalWithAlert" href="#">Modal w/ Alert</a></li>
        </ul>
      </div>
    </div>
  </div>

  <?php include('_modals/modal-sign-in.php'); ?>
  <?php include('_modals/modal-sign-in-recognized.php'); ?>
  <?php include('_modals/modal-sign-up.php'); ?>
  <?php include('_modals/modal-reset.php'); ?>
  <?php include('_modals/modal-benefits.php'); ?>
  <?php include('_modals/modal-contact-information.php'); ?>
  <?php include('_modals/modal-is-this-you.php'); ?>
  <?php include('_modals/modal-activate-your-account.php'); ?>
  <?php include('_modals/modal-modal-with-alert.php'); ?>
  <?php include('_modals/modal-questions.php'); ?>


  </div>
</div>

<?php

give_footer();

?>
