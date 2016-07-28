<?php

require_once('../_functions/function.php');

if (isset($_GET['existing'])) {
  $existing_method = $_GET['existing'];
} else {
  $existing_method = false;
}

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
                    <div class="steps-single on">
                      <span class="step-title">
                      Payment Method
                      </span>
                      <div class="step-bar">
                        <span class="step-digit">2</span>
                      </div>
                    </div>
                    <div class="steps-single">
                      <span class="step-title">
                      Review and Submit Gift
                      </span>
                      <div class="step-bar">
                        <span class="step-digit">3</span>
                      </div>
                    </div>

                    <div class="steps-mobile-progress visible-xs">
                      <div class="steps-single-mobile"></div>
                      <div class="steps-single-mobile on"></div>
                      <div class="steps-single-mobile"></div>
                    </div>
                  </div>

                  <?php if (!$existing_method) { ?>

                    <?php include('partial-new-method.php'); ?>

                  <?php } elseif ($existing_method) { ?>

                    <?php include('partial-existing-methods.php'); ?>

                  <?php } ?> 

                  <div class="closer">
                    <div class="row">
                        <div class="col-sm-5 hidden-xs">
                            <a href="/checkout-step-1/" class="btn btn-default">Previous Step</a>
                        </div>
                        <div class="col-sm-5 col-sm-offset-2">
                            <a href="/checkout-step-3/" class="btn btn-primary pull-right btn-block-mobile">Continue to Review &amp; Submit</a>
                            <a href="/checkout-step-1/" class="btn btn-link btn-block visible-xs"><i class="fa fa-angle-left"></i> Previous Step</a>
                        </div>
                    </div>
                  </div>

                </div> <!-- // panelbody -->
              </div><!-- // panel -->
            </div>
          </div>
        </div>
        <div class="col-md-4 hidden-xs">
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