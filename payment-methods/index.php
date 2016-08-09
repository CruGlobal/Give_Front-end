
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
                            <div class="panel panel-default panel-with-gray-background">
                                <div class="panel-heading" role="tab" id="paymentHeading1">
                                    <a class="payment-summary-link u-block p" role="button" data-toggle="collapse" data-parent="#accordion" href="#paymentMethod1" aria-expanded="true" aria-controls="collapseOne">
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

                                <div id="paymentMethod1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="paymentHeading1">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p class="section-title mb0">Name of card</p>
                                                <p>Samantha H Bork</p>
                                            </div>

                                            <div class="col-md-4">
                                                <p class="section-title mb0">Nickname</p>
                                                <p>Sam's Visa Debit</p>
                                            </div>

                                            <div class="col-md-4 text-right">
                                                <p><a class="btn btn-default" data-toggle="modal" data-target="#editCreditCardPaymentMethod">Edit Payment Method</a></p>
                                                <p><a class="btn btn-default" data-toggle="modal" data-target="#deleteCreditCardPaymentMethod">Delete Payment Method</a></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 pt">
                                                <p class="section-title mb0">Billing address</p>
                                                <p>Samantha Bork <br> 789 Highland Meadows Parkway, Apt. 307 <br> Orlando FL 123456-7890</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <h4 class="section-heading pl--">Recurring Gifts Using This Payment Method:</h4>

                                            <table class="table table-striped borderless">
                                                <thead>
                                                    <tr>
                                                        <th class="section-title">Person or Ministry</th>
                                                        <th class="section-title">Amount</th>
                                                        <th class="section-title">Frequency</th>
                                                        <th class="section-title">Next Gift</th>
                                                        <th class="section-title"></th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>Jeannette Deaux</td>
                                                        <td>$50.00</td>
                                                        <td>Monthly</td>
                                                        <td>8/6/16</td>
                                                        <td><a data-toggle="modal" data-target="#editCreditCardPaymentMethod">Edit</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Peter Parker</td>
                                                        <td>$100.00</td>
                                                        <td>Quarterly</td>
                                                        <td>7/12/16</td>
                                                        <td><a data-toggle="modal" data-target="#editCreditCardPaymentMethod">Edit</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default panel-with-gray-background">
                                <div class="panel-heading" role="tab" id="paymentHeading2">
                                    <a class="payment-summary-link u-block p" role="button" data-toggle="collapse" data-parent="#accordion" href="#paymentMethod2" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p>
                                                    <span class="payment-icon"><i class="fa fa-bank" aria-hidden="true"></i></span>
                                                    <span class="payment-nickname">Chase Checking Account</span>
                                                    ending in ****0025
                                                    <span class="payment-expiration">EXPIRES 08/2022</span>
                                                </p>
                                            </div>
                                            <div class="col-md-4 text-right payment-details-link">
                                                Details +
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div id="paymentMethod2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="paymentHeading2">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p class="section-title mb0">Name of card</p>
                                                <p>Samantha H Bork</p>
                                            </div>

                                            <div class="col-md-4">
                                                <p class="section-title mb0">Nickname</p>
                                                <p>Sam's Visa Debit</p>
                                            </div>

                                            <div class="col-md-4 text-right">
                                                <p><a class="btn btn-default" data-toggle="modal" data-target="#editBankAccountPaymentMethod">Edit Payment Method</a></p>
                                                <p><button class="btn btn-default">Delete Payment Method</button></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 pt">
                                                <p class="section-title mb0">Billing address</p>
                                                <p>Samantha Bork <br> 789 Highland Meadows Parkway, Apt. 307 <br> Orlando FL 123456-7890</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <h4 class="section-heading pl--">Recurring Gifts Using This Payment Method:</h4>

                                            <table class="table table-striped borderless">
                                                <thead>
                                                <tr>
                                                    <th class="section-title">Person or Ministry</th>
                                                    <th class="section-title">Amount</th>
                                                    <th class="section-title">Frequency</th>
                                                    <th class="section-title">Next Gift</th>
                                                    <th class="section-title"></th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>Jeannette Deaux</td>
                                                    <td>$50.00</td>
                                                    <td>Monthly</td>
                                                    <td>8/6/16</td>
                                                    <td><a data-toggle="modal" data-target="#editBankAccountPaymentMethod">Edit</a></td>
                                                </tr>

                                                <tr>
                                                    <td>Peter Parker</td>
                                                    <td>$100.00</td>
                                                    <td>Quarterly</td>
                                                    <td>7/12/16</td>
                                                    <td><a data-toggle="modal" data-target="#editBankAccountPaymentMethod">Edit</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
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

include('modal-edit-credit-card-payment-method.html');
include('modal-edit-bank-account-payment-method.html');
include('modal-delete-credit-card-payment-method.html');
give_footer();

?>