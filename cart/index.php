<?php

require_once('../_functions/function.php');

give_head();

?>

<div class="screenContent">
  <div class="">
    <div class="section-title  u-centerBlock mb">
      <h1 class="u-inlineBlock banner-title">Your Gift Cart</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <!-- Cart Summary -->
          <div class="panel">
            <div class="panel-body">

              <div class="pull-right tip-link">
                <small><i class="fa fa-question-circle"></i> HELP</small>
              </div>
              <form action="/checkout-step-1/">
                <table class="table giftsum-table">
                  <thead>
                  <tr>
                    <th class="th-title-gift">Gift</th>
                    <th class="th-title-frequency">Frequency</th>
                    <th class="th-title-amount">Amount</th>
                    <th class="th-title-actions"></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php echo cart_row('http://placehold.it/90x70', 'Jean Deaux', '34343434', 'Monthly', 'Starts on: 7/8/2019', '$50.00'); ?>
                  <?php echo cart_row('http://placehold.it/90x70', 'Jean Deaux', '34343434', 'Monthly', 'Starts on: 7/8/2019', '$50.00'); ?>
                  </tbody>
                  <tfoot class="mobile-footer-persist">
                  <tr>
                    <td colspan="3" class="text-right">
                      <span class="giftsum-line">Your Monthly Gift Total: <strong>$50.00</strong></span>
                      <span class="giftsum-line">Your Single Total: <strong>$100.00</strong></span>
                    </td>
                    <td class="checkout-cta">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Proceed to Checkout
                      </button>
                    </td>
                  </tr>
                  </tfoot>
                </table>
              </form>


            </div>
          </div>
          <!-- // Cart Summary -->

          <?php include( 'partial-cart-related.php' ); ?>

          <!-- Cart Search -->
          <div class="panel">
            <div class="panel-body text-center">
              <h3 class="panel-name">Search by Name, Keyword, or Account Number</h3>
              <form class="form-inline text-center">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" size="60" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                  </div>
                </div>

              </form>
              <h5 class="text-uppercase small-text mt">Or Search by:</h5>
              <a href="" class="btn btn-link">Staff</a> | 
              <a href="" class="btn btn-link">Ministries</a> | 
              <a href="" class="btn btn-link">Fund Appeals</a>
            </div>
          </div>
          <!-- // Cart Search -->
        </div>
      </div>
    </div>
  </div><!-- //blank wrapper -->
</div><!-- //screenContent -->

<?php

give_footer();

?>