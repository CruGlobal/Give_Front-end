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
                            <div class="mb_x">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#indivform" data-target="tab-indiv" class="tab-btn btn btn-default btn-block on">Give as an Individual</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#orgform" data-target="tab-org" class="tab-btn btn btn-default btn-block">Give as an Organization</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-indiv cart-tab show">

                                <?php include('checkout-step-1/partial-individual-form.html'); ?>

                            </div>

                            <div class="tab-org cart-tab">

                                <?php include('checkout-step-1/partial-organization-form.html'); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->