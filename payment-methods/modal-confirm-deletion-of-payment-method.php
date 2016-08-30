<div id="confirmDeletePaymentMethod" class="modal account-management" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content give-modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title border-bottom-small">Delete Payment Method</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row">
                        <div class="col-xs-12">
                          <form>
                            <div class="panel panel-default bg-danger mb-">
                              <div class="panel-body">
                                <p>
                                  <span class="payment-icon"><i class="fa fa-cc-visa" aria-hidden="true"></i></span>
                                  <span class="payment-nickname">Sam's Visa Debit</span>
                                  ending in ****1717
                                </p>
                              </div>
                            </div>

                            <div class="mb-">
                              <div class="row">
                                <div class="col-sm-12">
                                  <p><small>If you do not want this payment method to be displayed in your list of payment options, click “Confirm Delete” below</small></p>
                                </div>
                              </div>
                            </div>

                            <div class="mb0">
                              <div class="row">
                                <div class="col-md-12 text-right">
                                  <a class="btn btn-default mr-" data-toggle="modal" data-dismiss="modal" data-target="#deletePaymentMethod">Back</a>
                                  <a href="/payment-methods?success" class="btn btn-primary">Confirm Delete</a>
                                </div>
                                <div class="col-md-12 text-right">
                                  <a class="u-block" data-toggle="modal" data-target="#confirmDeletePaymentMethodTransfer" data-dismiss="modal">Alternate: Delete Payment w/ Transfer</a>
                                  <a class="u-block" data-toggle="modal" data-target="#stopRecurringGiftsForPaymentMethod" data-dismiss="modal">Alternate: Stop all Recurring Gifts</a>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->