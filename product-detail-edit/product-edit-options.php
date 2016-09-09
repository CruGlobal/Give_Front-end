<?php // Edit Body Copy ?>

<div class="reveal-modal-bg" style="display: block;"></div>
<!-- Modal -->
<div aria-labelledby="myModalLabel" class="modal fade" id="editProductOptions" role="dialog" tabindex="-1">
  <div class="modal-dialog give-modal" role="document">
    <div class="modal-content">



        <div class="modal-body">
          


          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#pedesignation" aria-controls="pedesignation" role="tab" data-toggle="tab">Parent Designation</a></li>
            <li role="presentation"><a href="#peamounts" aria-controls="peamounts" role="tab" data-toggle="tab">Custom Giving Amounts</a></li>
            <li role="presentation"><a href="#peother" aria-controls="peother" role="tab" data-toggle="tab">Other</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="pedesignation">
              <div class="form-group">
                <label>Parent Designation</label>
                <input type="text" class="form-control" />
              </div>
              <div class="form-group">
                <label>Organization ID</label>
                <div><strong>8Y-YYTIY</strong></div>
                <span class="help-block"><strong>Email <a href="mailto:fds@cru.org">fds@cru.org</a> to update/change.</strong></span>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="peamounts">
            
                    <table class="table table-hover table-condensed">
                      <thead>
                        <tr>
                          <th>Title (Description.)</th>
                          <th>Amount</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="text" class="form-control" placeholder="$50.00" /></td>
                          <td><input type="number" class="form-control" placeholder="50" /></td>
                          <td><a href="" class="btn-link btn"><i class="fa fa-minus-circle"></i></a></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control" /></td>
                          <td><input type="number" class="form-control" /></td>
                          <td><a href="" class="btn-link btn"><i class="fa fa-minus-circle"></i></a></td>
                        </tr>
                        <tr>
                          <td><input type="text" class="form-control" /></td>
                          <td><input type="number" class="form-control" /></td>
                          <td><a href="" class="btn-link btn"><i class="fa fa-minus-circle"></i></a></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="3">
                            <a href=""><i class="fa fa-plus-circle"></i> Add another giving amount</a>
                          </td>
                        </tr>
                      </tfoot>
                    </table>


            </div>
            <div role="tabpanel" class="tab-pane" id="peother">
            
            <p>Additional settings can be changed by sending email to <strong><a href="mailto:fds@cru.org">fds@cru.org</a></strong></p>

            <ul>
              <li>Designation Active/Inactive Status</li>
              <li>Donor Receipt Titles</li>
            </ul>

            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary pull-right">Save &amp; Close</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>

    </div><!-- //modal-content -->
  </div><!-- //modal-dialog -->
</div><!-- //modal.fade -->

<script>
  tinymce.init({ 
    selector:'#product-text',
    height : 350
  });
</script>