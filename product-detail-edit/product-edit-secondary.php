<?php // Edit Cover Photo ?>

<div class="reveal-modal-bg" style="display: block;"></div>
<!-- Modal -->
<div aria-labelledby="myModalLabel" class="modal fade" id="editSecondary" role="dialog" tabindex="-1">
  <div class="modal-dialog give-modal" role="document">
    <div class="modal-content">
      <div class="modal-header pt">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h3 class="modal-title text-center">Add Secondary Photo</h3>
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
              <input type="radio" id="secondary-thumb1" name="secondary-thumbnails" checked />
              <label for="secondary-thumb1"><img src="http://placehold.it/550x310" /></label>
            </div>
            <div class="cover-thumb">
              <a href="#" class="cover-thumb-remove"><i class="fa fa-trash-o"></i></a>
              <input type="radio" id="secondary-thumb2" name="secondary-thumbnails" />
              <label for="secondary-thumb2"><img src="http://placehold.it/550x310" /></label>
            </div>
            <div class="cover-thumb">
              <a href="#" class="cover-thumb-remove"><i class="fa fa-trash-o"></i></a>
              <input type="radio" id="secondary-thumb3" name="secondary-thumbnails" />
              <label for="secondary-thumb3"><img src="http://placehold.it/550x310" /></label>
            </div>
            <div class="cover-thumb">
              <a href="#" class="cover-thumb-remove"><i class="fa fa-trash-o"></i></a>
              <input type="radio" id="secondary-thumb4" name="secondary-thumbnails" />
              <label for="secondary-thumb4"><img src="http://placehold.it/550x310" /></label>
            </div>
            <div class="cover-thumb">
              <a href="#" class="cover-thumb-remove"><i class="fa fa-trash-o"></i></a>
              <input type="radio" id="secondary-thumb5" name="secondary-thumbnails" />
              <label for="secondary-thumb5"><img src="http://placehold.it/550x310" /></label>
            </div>
            <div class="cover-thumb">
              <a href="" class="no-cover"><i class="fa fa-ban" aria-hidden="true"></i> Remove Cover</a>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary pull-right">Add Photo</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div><!-- //modal-content -->
  </div><!-- //modal-dialog -->
</div><!-- //modal.fade -->