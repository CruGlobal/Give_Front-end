<div id="addPaymentMethodManageGiving" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content give-modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="border-bottom-small">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3>Add a Payment Method</h3>
                                <small>You must have at least one valid payment method to continue. Please add one below.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <?php include('../checkout-step-2/partial-new-method.php'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-6">
                        <a class="btn btn-default" data-dismiss="modal">Cancel</a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#makeChangesManageGiving">Add and Continue</a>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->