<div id="confirmChangesStopManageGiving" class="modal account-management" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content give-modal-content">
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12">
              <div class="border-bottom-small">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
                <h3>Confirm Your Changes</h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-body pb0">
        <div class="container-fluid" tabindex="-1" role="dialog">
          <div class="row row-no-spacing">
            <div class="col-md-12 col-xs-12">
              <div class="col-xs-12">
                <p class="text-danger">The recurring gift to this recipient will be stopped:</p>
              </div>

              <div class="repeating-row">
                <div class="col-xs-3">
                  <img src="http://placehold.it/100x100">
                </div>

                <div class="col-xs-9">
                  <h4 class="mb0">Jeanette Deaux</h4>
                  <small>#123456789</small>

                  <?php include('partial-gift-details-confirm.html'); ?>
                </div>
              </div>

              <div class="repeating-row">
                <div class="col-xs-12">
                  <p class="text-danger">The recurring gift to this recipient will be stopped:</p>
                </div>

                <div class="col-xs-3">
                  <img src="http://placehold.it/100x100">
                </div>

                <div class="col-xs-9">
                  <h4 class="mb0">Bruce Banner</h4>
                  <small>#123456789</small>

                  <?php include('partial-gift-details-confirm.html'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <div class="row row-no-spacing">
          <div class="col-xs-6">
            <a class="btn btn-default" data-dismiss="modal" data-target="#addPaymentMethodManageGiving">Cancel</a>
          </div>
          <div class="col-xs-6 text-right">
            <a class="btn btn-primary" href="/manage-giving/?success">Confirm Changes</a>
          </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->