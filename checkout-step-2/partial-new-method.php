<div class="mb_x">
  <div class="row">
    <div class="col-md-6">
      <a href="#indivform" data-target="tab-indiv" class="tab-btn btn btn-lg btn-default btn-block on">
        Bank Account
        <img src="/assets/img/icon-bank.png" alt="Bank Account Icon"/>
      </a>
    </div>
    <div class="col-md-6">
      <a href="#orgform" data-target="tab-org" class="tab-btn btn btn-lg btn-default btn-block">
        Credit Card
        <img src="/assets/img/icon-cc.png" alt="Credit Card Icon"/>
      </a>
    </div>
  </div>
</div>

<div class="tab-indiv cart-tab show">

  <?php include('partial-bank.html'); ?>

</div>
<div class="tab-org cart-tab">

  <?php include('partial-creditcard.html'); ?>

</div>