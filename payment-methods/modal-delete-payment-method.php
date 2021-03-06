<div id="deletePaymentMethod" class="modal account-management" tabindex="-1" role="dialog">
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
                        <div class="col-md-12 col-xs-12">
                            <form>
                                <div class="panel panel-default bg-danger">
                                    <div class="panel-body">
                                        <p>
                                            <span class="payment-icon"><i class="fa fa-cc-visa" aria-hidden="true"></i></span>
                                            <span class="payment-nickname">Sam's Visa Debit</span>
                                            ending in ****1717
                                        </p>
                                    </div>
                                </div>

                                <div class="mb">
                                    <h4 class="border-bottom-small  visible">Recurring Gifts Using this Payment Method</h4>

                                    <div class="row repeating-row user-profile">
                                      <div class="col-sm-3 col-md-3 mb">
                                        <img class="full-width" src="http://placehold.it/550x310">
                                      </div>
                                      <div class="col-sm-9 col-md-9">
                                        <h4 class="recipient-name">Jeanette Deaux</h4>
                                        <span class="modal-meta mb-">#123456789</span>

                                        <p class="gift-summary">$50.00 Monthly</p>
                                        <p class="start-date">On the 15th day of each month</p>
                                      </div>
                                    </div>

                                    <div class="row repeating-row user-profile">
                                        <div class="col-sm-3 col-md-3 mb">
                                            <img class="full-width" src="http://placehold.it/550x310">
                                        </div>
                                        <div class="col-sm-9 col-md-9">
                                            <h4 class="recipient-name">Bruce Banner</h4>
                                            <span class="modal-meta mb-">#123456789</span>

                                            <p class="gift-summary">$250.00 Monthly</p>
                                            <p class="start-date">On the 15th day of each January, April, July, and October</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb border-bottom-small">
                                    <h4 class="visible">Select an action for these recurring gifts:</h4>

                                    <div class="form-group">
                                        <label class="radio u-textTransformNone radio-inline">
                                            <input value="1" type="radio" name="optradio" checked>Move gifts to a different payment method
                                            <select class="form-control form-control-subtle">
                                                <option>Mastercard ending in ****7675</option>
                                            </select>
                                        </label>
                                        <label class="radio u-textTransformNone">
                                            <input value="2" type="radio" name="optradio">Move gifts to new bank account
                                        </label>
                                        <label class="radio u-textTransformNone">
                                            <input value="3" type="radio" name="optradio">Stop recurring gifts
                                        </label>
                                    </div>
                                </div>

                                <div class="mb0">
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <a class="btn btn-default mr-" data-dismiss="modal">Cancel</a>
                                            <a class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#confirmDeletePaymentMethod">Continue</a>
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