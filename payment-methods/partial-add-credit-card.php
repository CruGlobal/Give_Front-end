<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="row">
            <form>
                <div class="mb">
                    <h4 class="border-bottom-small  visible">Credit Card Details</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Card Number</label>
                                <input type="text" class="form-control  form-control-subtle" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name On Card</label>
                                <input type="text" class="form-control  form-control-subtle" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Expiration Month</label>
                                <input type="text" class="form-control  form-control-subtle" value="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Expiration Year</label>
                                <input type="text" class="form-control  form-control-subtle" value="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>CVV Code</label>
                                <input type="email" class="form-control  form-control-subtle" value="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb border-bottom-small">
                    <h4 class="border-bottom-small  visible">Billing Address</h4>

                    <div class="form-group">
                        <label class="checkbox-inline u-textTransformNone">
                            <input type="checkbox" id="billingAddressValue" value=""> Same as mailing address
                        </label>
                    </div>

                    <div id="address-billing-current" class="billing-address-wrap">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>
                                    789 Highland Meadows Pkwy, Apt. 307<br/>
                                    Orlando, Florida 32821
                                </p>
                            </div>
                        </div>
                    </div>

                    <div id="address-billing-new" class="billing-address-new-wrap on">
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
                                    <input type="text" name="address1" class="form-control  form-control-subtle" value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address Line 2</label>
                                    <input type="text" name="address2" class="form-control  form-control-subtle" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control  form-control-subtle" value="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>State</label>
                                    <div class="form-group">
                                        <select class="form-control  form-control-subtle" id="suffix">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Zip</label>
                                    <input type="text" class="form-control  form-control-subtle" value="">
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