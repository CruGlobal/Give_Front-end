<div id="redirectConfirm" class="modal account-management" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content give-modal-content">
      <?php modal_header('Confirm Your Changes.', 'We will stop your gift to Bruce Banner and begin a new gift to Peter Dinklage. Please review your changes and click "Confirm Changes."'); ?>

      <div class="modal-body pb0">
        <div class="container-fluid" tabindex="-1" role="dialog">
          <div class="row row-no-spacing">
            <div class="col-xs-12">
              <div class="repeating-row">
                <div class="col-xs-12">
                  <p class="text-danger">The recurring gift to this recipient will be stopped:</p>
                </div>

                <div class="col-sm-3 col-md-3 mb">
                  <img src="http://placehold.it/550x310">
                </div>

                <div class="col-sm-9 col-md-9">
                  <h4 class="recipient-name">Jeanette Deaux</h4>
                  <span class="modal-meta">#123456789</span>
                </div>
              </div>

              <div class="repeating-row">
                <div class="col-xs-12">
                  <p class="text-danger">The following recurring gift will begin:</p>
                </div>

                <div class="col-sm-3 col-md-3 mb">
                  <img src="http://placehold.it/550x310">
                </div>

                <div class="col-sm-9 col-md-9">
                  <h4 class="recipient-name">Jeanette Deaux</h4>
                  <span class="modal-meta">#123456789</span>

                  <?php include('partial-gift-details-confirm.html'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php modal_footer('#redirectMakeChanges', 'Back', '#restartComplete', 'Confirm Changes'); ?>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->