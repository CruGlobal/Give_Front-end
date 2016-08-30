<div id="addPaymentMethod" class="modal account-management" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content give-modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title border-bottom-small">Add Payment Method</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="mb_x">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#indivform" data-target="tab-indiv" class="tab-btn btn btn-lg btn-default btn-block on">
                                            Bank Account
                                            <img src="/assets/img/icon-bank.png" alt="Bank Account Icon"/>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#orgform" data-target="tab-org" class="tab-btn btn btn-lg btn-default btn-block">
                                            Credit Card
                                            <img src="/assets/img/icon-cc.png" alt="Credit Card Icon"/>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-indiv cart-tab show">

                                <?php include('partial-add-bank-account.php'); ?>

                            </div>
                            <div class="tab-org cart-tab">

                                <?php include('partial-add-credit-card.php'); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->