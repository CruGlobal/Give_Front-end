<?php // Edit Body Copy ?>

<div class="reveal-modal-bg" style="display: block;"></div>
<!-- Modal -->
<div aria-labelledby="myModalLabel" class="modal fade" id="editProductTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog give-modal" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-body">
          <div class="form-group">
            <label>Receipt Title</label>
            <input type="text" class="form-control" value="Jason Chandler" disabled />
            <span class="help-block"><strong>Email <a href="mailto:fds@cru.org">fds@cru.org</a> to update/change.</strong></span>
          </div>

          <div class="form-group">
            <label>Give.Cru.org Title</label>
            <input type="text" class="form-control" />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary pull-right">Save &amp; Close</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div><!-- //modal-content -->
  </div><!-- //modal-dialog -->
</div><!-- //modal.fade -->

<script>
  tinymce.init({ 
    selector:'#product-text',
    height : 350
  });
</script>