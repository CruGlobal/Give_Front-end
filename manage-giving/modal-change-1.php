<div id="changeManageGiving" class="modal account-management" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content give-modal-content">
            <?php modal_header('Change My Giving to a New Payment Method', ''); ?>

            <div class="modal-body pb0">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row row-no-spacing">
                        <div class="col-xs-12">

                            <div class="repeating-row">
                                <div class="col-sm-3 col-md-3 mb">
                                    <img src="http://placehold.it/550x310">
                                </div>

                                <div class="col-sm-9 col-md-9">
                                    <h4 class="recipient-name">Jeanette Deaux</h4>
                                    <span class="modal-meta">#123456789</span>

                                    <?php include('partial-gift-details-confirm-dropdown.html'); ?>
                                </div>
                            </div>

                            <div class="repeating-row">
                                <div class="col-sm-3 col-md-3 mb">
                                    <img src="http://placehold.it/550x310">
                                </div>

                                <div class="col-sm-9 col-md-9">
                                    <h4 class="recipient-name">Bruce Banner</h4>
                                    <span class="modal-meta">#123456789</span>

                                    <?php include('partial-gift-details-confirm-dropdown.html'); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <?php modal_footer('#whatTodDoManageGiving', 'Back', '#restartComplete', 'Confirm Changes'); ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
  $("#change-payment-method").change(function () {
    var value = this.value;

    if (value === "add-payment-method") {
      $("#changeManageGiving").modal('hide');
      $("#addPaymentMethod").modal('show');
    }
  });
</script>