<div class="panel panel-default tab-toggle">
  <div class="panel-title panel-heading">Your Payment Methods</div>
  <div class="panel-body">
    <div class="radio radio-method">
      <label>
        <input type="radio" name="chosen_method" id="" value="PaymentMethodID001" checked>
        <img src="/assets/img/cc-icons/visa-curved-128px.png" /><strong>Visa</strong> ending in ****3456 <small class="number">EXPIRES 02/2020</small>
      </label>
    </div>
    <div class="radio radio-method">
      <label>
        <input type="radio" name="chosen_method" id="" value="PaymentMethodID001" checked>
        <img src="/assets/img/cc-icons/american-express-curved-128px.png" /><strong>Visa</strong> ending in ****3456 <small class="number">EXPIRES 02/2020</small>
      </label>
    </div>
    <div class="radio radio-method">
      <label>
        <input type="radio" name="chosen_method" id="" value="PaymentMethodID001" checked>
        <img src="/assets/img/cc-icons/mastercard-curved-128px.png" /><strong>Debit</strong> ending in ****3456 <small class="number">EXPIRES 02/2020</small>
      </label>
    </div>
    <div class="radio radio-method">
      <label>
        <input type="radio" name="chosen_method" id="" value="PaymentMethodID001" checked>
        <img src="/assets/img/cc-icons/discover-curved-128px.png" /><strong>Visa</strong> ending in ****3456 <small class="number">EXPIRES 02/2020</small>
      </label>
    </div>

    <div class="mt">
      <a href="" class="btn btn-default btn-xs" 
        data-toggle="modal" 
        data-backdrop="static" 
        data-keyboard="false"
        data-target=".new-payment-method-modal"><i class="fa fa-plus"></i> Add New Payment Method</a>
    </div>                      
  </div><!-- // panel-body -->
</div>

<!-- New Payment Method Modal -->
<div class="modal fade new-payment-method-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-large">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <?php include('partial-new-method.php'); ?>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Add Payment Method</button>
        <button type="button" class="btn btn-link pull-right" data-dismiss="modal">Cancel &amp; Return</button>
      </div>
    </div>
  </div>
</div>
<!-- // New Payment Method Modal -->