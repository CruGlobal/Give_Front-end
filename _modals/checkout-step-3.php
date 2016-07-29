<div id="checkoutModal3" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center">Contact Information</h3>
            </div>
            <div class="modal-body pt0 p">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="mb">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Receipt Address
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <p>1234 Strawberry Lane Road<br/>
                                                        Naples, Florida 77675</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-right">
                                                <a class="btn btn-default btn-block" href="/checkout-step-1/">Change</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Payment Method
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="">Bank Name</label>
                                                            <p>Bank of America</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Account Number</label>
                                                            <p class="number">********** 4567</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="">Account Type</label>
                                                            <p class="number">Checking</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Routing Number</label>
                                                            <p class="number">0000667656</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="">Billing Address</label>
                                                            <p>8898 Strawberry Lane, Orlando, Florida 77678-9909</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-right">
                                                <a class="btn btn-default btn-block" href="/checkout-step-2/">Change</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Review Items
                                    </div>
                                    <div class="panel-body">
                                        <?php echo cart_table('3'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->