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

                  <div class="mb">
                    <div class="row">
                      <div class="col-md-6">
                        <a href="#indivform" data-target="tab-indiv" class="tab-btn btn btn-lg btn-default btn-block">
                          Bank Account
                          <img src="/assets/img/icon-bank.png" alt="Bank Account Icon"/>
                        </a>
                      </div>
                      <div class="col-md-6">
                        <a href="#orgform" data-target="tab-org" class="tab-btn btn btn-lg btn-default btn-block">
                          Credit Card
                          <img src="/assets/img/icon-cc.png" alt="Credit Card Icon"/>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="tab-indiv cart-tab show">

                    <?php include('partial-bank.html'); ?>

                  </div>
                  <div class="tab-org cart-tab">

                    <?php include('partial-creditcard.html'); ?>

                  </div>

                </div> <!-- // panelbody -->
              </div><!-- // panel -->
            </div>
          </div>
        </div>
        <div class="col-md-4 hidden-xs">
          <?php include('../cart/partial-cart-summary.php'); ?>
        </div>
      </div>
    </div> <!-- // masonry container -->

  </div>
</div>
<!-- End content wrap -->

<?php 

give_footer();

?>