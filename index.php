<?php

require_once('./_functions/function.php');

give_head();

?>

<!-- TITLE BAR -->
  <div class="site-header"></div>
  <div class="section-title  u-centerBlock  masonry__item  col-md-12  col-xs-12  mb mt" >
    <h1 class="u-inlineBlock  banner-title  ">Give.Cru.Org</h1>
  </div>
  <div class="col-xs-12" >
    <div class="panel  panel-default">
      <div class="panel-heading">Sign In</div>
      <div class="panel-body">
        <ul class="listBare">
          <li>Coming soon</li>
        </ul>
      </div>
    </div>
  </div>
    <div class="col-xs-12" >
    <div class="panel  panel-default">
      <div class="panel-heading">Screens 6</div>
      <div class="panel-body">
        <ul class="listBare">
          <li><a a href="checkout-payment-method/index.html">add a new payment method</a></li>
          <li><a href="checkout-step-3-copy/index.html">Checkout - Step 3</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-xs-12" >
    <div class="panel  panel-default">
      <div class="panel-heading">Product Pages</div>
      <div class="panel-body">
        <ul class="listBare">
          <li><a href="/product-detail/">Product detail page with Gift Modal</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-xs-12" >
    <div class="panel  panel-default">
      <div class="panel-heading">Checkout Pages</div>
      <div class="panel-body">
        <ul class="listBare">
          <li><a href="/cart/">Cart</a></li>
          <li><a a href="/sign-in/">Sign In or Checkout As Guest</a></li>
          <li><a href="/checkout-step-1/">Checkout - Step 1</a></li>
          <li><a href="/checkout-step-2/">Checkout - Step 2</a></li>
          <li><a href="/checkout-step-3/">Checkout - Step 3</a></li>
          <li><a href="/thank-you/">Checkout - Thank You</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-xs-12" >
    <div class="panel  panel-default">
      <div class="panel-heading">Modals</div>
      <div class="panel-body">
        <ul class="listBare">
          <li><a data-toggle="modal" data-target="#signinModal">Sign In Modal (all of *.cru.org)</a></li>
          <li><a data-toggle="modal" data-target="#signupModal">Sign Up Modal (all of *.cru.org)</a></li>
          <li><a data-toggle="modal" data-target="#modalBenefits">Thank You Page Modal - Register Your Account</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div id="signinModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="container-fluid" tabindex="-1" role="dialog">
          <div class="col-md-12 col-xs-12">
            <div class="panel panel-plain">
              <div class="panel-body">
                <form>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-subtle" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control form-control-subtle" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                </form>
                <p class="text-center">Forgot your password? <a href="">Reset It</a></p>
                <div class="form-group">
                  <p class="text-center strike">
                    <span>Don't have an account?</span>
                  </p>
                  <button data-toggle="modal" data-target="#signupModal" type="submit" class="btn btn-block btn-default">Sign Up</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div id="signupModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
         <div class="screenContent" tabindex="-1" role="dialog">
          <div class="postArticle  layoutSingleColumn--wide   container-fluid">
            <div class="section-title  u-centerBlock  masonry__item  col-md-12  col-xs-12  mb">
              <h1 class="u-inlineBlock  banner-title">Sign Up</h1>
            </div>
            <div class="masonry__item  col-md-12  coverphoto  col-xs-12 container container-edge-small container-edge-extrasmall">
              <div>
                <div class="panel panel-plain panel-nomargin">
                  <div class="panel-body">
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="name" class="form-control form-control-subtle input-lg" id="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="name" class="form-control form-control-subtle input-lg" id="">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control form-control-subtle input-lg" id="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control form-control-subtle input-lg" id="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password</label>
                        <input type="password" class="form-control form-control-subtle input-lg" id="">
                      </div>
                      <div class="form-group">
                        <button class='btn btn-lg btn-third-inactive'>Male</button>
                        <button class='btn btn-lg btn-third'>Female</button>
                      </div>
                      <button type="submit" class="btn btn-lg btn-block btn-primary">
                        Sign Up
                      </button>
                     </form>
                  </div>
                </div>
              </div><!-- // panel -->
            </div>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <div id="modalBenefits" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="screenContent" tabindex="-1" role="dialog">
          <div class="postArticle  layoutSingleColumn--wide   container-fluid">
          <div class="section-title  u-centerBlock  masonry__item mb">
            <h1 class="u-inlineBlock  banner-title">Register Your Account for Online Access</h1>
          </div>
           <div class="masonry__item  col-md-12  coverphoto  col-xs-12 container container-edge-small container-edge-extrasmall">
            <div class="panel panel-margin-bottom">
              <div class="panel panel-plain panel-nomargin">
                <div class="panel-body">
                  <div class="modal-body">
                    <p><b>Benefits of registering your account include:</b></p>
                    <ul>
                      <li>Save time during checkout</li>
                      <li>Update your contact info</li>
                      <li>View your donation history</li>
                      <li>Manage your recurring gifts</li>
                      <li>Change your bank account or credit card information</li>
                    </ul>
                     <button type="submit" class="btn btn-lg btn-block btn-primary">Register Your Account</button>
                  </div>
                </div>
              </div>
            </div>
           </div>
         </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<?php

give_footer();

?>
