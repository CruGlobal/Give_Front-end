<?php

require_once('../_functions/function.php');

give_head();

?>

  <div class="screenContent" tabindex="-1" role="dialog">
    <div class="container">
      <div class="row">
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
                      <div class="btn-group">
                        <button type="button"
                              class="btn btn-default dropdown-toggle"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                            <span class="hidden-xs">2016 <span class="caret"></span></span>
                            <span class="visible-xs"><span class="fa fa-filter"></span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">2016</a></li>
                            <li><a href="#">2015</a></li>
                            <li><a href="#">2014</a></li>
                            <li><a href="#">2013</a></li>
                            <li><a href="#">2012</a></li>
                        </ul>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row mt">
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-payment-history">
                      <thead>
                      <tr>
                        <th>Receipt Date</th>
                        <th>Amount</th>
                        <th>Gift Details</th>
                        <th></th>
                      </tr>
                      </thead>

                      <tbody>
                      <tr>
                        <td>July 6, 2016</td>
                        <td>$225.00</td>
                        <td>Bruce Banner, Peter Parker, Jeanette Deaux, Clare Angus</td>
                        <td>
                          <a class="u-textWeight-semiBold">View PDF</a>
                        </td>
                      </tr>

                      <tr>
                        <td>July 1, 2016</td>
                        <td>$50.00</td>
                        <td>Jeannette Deaux</td>
                        <td>
                          <a class="u-textWeight-semiBold">View PDF</a>
                        </td>
                      </tr>

                      <tr>
                        <td>June 28, 2016</td>
                        <td>$25.00</td>
                        <td>Bruce Banner</td>
                        <td>
                          <a class="u-textWeight-semiBold">View PDF</a>
                        </td>
                      </tr>

                      <tr>
                        <td>July 1, 2016</td>
                        <td>$100.00</td>
                        <td>Peter Parker</td>
                        <td>
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