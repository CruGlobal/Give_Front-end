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
                <?php echo cart_table('full'); ?>
              </form>
            </div>
          </div>
          <!-- // Cart Summary -->

          <?php include( 'partial-cart-related.php' ); ?>

          <?php include( '../_includes/search.php' ); ?>
        </div>
      </div>
    </div>
  </div><!-- //blank wrapper -->
</div><!-- //screenContent -->

<?php

give_footer();

?>