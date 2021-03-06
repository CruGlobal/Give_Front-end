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

                  <div class="steps-wrap mb_x clearfix">
                    <div class="steps-single on">
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
                    <div class="steps-single">
                      <span class="step-title">
                      Review and Submit Gift
                      </span>
                      <div class="step-bar">
                        <span class="step-digit">3</span>
                      </div>
                    </div>

                    <div class="steps-mobile-progress visible-xs">
                      <div class="steps-single-mobile on"></div>
                      <div class="steps-single-mobile"></div>
                      <div class="steps-single-mobile"></div>
                    </div>
                  </div>

                  <div class="mb_x">
                    <div class="row">
                      <div class="col-md-6">
                        <a href="#indivform" data-target="tab-indiv" class="tab-btn btn btn-default btn-block on">Give as an Individual</a>
                      </div>
                      <div class="col-md-6">
                        <a href="#orgform" data-target="tab-org" class="tab-btn btn btn-default btn-block">Give as an Organization</a>
                      </div>
                    </div>
                  </div>

                  <div class="tab-indiv cart-tab show">

                    <?php include('partial-individual-form.html'); ?>

                  </div>
                  <div class="tab-org cart-tab">

                    <?php include('partial-organization-form.html'); ?>

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