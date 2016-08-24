<div id="signupModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content give-modal-content">
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12">
              <div class="border-bottom-small">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="text-center">Sign Up</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body pt0">
        <div class="container-fluid" tabindex="-1" role="dialog">
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <form>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="form-group">
                      <label for="first-name">First Name</label>
                      <input type="text" class="form-control form-control-subtle">
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="form-group">
                      <label for="last-name">Last Name</label>
                      <input type="text" class="form-control form-control-subtle">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control form-control-subtle">
                </div>
                
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control form-control-subtle">
                </div>

                <div class="form-group">
                  <label for="password-confirm">Confirm Password</label>
                  <input type="password" class="form-control form-control-subtle">
                </div>

                <div class="row">
                  <div class="col-xs-6">
                    <div class="form-group">
                      <label class="tab-btn btn btn-lg btn-default btn-block on">
                        <input type="radio" name="gender" id="male" autocomplete="off" checked>Male
                      </label>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="form-group">
                      <label class="tab-btn btn btn-lg btn-default btn-block">
                        <input type="radio" name="gender" id="female" autocomplete="off" checked>Female
                      </label>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <a data-toggle="modal" data-dismiss="modal" data-target="#signupModal" class="btn btn-block btn-primary">Sign Up</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->