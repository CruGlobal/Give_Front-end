<div id="addPaymentMethodManageGiving" class="modal account-management" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content pt">
            <div class="modal-header pt0 pl">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title border-bottom-small">Edit Payment Method</h4>
            </div>

            <div class="modal-body pt0 p">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 border-bottom-small pb0">
                            <?php include('../checkout-step-2/partial-new-method.php'); ?>
                        </div>

                        <div class="col-xs-12">
                            <a class="btn btn-primary pull-right" data-dismiss="modal" data-toggle="modal" data-target="#confirmChangesManageGiving">Add and Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->