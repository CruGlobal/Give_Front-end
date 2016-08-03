
<?php

require_once('../_functions/function.php');

give_head();

?>

<div class="screenContent account-management" tabindex="-1" role="dialog">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-margin-bottom">
                <div class="panel-body">
                    <div class="row pb">
                        <div class="col-md-6">
                            <h3>Your Payment Methods</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-primary">Add New Payment Method</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default sand-gray">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a class="payment-summary-link u-block" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p>
                                                    <span class="payment-icon"><i class="fa fa-cc-visa" aria-hidden="true"></i></span>
                                                    <span class="payment-nickname">Visa</span>
                                                    ending in ****1717
                                                    <span class="payment-expiration">EXPIRES 08/2022</span>
                                                </p>
                                            </div>
                                            <div class="col-md-4 text-right payment-details-link">
                                                Details +
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <p class="section-title">Name of card</p>
                                            <p>Samantha H Bork</p>
                                        </div>

                                        <div class="col-md-4">
                                            <p class="section-title">Nickname</p>
                                            <p>Sam's Visa Debit</p>
                                        </div>

                                        <div class="col-md-4 text-right">
                                            <p><button class="btn btn-default">Edit Payment Method</button></p>
                                            <p><button class="btn btn-default">Delete Payment Method</button></p>
                                        </div>

                                        <div class="col-md-12">
                                            <p class="section-title">Billing address</p>
                                            <p>Samantha Bork</p>
                                            <p>789 Highland Meadows Parkway, Apt. 307</p>
                                            <p>Orlando FL 123456-7890</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include( '../_includes/search.php' ); ?>
        </div>
    </div>
</div>

<?php

give_footer();

?>