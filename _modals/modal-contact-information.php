<div class="modal" id="checkoutModal1" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content give-modal-content">
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12">
              <div class="border-bottom-small">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                <h3 class="text-center">
                  Contact Information
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="container-fluid" role="dialog" tabindex="-1">
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="mb_x">
                <div class="row">
                  <div class="col-md-6">
                    <a class="tab-btn btn btn-default btn-block on" data-target="tab-indiv" href="#indivform">Give as an Individual</a>
                  </div>
                  <div class="col-md-6">
                    <a class="tab-btn btn btn-default btn-block" data-target="tab-org" href="#orgform">Give as an Organization</a>
                  </div>
                </div>
              </div>
              <div class="tab-indiv cart-tab show">
                <?php include('checkout-step-1/partial-individual-form.html'); ?>
              </div>
              <div class="tab-org cart-tab">
                <?php include('checkout-step-1/partial-organization-form.html'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->