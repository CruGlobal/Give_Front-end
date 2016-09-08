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
            Desigs
            </div>
            <div role="tabpanel" class="tab-pane" id="peamounts">
            Amounts
            </div>
            <div role="tabpanel" class="tab-pane" id="peother">
            other
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