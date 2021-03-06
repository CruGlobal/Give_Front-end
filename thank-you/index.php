<?php

require_once('../_functions/function.php');

give_head();

?>
<div class="screenContent">
  <div class="container container-edge-small container-edge-extrasmall">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-body">
                  <h2 class="panel-name">
                    Thank you for Your Gift
                  </h2>

                  <p>
                    We are processing your gift now. We'll send an email confirmation to to peter.parker@gmail.com as well as a tax-deductible receipt by postal mail.
                  </p>

                  <p>
                    Thanks for making a difference in the lives of people both now and for eternity. May the Lord bless your investment in this work for Christ's kingdom. (Luke 6:38)
                  </p>

                  <div class="row mt">
                    <div class="col-md-6">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          Payment Method
                        </div>

                        <div class="panel-body">
                          <div class="form-group">
                            <label class="">Bank Name</label>
                            <p>
                              Bank of America
                            </p>
                          </div>

                          <div class="form-group">
                            <label class="">Account Type</label>
                            <p>Checking</p>
                          </div>

                          <div class="form-group">
                            <label class="">Routing Number</label>
                            <p>0000667656</p>
                          </div>

                          <div class="form-group">
                            <label class="">Account Number</label>
                            <p>********** 4567</p>
                          </div>

                          <div class="form-group">
                            <label class="">Billing Address</label>
                            <p>8898 Strawberry Lane, Orlando, Florida 77678-9909</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          Receipt Mailing Address
                        </div>

                        <div class="panel-body">
                          <div class="form-group">
                            <p>Jean Deaux</p>
                            <p>
                              1234 Seaseme Street,<br>
                              Orlando, Florida 12345-6789
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- // row -->

                  <div class="row">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <h4 class="panel-name">Gift Summary</h4>

                          <table class="table giftsum-table giftsum-table-cart">
                            <tbody>
                              <tr class="giftsum-gift-row">
                                <td class="td-gift">
                                  <span class="giftsum-person giftsum-title">Jeannette Deuax</span>
                                  <p>Ministry #1234567</p>
                                </td>
                                <td class="td-frequency">
                                  <span class="giftsum-about giftsum-title">$50.00 Monthly</span> <span class="giftsum-frequency giftsum-title">First Gift: 2/10/2016</span>
                                </td>
                              </tr>

                              <tr class="giftsum-gift-row">
                                <td class="td-gift">
                                  <span class="giftsum-person giftsum-title">Jeannette Deuax</span>
                                  <p>Ministry #1234567</p>
                                </td>
                                <td class="td-frequency">
                                  <span class="giftsum-about giftsum-title">$50.00 Single Gift</span> <span class="giftsum-frequency giftsum-title">Transaction Date: 1-2 Business Days</span>
                                </td>
                              </tr>
                            </tbody>

                            <tfoot>
                              <tr>
                                <td class="text-right" colspan="2">
                                  <span class="giftsum-line">Your Monthly Gift Total: <strong>$50.00</strong></span>
                                  <span class="giftsum-line">Your Single Total: <strong>$100.00</strong></span>
                                </td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div><!-- // row -->

                </div>
              </div><!-- // panel -->
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <?php include('partial-benefits.html'); ?>
        </div>

        <div class="col-md-4 hidden-xs hidden-sm">
          <?php include('../_includes/help.php'); ?>
        </div>
      </div>
    </div>
    <!-- // masonry container -->
  </div>
</div>
<!-- End content wrap -->

<?php
include('../_modals/modal-sign-up.php');
include('../_modals/modal-sign-in-recognized.php');
give_footer();

?>