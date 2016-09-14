<div id="redirectSelectNewRecipient" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content give-modal-content">
      <?php modal_header('Search Missionairies and Ministries', 'Enter the name or account number of the recipient you would like to give to:', 'Search'); ?>

      <div class="modal-body">
        <div class="container-fluid" tabindex="-1" role="dialog">

          <div class="row row-no-spacing">
            <div class="col-xs-12">

            <!-- /////////////// Person list -->

            <?php 
            $i = 1;
            while($i <= 5) { ?>

            <div class="repeating-row select-recipient-row">
              <div class="col-sm-3 col-md-3">
                <img src="http://placehold.it/550x310" class="">
              </div>
              <div class="col-sm-5 col-md-5">
                <h4 class="recipient-name">Eli Adadevoh</h4>
                <span class="modal-meta">#334565</span>
              </div>
              <div class="col-sm-4 col-md-4">
                <div class="checkbox-right">
                  <label>Select <input type="radio" value=""></label>
                </div>
              </div>
            </div>

            <?php 
            $i++; 
            } 
            ?>

            <!-- /////////////// Person list -->

            </div>
          </div>
        </div>
      </div>

      <?php modal_footer('#redirectManageGiving', 'Back', '#redirectMakeChanges', 'Continue'); ?>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->