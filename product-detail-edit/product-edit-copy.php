<?php // Edit Body Copy ?>

<div class="reveal-modal-bg" style="display: block;"></div>
<!-- Modal -->
<div aria-labelledby="myModalLabel" class="modal fade" id="editProductDesc" role="dialog" tabindex="-1">
  <div class="modal-dialog give-modal" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-body">
          <div class="form-group">
            <textarea id="product-text"></textarea>
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