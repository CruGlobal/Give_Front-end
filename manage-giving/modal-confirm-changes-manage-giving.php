<div id="confirmChangesManageGiving" class="modal account-management" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content give-modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="border-bottom-small">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3>Confirm Your Changes</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body pb0">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row row-no-spacing">
                        <div class="col-xs-12">
                            <div class="repeating-row">
                                <div class="col-sm-3 col-md-3 mb">
                                    <img src="http://placehold.it/550x310">
                                </div>

                                <div class="col-sm-9 col-md-9">
                                    <h4 class="recipient-name">Jeanette Deaux</h4>
                                    <span class="modal-meta">#123456789</span>

                                    <?php include('partial-gift-details-confirm.html'); ?>
                                </div>
                            </div>

                            <div class="repeating-row">
                                <div class="col-sm-3 col-md-3 mb">
                                    <img src="http://placehold.it/550x310">
                                </div>

                                <div class="col-sm-9 col-md-9">
                                    <h4 class="recipient-name">Bruce Banner</h4>
                                    <span class="modal-meta">#123456789</span>

                                    <?php include('partial-gift-details-confirm.html'); ?>
                                </div>
                            </div>

                            <div class="repeating-row">
                                <div class="col-sm-3 col-md-3 mb">
                                    <img src="http://placehold.it/550x310">
                                </div>

                                <div class="col-sm-9 col-md-9">
                                    <h4 class="recipient-name">Natasha Romanov</h4>
                                    <p class="modal-meta">#123456789</p>

                                    <?php include('partial-gift-details-confirm.html'); ?>
                                </div>
                            </div>

                            <div class="repeating-row">
                                <div class="col-sm-3 col-md-3 mb">
                                    <img src="http://placehold.it/550x310">
                                </div>

                                <div class="col-sm-9 col-md-9">
                                    <h3 class="mb0">Peter Parker</h3>
                                    <span class="modal-meta">#123456789</span>

                                    <?php include('partial-gift-details-confirm.html'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row row-no-spacing">
                    <div class="col-xs-6">
                        <a class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#addPaymentMethodManageGiving">Back</a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a class="btn btn-primary" href="/manage-giving/?success">Confirm Changes</a>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->