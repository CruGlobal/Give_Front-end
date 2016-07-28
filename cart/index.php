<?php

require_once('../_functions/function.php');

give_head();

?>

<div class="screenContent">
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <!-- Cart Summary -->
          <div class="panel">
            <div class="panel-body">
              <h3 class="panel-name">Your Gift Cart</h3>
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