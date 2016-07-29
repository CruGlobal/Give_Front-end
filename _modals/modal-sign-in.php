<div id="signinModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content modal-with-header">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center">Sign In</h3>
      </div>
      <div class="modal-body">
        <div class="container-fluid" tabindex="-1" role="dialog">
          <div class="col-md-12 col-xs-12">
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
            <p class="text-center">Forgot your password? <a data-toggle="modal" data-dismiss="modal" data-target="#resetModal" >Reset It</a></p>
            <div class="form-group">
              <p class="text-center strike">
                <span>Don't have an account?</span>
              </p>
              <a data-toggle="modal" data-dismiss="modal" data-target="#signupModal" class="btn btn-block btn-default">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->