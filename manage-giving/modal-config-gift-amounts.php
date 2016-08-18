<div id="configGiftAmount" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content give-modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="border-bottom-small">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3>Give an Extra One-Time Gift</h3>
                                <p>How much would you like to give to these recipients?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body pb0">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">

                            <?php 
                            $i = 1;
                            while($i <= 3) { ?>

                            <div class="select-recipient-row">
                              <div class="col-xs-3">
                                  <img src="http://placehold.it/550x310" />
                              </div>

                              <div class="col-xs-9">
                                  <h4 class="recipient-name">Eli Adadevoh</h4>
                                  <span class="recipient-id">#334565</span>

                                  <div class="row mt-">
                                    <div class="col-xs-12">
                                        <div class="form-group inline-form-group">
                                            <label>Amount</label>
                                            <input type="text" value="$50.00" class="form-control form-control-subtle">
                                            <span class="line-height">One-Time Gift</span>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            
                            <?php 
                            $i++; 
                            } 
                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row row-no-spacing">
                    <div class="col-xs-6">
                        <a class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#giveOneTime">Back</a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#configGiftMethod">Continue</a>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->