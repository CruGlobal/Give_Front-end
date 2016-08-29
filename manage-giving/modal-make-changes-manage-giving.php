<div id="makeChangesManageGiving" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content give-modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="border-bottom-small">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3>Make changes to your recurring gifts</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body pb0">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row row-no-spacing">
                        <div class="col-md-12 col-xs-12">
                            <div class="repeating-row">
                                <div class="col-md-3 col-sm-12 mb">
                                    <img src="http://placehold.it/550x310">
                                </div>

                                <div class="col-md-9">
                                    <h4 class="recipient-name">Jeanette Deaux</h4>
                                    <span class="modal-meta">#123456789</span>

                                    <?php include('partial-gift-details.html'); ?>
                                </div>
                            </div>

                            <div class="repeating-row">
                                <div class="col-md-3 col-sm-12 mb">
                                    <img src="http://placehold.it/550x310">
                                </div>

                                <div class="col-md-9">
                                    <h4 class="recipient-name">Bruce Banner</h4>
                                    <span class="modal-meta">#123456789</span>

                                    <?php include('partial-gift-details.html'); ?>

                                    <p>You have selected <strong>quarterly</strong> as a frequency.
                                        Please tell us in which months you would like your quarterly gifts to be made
                                    </p>

                                    <div class="form-group mb0">
                                        <label class="radio">
                                            <input value="1" type="radio">January, April, July, October
                                        </label>
                                        <label class="radio">
                                            <input value="2" type="radio">February, May, August, November
                                        </label>
                                        <label class="radio">
                                            <input value="3" type="radio">March, June, September, December
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="repeating-row">
                                <div class="col-md-3 col-sm-12 mb">
                                    <img src="http://placehold.it/550x310">
                                </div>

                                <div class="col-md-9">
                                    <h4 class="recipient-name">Natasha Romanov</h4>
                                    <span class="modal-meta">#123456789</span>

                                    <?php include('partial-gift-details.html'); ?>

                                    <p>You have selected <strong>annually</strong> as a frequency.
                                        Please tell us in which months you would like your annual gifts to be made
                                    </p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb0">
                                                <select class="form-control  form-control-subtle">
                                                    <option>January</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="repeating-row">
                                <div class="col-md-3 col-sm-12 mb">
                                    <img src="http://placehold.it/550x310">
                                </div>

                                <div class="col-md-9">
                                    <h4 class="recipient-name">Peter Parker</h4>
                                    <span class="modal-meta">#123456789</span>

                                    <?php include('partial-gift-details.html'); ?>

                                    <p>This gift cannot be changed online. For assistance,
                                        please call us at (888) 278-7233 from 9am to 5pm ET, Monday - Friday, or email us at
                                        <a href="mailto:eGift@cru.org">eGift@cru.org</a>.
                                    </p>
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
                        <a class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#recentGiftsManageGiving">Continue</a>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->