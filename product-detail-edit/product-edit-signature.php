<?php // Edit Cover Photo ?>

<div class="reveal-modal-bg" style="display: block;"></div>
<!-- Modal -->
<div aria-labelledby="myModalLabel" class="modal fade" id="editSignature" role="dialog" tabindex="-1">
  <div class="modal-dialog give-modal" role="document">
    <div class="modal-content">
      <div class="modal-header pt">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h3 class="modal-title text-center">Add Signature</h3>
      </div>
      <form>
        <div class="modal-body">
          <div class="upload-drag-target p mb">
            <div class="form-group text-center">
              <label>Select a File to Upload</label>
              <input type="file" class="form-control">
            </div>
          </div>

          <div class="give-thumbs-container clearfix">
            <div class="cover-thumb">
              <a href="#" class="cover-thumb-remove"><i class="fa fa-trash-o"></i></a>
              <input type="radio" id="signature-thumb1" name="signature-thumbnails" checked />
              <label for="signature-thumb1"><img src="/assets/img/signature.png" /></label>
            </div>
            <div class="cover-thumb">
              <a href="#" class="cover-thumb-remove"><i class="fa fa-trash-o"></i></a>
              <input type="radio" id="signature-thumb2" name="signature-thumbnails" />
              <label for="signature-thumb2"><img src="http://placehold.it/550x310" /></label>
            </div>
            <div class="cover-thumb">
              <a href="#" class="cover-thumb-remove"><i class="fa fa-trash-o"></i></a>
              <input type="radio" id="signature-thumb3" name="signature-thumbnails" />
              <label for="signature-thumb3"><img src="http://placehold.it/550x310" /></label>
            </div>
            <div class="cover-thumb">
              <a href="#" class="cover-thumb-remove"><i class="fa fa-trash-o"></i></a>
              <input type="radio" id="signature-thumb4" name="signature-thumbnails" />
              <label for="signature-thumb4"><img src="http://placehold.it/550x310" /></label>
            </div>
            <div class="cover-thumb">
              <a href="#" class="cover-thumb-remove"><i class="fa fa-trash-o"></i></a>
              <input type="radio" id="signature-thumb5" name="signature-thumbnails" />
              <label for="signature-thumb5"><img src="http://placehold.it/550x310" /></label>
            </div>
            <div class="cover-thumb">
              <a href="" class="no-cover"><i class="fa fa-ban" aria-hidden="true"></i> Remove Cover</a>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary pull-right">Add Cover</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div><!-- //modal-content -->
  </div><!-- //modal-dialog -->
</div><!-- //modal.fade -->