<div id="addPaymentMethod" class="modal account-management" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content pt">
            <div class="modal-header pt0 pl">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title border-bottom-small">Add Payment Method</h4>
            </div>

            <div class="modal-body pt0 p">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="mb_x">
                        <div class="row">
                            <div class="col-md-6 pl0">
                                <a href="#indivform" data-target="tab-indiv" class="tab-btn btn btn-lg btn-default btn-block on">
                                    Bank Account
                                    <img src="/assets/img/icon-bank.png" alt="Bank Account Icon"/>
                                </a>
                            </div>
                            <div class="col-md-6 pr0">
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
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->