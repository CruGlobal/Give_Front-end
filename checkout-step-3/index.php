<?php

require_once('../_functions/function.php');

give_head();

?>

<!-- Content wrap -->
<div class="screenContent">
  <div class="container container-edge-small container-edge-extrasmall">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-body">
                  <h3 class="panel-name">Checkout</h3>

                  <div class="steps-wrap mb clearfix">
                    <div class="steps-single">
                      <span class="step-title">
                      Contact Information
                      </span>
                      <div class="step-bar">
                        <span class="step-digit">1</span>
                      </div>
                    </div>
                    <div class="steps-single">
                      <span class="step-title">
                      Payment Method
                      </span>
                      <div class="step-bar">
                        <span class="step-digit">2</span>
                      </div>
                    </div>
                    <div class="steps-single on">
                      <span class="step-title">
                      Review and Submit Gift
                      </span>
                      <div class="step-bar">
                        <span class="step-digit">3</span>
                      </div>
                    </div>

                    <div class="steps-mobile-progress visible-xs">
                      <div class="steps-single-mobile"></div>
                      <div class="steps-single-mobile"></div>
                      <div class="steps-single-mobile on"></div>
                    </div>
                  </div>

                  <div class="mb">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        Receipt Address
                        <a class="btn btn-default pull-right btn-panel-head" href="/checkout-step-1/">Change</a>
                      </div>
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <p>1234 Strawberry Lane Road<br/>
                                Naples, Florida 77675</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mb">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        Payment Method
                        <a class="btn btn-default pull-right btn-panel-head" href="/checkout-step-2/">Change</a>
                      </div>
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="">Bank Name</label>
                                  <p>Bank of America</p>
                                </div>
                                <div class="form-group">
                                  <label class="">Account Number</label>
                                  <p class="number">********** 4567</p>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="">Account Type</label>
                                  <p class="number">Checking</p>
                                </div>
                                <div class="form-group">
                                  <label class="">Routing Number</label>
                                  <p class="number">0000667656</p>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="">Billing Address</label>
                                  <p>8898 Strawberry Lane, Orlando, Florida 77678-9909</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mb">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        Review Items
                      </div>
                      <div class="panel-body">
                        <?php echo cart_table('3'); ?>
                      </div>
                    </div>
                  </div>

                </div> <!-- // panelbody -->
              </div><!-- // panel -->
            </div>
          </div>
        </div>
        <div class="col-md-4 hidden-xs hidden-sm">
          <?php include('../cart/partial-cart-summary.php'); ?>
        </div>
        <div class="col-md-4 hidden-xs hidden-sm">
          <?php include('../_includes/help.php'); ?>
        </div>
      </div>
    </div> <!-- // masonry container -->

  </div>
</div>
<!-- End content wrap -->

<?php 

give_footer();

?>