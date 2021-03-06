<?php

require_once('../_functions/function.php');

give_head();

?>

<div class="screenContent" tabindex="-1" role="dialog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-margin-bottom">
          <div class="panel-body">
          

            <h2 class="mb_x">Your Profile</h2>


            <div class="row mb_x">
              <div class="col-lg-10 col-lg-offset-1">
                <div class="row">
                  <div class="col-md-6 col-lg-6 mb">
                    <h4 class="panel-title  border-bottom-small visible">Your Name</h4>

                      <ul class="list-unstyled">

                        <li>
                          
                          <div class="form-group is-required person-row">
                            <i class="fa fa-lock"></i>
                            <select class="form-control form-control-subtle prefix">
                              <option>Mr.</option>
                              <option>Mrs.</option>
                              <option>Dr.</option>
                            </select>
                            
                            <input type="text" class="form-control  form-control-subtle first" disabled value="Joshua">
                            <input type="text" class="form-control  form-control-subtle middle"  value="T">
                            <input type="text" class="form-control  form-control-subtle last" disabled  value="Starcher">

                            <select class="form-control form-control-subtle suffix">
                              <option></option>
                              <option>Jr.</option>
                              <option>III</option>
                            </select>
                          </div>

                        </li>

                        <li><a href="" class="">+ Add Your Spouse</a></li>

                        <li>
                          <strong>To change your first or last name, <a href="mailto:mail@cru.org">contact support.</a></strong>
                        </li>

                      </ul>


                    <h4 class="panel-title  border-bottom-small visible mt">Email Addresses</h4>

                      <div class="form-group is-required">
                          <label>(Spouse 1) Email</label>
                          <input type="email" name="email1" class="form-control  form-control-subtle">
                      </div>

                      <div class="form-group is-required">
                          <label>(Spouse 2) Email</label>
                          <input type="email" name="email2" class="form-control  form-control-subtle">
                      </div>

                    <h4 class="panel-title  border-bottom-small visible mt">Phone Numbers</h4>

                      <div class="form-group is-required phone-row">
                        <select class="form-control form-control-subtle">
                          <option>Home</option>
                        </select>
                        <input type="email" class="form-control  form-control-subtle">
                        <select class="form-control form-control-subtle">
                          <option>Amanda</option>
                        </select>
                        <a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                      </div>

                      <div class="form-group is-required phone-row">
                        <select class="form-control form-control-subtle">
                          <option>Home</option>
                        </select>
                        <input type="email" class="form-control  form-control-subtle">
                        <select class="form-control form-control-subtle">
                          <option>Amanda</option>
                        </select>
                        <a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                      </div>

                      <a href="" class="">+ Add Another Phone Number</a>


                  </div>

                  <div class="col-md-6 col-lg-5 col-lg-offset-1">
                    <h4 class="panel-title  border-bottom-small visible">Your Mailing Address</h4>

                    <?php include('../checkout-step-1/partial-mailing-address.html'); ?>
                  </div>

                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="border-bottom-small"></div>
                    <button type=submit class="btn btn-primary btn-lg pull-right">
                      Update My Profile
                    </button>
                  </div>
                </div>


              </div>
            </div>


          </div>
        </div>


      

        <?php include( '../_includes/search.php' ); ?>
        
        <?php include( '../cart/partial-cart-related.php' ); ?>
      </div>
    </div>
  </div>
</div>

<?php 

give_footer();

?>