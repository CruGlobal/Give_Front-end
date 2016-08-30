<?php

require_once('../_functions/function.php');

give_head();

?>

  <div class="screenContent" tabindex="-1" role="dialog">
    <div class="container">
      <div class="col-md-12">

        <div class="panel panel-margin-bottom">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <h3>Receipts</h3>

                <form class="form-inline mt">
                  <div class="form-group">
                    <span class="pr-">View My Gifts:</span>
                  </div>

                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default ps_x active">2016</button>
                      <button type="button" class="btn btn-default ps_x">2015</button>
                    </div>
                  </div>

                  <div class="form-group">
                    <a href="" class="pl- u-textWeight-semiBold">More History</a>
                  </div>
                </form>
              </div>
            </div>
            <div class="row mt">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-striped table-striped-dark borderless">
                    <thead>
                    <tr>
                      <td>Receipt Date</td>
                      <td>Amount</td>
                      <td>Gift Details</td>
                      <td></td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                      <td>July 6, 2016</td>
                      <td>$225.00</td>
                      <td>Bruce Banner, Peter Parker, Jeanette Deaux, Clare Angus</td>
                      <td>
                        <p class="mb0">#123456789</p>
                        <a class="u-textWeight-semiBold">View PDF</a>
                      </td>
                    </tr>

                    <tr>
                      <td>July 1, 2016</td>
                      <td>$50.00</td>
                      <td>Jeannette Deaux</td>
                      <td>
                        <p class="mb0">#123456789</p>
                        <a class="u-textWeight-semiBold">View PDF</a>
                      </td>
                    </tr>

                    <tr>
                      <td>June 28, 2016</td>
                      <td>$25.00</td>
                      <td>Bruce Banner</td>
                      <td>
                        <p class="mb0">#123456789</p>
                        <a class="u-textWeight-semiBold">View PDF</a>
                      </td>
                    </tr>

                    <tr>
                      <td>July 1, 2016</td>
                      <td>$100.00</td>
                      <td>Peter Parker</td>
                      <td>
                        <p class="mb0">#123456789</p>
                        <a class="u-textWeight-semiBold">View PDF</a>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="row mt">
              <div class="col-xs-12">
                <button class="btn btn-default center-block ps_x">Load More</button>
              </div>
            </div>
          </div>
        </div>

        <?php include('../_includes/search.php'); ?>

      </div>
    </div>
  </div>


<?php

include('modal-add-payment-method-manage-giving.php');
include('modal-make-changes-manage-giving.php');
include('modal-new-recurring-gift-manage-giving.php');
include('modal-recent-gifts-manage-giving.php');
include('modal-select-multiple.php');
include('modal-config-gift-amounts.php');
include('modal-select-method.php');
include('modal-confirm-changes-manage-giving.php');
include('modal-what-would-you-like-to-do-manage-giving.php');
include('modal-stop-a-gift-manage-giving.php');
include('modal-confirm-changes-start-stop-changes-manage-giving.php');

give_footer();

?>