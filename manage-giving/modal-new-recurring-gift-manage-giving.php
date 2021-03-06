<div id="newRecurringGiftManageGiving" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content give-modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="border-bottom-small">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3>Setup your new recurring gift and we'll add it to your donation</h3>
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
                                    <h4 class="recipient-name">Clark Kent</h4>
                                    <span class="modal-meta">#123456789</span>

                                    <?php include('partial-gift-details.html'); ?>

                                    <p>You have selected <strong>annually</strong> as a frequency.
                                        Please tell us in which months you would like your annual gifts to be made.
                                    </p>

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group mb0">
                                                <select class="form-control  form-control-subtle">
                                                    <option>January</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row row-no-spacing">
                    <div class="col-xs-6">
                        <a class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#recentGiftsManageGiving">Back</a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#confirmChangesManageGiving">Continue</a>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->