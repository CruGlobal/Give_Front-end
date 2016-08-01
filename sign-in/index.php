<?php

require_once('../_functions/function.php');

give_head();

?>

<div class="screenContent" tabindex="-1" role="dialog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="panel sign-in-panel">
                    <div class="panel-body">
                        <div class="row vdivide">
                            <div class="col-md-6 sign-in-section">
                                <h3 class="text-center">Sign In</h3>
                                <p class="text-center section-description">Logging in saves you time during checkout.</p>

                                <form>
                                    <div class="form-group">
                                        <label for="username">USERNAME: <span class="text-capitalize">(Your Email)</span></label>
                                        <input type="text" class="form-control form-control-subtle" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">PASSWORD:</label>
                                        <input type="password" class="form-control form-control-subtle" placeholder="Password">
                                    </div>
                                    <a href="/checkout-step-1/" class="btn btn-block btn-primary">Sign In</a>
                                </form>

                                <div class="text-center self-service">Forgot your password? <a data-toggle="modal" data-target="#resetModal">Reset It</a></div>
                            </div>

                            <div class="col-md-6 sign-in-section">
                                <h3 class="text-center">Checkout as Guest</h3>
                                <p class="text-center section-description">You will have an opportunity to register after completing your transaction.</p>

                                <a href="/checkout-step-1/" class="btn btn-block btn-primary">Continue as Guest</a>
                            </div>
                        </div>
                    </div>
                </div><!-- // panel -->
            </div>
        </div>
    </div>
</div>

<?php

include('../_modals/modal-reset.php');
give_footer();

?>