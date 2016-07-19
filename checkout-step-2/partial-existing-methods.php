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
      <a href="" class="btn btn-default btn-xs" data-toggle="modal" data-target=".new-payment-method-modal"><i class="fa fa-plus"></i> Add New Payment Method</a>
    </div>                      
  </div><!-- // panel-body -->
</div>

<div class="modal fade new-payment-method-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <?php include('partial-new-method.php'); ?>
    </div>
  </div>
</div>