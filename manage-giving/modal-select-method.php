<div id="configGiftMethod" class="modal" tabindex="-1" role="dialog">
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

            <div class="modal-body">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row">
                        <div class="col-xs-12">
                          <div class="repeating-row select-recipient-row">
                            <?php 
                            $i = 1;
                            while($i <= 3) { ?>

                                <?php include('../checkout-payment-method/partial-existing-method-row.html'); ?>

                            <?php 
                            $i++; 
                            } 
                            ?>

                            <div class="mt-">
                              <p class="inline-block">Total for This Gift:</p>
                              <h3 class="inline-block">$50.00</h3>
                            </div>
                          </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row row-no-spacing">
                    <div class="col-xs-6">
                        <a class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#configGiftAmount">Back</a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a class="btn btn-primary" href="../thank-you/index.php">Continue</a>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->