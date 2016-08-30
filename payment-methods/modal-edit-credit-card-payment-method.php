<div id="editCreditCardPaymentMethod" class="modal account-management" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content give-modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="border-bottom-small">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Edit Payment Method</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row">
                        <div class="col-xs-12">
                            <form>
                                <div class="panel panel-default panel-with-gray-background">
                                    <div class="panel-body">
                                        <p>
                                            <span class="payment-icon"><i class="fa fa-cc-visa" aria-hidden="true"></i></span>
                                            <span class="payment-nickname">Sam's Visa Debit</span>
                                            ending in ****1717
                                        </p>
                                    </div>
                                </div>

                                <div class="mb">
                                    <h4 class="border-bottom-small  visible">Credit Card Details</h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Card Number</label>
                                                <input type="text" class="form-control  form-control-subtle" value="**** **** **** 3456">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Name On Card</label>
                                                <input type="text" class="form-control  form-control-subtle" value="Samantha H Bo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Expiration Month</label>
                                                <input type="text" class="form-control  form-control-subtle" value="05">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Expiration Year</label>
                                                <input type="text" class="form-control  form-control-subtle" value="2018">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>CVV Code</label>
                                                <input type="email" class="form-control  form-control-subtle" value="***">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb border-bottom-small">
                                    <h4 class="border-bottom-small  visible">Billing Address</h4>

                                    <div class="form-group">
                                        <label class="checkbox-inline u-textTransformNone">
                                            <input type="checkbox" id="billingAddressValue" value="option1" checked=""> Same as mailing address
                                        </label>
                                    </div>

                                    <div id="address-billing-current" class="billing-address-wrap on">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <p>
                                                    789 Highland Meadows Pkwy, Apt. 307<br/>
                                                    Orlando, Florida 32821
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="address-billing-new" class="billing-address-new-wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <div class="form-group">
                                                        <select class="form-control  form-control-subtle" id="suffix">
                                                            <option>United States of America</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address Line 1</label>
                                                    <input type="text" name="address1" class="form-control  form-control-subtle" value="789 Highland Meadows Pkwy">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address Line 2</label>
                                                    <input type="text" name="address2" class="form-control  form-control-subtle" value="Apt. 307">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control  form-control-subtle" value="Orlando">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <div class="form-group">
                                                        <select class="form-control  form-control-subtle" id="suffix">
                                                            <option>FL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Zip</label>
                                                    <input type="text" class="form-control  form-control-subtle" value="32821">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb0">
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <a class="btn btn-default mr-" data-dismiss="modal" data-target="#editPaymentMethod">Cancel</a>
                                            <a href="" class="btn btn-primary">Save Changes</a>
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