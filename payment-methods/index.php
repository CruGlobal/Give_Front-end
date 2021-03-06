
<?php

require_once('../_functions/function.php');

give_head();

?>

<div class="screenContent account-management" tabindex="-1" role="dialog">
    <div class="container">
        <div class="col-md-12">
          <?php
            if (isset($_GET['success'])) {
              echo '<div class="alert alert-danger" role="alert">Payment method has been successfully deleted.</div>';
            }
          ?>

          <div class="panel panel-margin-bottom">
            <div class="panel-body">
              <div class="row pb">
                <div class="col-md-6">
                  <h3>Your Payment Methods</h3>
                </div>
                <div class="col-md-6 text-right">
                  <a class="btn btn-primary" data-toggle="modal" data-target="#addPaymentMethod">Add New Payment Method</a>
                </div>
              </div>

              <div class="row">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default panel-with-gray-background">
                    <div class="panel-heading" role="tab" id="paymentHeading1">
                      <div class="payment-summary-link p- collapsed collapse-indicator-row" role="button" data-toggle="collapse" data-parent="#accordion" href="#paymentMethod1" aria-expanded="true" aria-controls="collapseOne">
                        <div class="row">
                          <div class="col-md-8">
                            <p>
                              <img class="hidden-xs payment-icon" src="/assets/img/cc-icons/visa-curved-128px.png" />
                              <span class="payment-nickname">Visa</span>
                              ending in ****1717
                              <span class="payment-expiration">EXPIRES 08/2022</span>
                            </p>
                          </div>
                          <div class="col-md-4 text-right payment-details-link">
                            <button class="btn trigger">Details</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="paymentMethod1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="paymentHeading1">
                        <div class="panel-body">
                          <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <p class="section-title mb0">Name of card</p>
                                    <p>Samantha H Bork</p>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <p class="section-title mb0">Nickname</p>
                                    <p>Sam's Visa Debit</p>
                                </div>

                                <div class="col-sm-5 col-md-4 text-right split-row">
                                    <p class="split-col-left"><a class="btn btn-default btn-block" data-toggle="modal" data-target="#editCreditCardPaymentMethod">Edit Payment Method</a></p>
                                    <p class="split-col-right"><a class="btn btn-default btn-block" data-toggle="modal" data-target="#deletePaymentMethod">Delete Payment Method</a></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 pt">
                                    <p class="section-title mb0">Billing address</p>
                                    <p>Samantha Bork <br> 789 Highland Meadows Parkway, Apt. 307 <br> Orlando FL 123456-7890</p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div class="container-fluid">
                            <div class="row">
                                <h4 class="pl--">Recurring Gifts Using This Payment Method</h4>

                                <div class="table-responsive">
                                  <table class="table table-striped table-striped-dark borderless">
                                    <thead>
                                    <tr>
                                      <th class="section-title">Person or Ministry</th>
                                      <th class="section-title">Amount</th>
                                      <th class="section-title">Frequency</th>
                                      <th class="section-title">Next Gift</th>
                                      <th class="section-title"></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                      <td>Jeannette Deaux</td>
                                      <td>$50.00</td>
                                      <td>Monthly</td>
                                      <td>8/6/16</td>
                                    </tr>

                                    <tr>
                                      <td>Peter Parker</td>
                                      <td>$100.00</td>
                                      <td>Quarterly</td>
                                      <td>7/12/16</td>
                                    </tr>
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default panel-with-gray-background">
                    <div class="panel-heading" role="tab" id="paymentHeading2">
                      <div class="payment-summary-link p- collapsed collapse-indicator-row" role="button" data-toggle="collapse" data-parent="#accordion" href="#paymentMethod2" aria-expanded="true" aria-controls="collapseOne">
                        <div class="row">
                            <div class="col-sm-8 col-md-8">
                              <p>
                                <img class="hidden-xs payment-icon" src="/assets/img/icon-bank.png" />
                                <span class="payment-nickname">Chase Checking Account</span>
                                ending in ****0025
                                <span class="payment-expiration">EXPIRES 08/2022</span>
                              </p>
                            </div>
                            <div class="col-sm-4 col-md-4 text-right payment-details-link">
                              <button class="btn trigger">Details</button>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div id="paymentMethod2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="paymentHeading2">
                      <div class="panel-body">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-6 col-md-4">
                              <p class="section-title mb0">Name of card</p>
                              <p>Samantha H Bork</p>
                            </div>

                            <div class="col-sm-6 col-md-4">
                              <p class="section-title mb0">Nickname</p>
                              <p>Sam's Visa Debit</p>
                            </div>

                            <div class="col-sm-5 col-md-4 text-right split-row">
                              <p class="split-col-left"><a class="btn btn-default btn-block" data-toggle="modal" data-target="#editBankAccountPaymentMethod">Edit Payment Method</a></p>
                              <p class="split-col-right"><a class="btn btn-default btn-block" data-toggle="modal" data-target="#deletePaymentMethod">Delete Payment Method</a></p>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12 pt">
                                <p class="section-title mb0">Billing address</p>
                                <p>Samantha Bork <br> 789 Highland Meadows Parkway, Apt. 307 <br> Orlando FL 123456-7890</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel-body">
                        <div class="container-fluid">
                          <div class="row">
                              <h4 class="pl--">Recurring Gifts Using This Payment Method:</h4>

                              <div class="table-responsive">
                                <table class="table table-striped table-striped-dark borderless">
                                  <thead>
                                  <tr>
                                    <th class="section-title">Person or Ministry</th>
                                    <th class="section-title">Amount</th>
                                    <th class="section-title">Frequency</th>
                                    <th class="section-title">Next Gift</th>
                                  </tr>
                                  </thead>

                                  <tbody>
                                  <tr>
                                    <td>Jeannette Deaux</td>
                                    <td>$50.00</td>
                                    <td>Monthly</td>
                                    <td>8/6/16</td>
                                  </tr>

                                  <tr>
                                    <td>Peter Parker</td>
                                    <td>$100.00</td>
                                    <td>Quarterly</td>
                                    <td>7/12/16</td>
                                  </tr>
                                  </tbody>
                                </table>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php include( '../_includes/search.php' ); ?>
        </div>
    </div>
</div>

<?php

include('modal-edit-credit-card-payment-method.php');
include('modal-edit-bank-account-payment-method.php');
include('modal-add-payment-method.php');
include('modal-delete-payment-method.php');
include('modal-confirm-deletion-of-payment-method.php');
include('modal-confirm-deletion-of-payment-method-transfer.php');
include('modal-stop-recurring-gifts-on-payment-method.php');

give_footer();

?>