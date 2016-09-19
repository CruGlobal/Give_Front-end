<div id="redirectMakeChanges" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content give-modal-content">
      <?php modal_header('Make Changes To Your Recurring Gifts', 'Please review the amount, payment method, and frequency of this gift below.'); ?>

      <div class="modal-body pb0">
        <div class="container-fluid" tabindex="-1" role="dialog">
          <div class="row row-no-spacing">
            <div class="col-md-12 col-xs-12">

              <div class="repeating-row">
                <div class="col-md-3 col-sm-3 mb">
                  <img src="http://placehold.it/550x310">
                </div>

                <div class="col-md-9 col-sm-9">
                  <h4 class="recipient-name">Bruce Banner</h4>
                  <span class="modal-meta">#123456789</span>

                  <?php include('partial-gift-details.html'); ?>

                  <p>You have selected <strong>quarterly</strong> as a frequency.
                    Please tell us in which months you would like your quarterly gifts to be made
                  </p>

                  <div class="form-group mb0">
                    <label class="radio">
                      <input value="1" type="radio">January, April, July, October
                    </label>
                    <label class="radio">
                      <input value="2" type="radio">February, May, August, November
                    </label>
                    <label class="radio">
                      <input value="3" type="radio">March, June, September, December
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <?php modal_footer('#redirectSelectNewRecipient', 'Back', '#redirectConfirm', 'Continue'); ?>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->