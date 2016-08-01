<div id="checkoutModal2" class="modal" tabindex="-1" role="dialog">
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
                            <?php
                                if (isset($_GET['existing'])) {
                                    $existing_method = $_GET['existing'];
                                } else {
                                    $existing_method = false;
                                }
                            ?>

                            <?php if (!$existing_method) { ?>

                                <?php include('checkout-step-2/partial-new-method.php'); ?>

                            <?php } elseif ($existing_method) { ?>

                                <?php include('checkout-step-2/partial-existing-methods.php'); ?>

                            <?php } ?>

                            <div class="closer">
                                <div class="row">
                                    <div class="col-sm-5 hidden-xs">
                                        <a href="/checkout-step-1/" class="btn btn-default">Previous Step</a>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-2">
                                        <a href="/checkout-step-3/" class="btn btn-primary pull-right btn-block-mobile">Continue to Review &amp; Submit</a>
                                        <a href="/checkout-step-1/" class="btn btn-link btn-block visible-xs"><i class="fa fa-angle-left"></i> Previous Step</a>
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