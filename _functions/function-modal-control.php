<?php

function modal_header($title = '', $content = '', $search = '') {

?>

  <div class="modal-header">
      <div class="container-fluid">
          <div class="row">
              <div class="col-xs-12">
                  <div class="border-bottom-small">
                      <button type="button" 
                        class="close" 
                        data-dismiss="modal" 
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php 
                          if ($title) {
                            echo '<h3>' . $title . '</h3>';    
                          }

                          if ($content) {
                            echo '<p>' . $content . '</p>';    
                          }

                          if ($search) {
                            ?>
                            <form class="mt">
                              <div class="form-group">
                                <input type="text" value="Pete" class="form-control  form-control-subtle">
                              </div>
                            </form>
                            <?php
                          }
                        ?>
                  </div>
              </div>
          </div>
      </div>
  </div>

<?php

}

function modal_footer($back_action = '', $back_title = '', $fwd_action = '', $fwd_title = '') {

  if (!$back_title) {
    $back_title = 'Back';
  }

  if (!$back_action) {
    $back_action = '';
  }

  if (!$fwd_title) {
    $fwd_title = 'Continue';
  }

  if (!$fwd_action) {
    $fwd_action = '';
  }

?>

  <div class="modal-footer">
      <div class="row row-no-spacing">
          <div class="col-xs-6">
              <a class="btn btn-default"
                 data-toggle="modal"
                 data-target="<?php echo $back_action ?>"
                 data-dismiss="modal"><?php echo $back_title; ?></a>
          </div>
          <div class="col-xs-6 text-right">
              <a class="btn btn-primary" 
                data-dismiss="modal" 
                data-toggle="modal" 
                data-target="<?php echo $fwd_action; ?>"><?php echo $fwd_title; ?></a>
          </div>
      </div>
  </div>

<?php

}

?>