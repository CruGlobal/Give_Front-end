<div class="reveal-modal-bg" style="display: block;"></div>
<!-- Modal -->
<div aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-large give-modal" role="document">
    <div class="modal-content">
      <div class="modal-header" style="display: none;">
        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
        <div class="modal-title"></div>
      </div>
      <div class="give-modal-header">
        <div class="row">
          <div class="col-sm-6">
            <h4 class="modal-title" id="myModalLabel">
              Give a Gift
            </h4>
          </div>
          <div class="col-sm-6">
            <div class="give-modal-recipient">
              <img class="recipient-image" src="http://placehold.it/550x310"> <span class="recipient-title">Martha Washington</span> <span class="recipient-id">#33333777</span>
            </div>
          </div>
        </div>
      </div>
      <form>
        <div class="modal-body pt0 p">
          <div class="container-fluid">
            <div class="panel panel-default panel-plain mt">
              <div class="panel panel-default give-modal-panel">
                <h4 class="panel-title border-bottom-small">
                  Gift Amount
                </h4>
                <div class="panel-body pt0">
                  <!-- @todo SHOW THIS RADIO SET IF CUSTOM MINISTRY AMOUNTS EXIST -->
                  <div class="radio radio-custom-amount">
                    <label><input checked="checked" id="" name="custom_option" type="radio" value="Custom001"> Custom Ministry Option 1</label>
                  </div>
                  <div class="radio radio-custom-amount">
                    <label><input id="" name="custom_option" type="radio" value="Custom002"> Custom Ministry Option 2</label>
                  </div>
                  <div class="radio radio-custom-amount">
                    <label><input id="" name="custom_option" type="radio" value="Custom003"> Custom Ministry Option 3</label>
                  </div><!-- @todo SHOW THIS RADIO SET IF NO MINISTRY CUSTOM AMOUNTS EXIST -->
                  <div data-toggle="buttons">
                    <label class="btn btn-radio active"><input checked name='amount' type="radio"><span class="number">$50</span></label>
                    <label class="btn btn-radio"><input name='amount' type="radio"><span class="number">$100</span></label>
                    <label class="btn btn-radio"><input name='amount' type="radio"><span class="number">$250</span></label>
                    <label class="btn btn-radio"><input name='amount' type="radio"><span class="number">$500</span></label>
                    <label class="btn btn-radio"><input name='amount' type="radio"><span class="number">$1000</span></label>
                    <label class="btn btn-radio"><input name='amount' type="radio"><span class="number">$5000</span></label>
                    <label class="btn btn-default-form u-textLeft custom-amount">
                      <input name='amount' type="radio">
                      <div class="form-group form-group-default u-inline">
                        <input class="form-control form-control-subtle number" min="0" name="$" step="any" type="text" value="$0">
                      </div>
                    </label>
                  </div>
                </div><!-- // panel-body -->
              </div><!-- // panel -->
              <div class="panel panel-default give-modal-panel">
                <h4 class="panel-title border-bottom-small mt">
                  Gift Frequency
                </h4>
                <div class="panel-body">
                  <div data-toggle="buttons">
                    <label class="btn btn-radio btn-wide active"><input checked name='frequency' type="radio"> <span class="giftsum-about giftsum-title">Single Gift</span></label>
                    <label aria-controls="configRecurring" 
                      aria-expanded="false" 
                      class="btn btn-radio btn-wide" 
                      data-target="#configRecurring" 
                      data-toggle="collapse"><input name='frequency' type="radio"> <span>Monthly</span></label>
                    <label aria-controls="configRecurring" 
                      aria-expanded="false" 
                      class="btn btn-radio btn-wide" 
                      data-target="#configRecurring" 
                      data-toggle="collapse"><input name='frequency' type="radio"> <span>Quarterly</span></label>
                    <label aria-controls="configRecurring" 
                      aria-expanded="false" 
                      class="btn btn-radio btn-wide" 
                      data-target="#configRecurring" 
                      data-toggle="collapse"><input name='frequency' type="radio"> <span>Annually</span></label>
                  </div>
                </div><!-- // panel-body -->
              </div><!-- // panel -->
              <div class="collapse" id="configRecurring">
                <div class="panel panel-default give-modal-panel">
                  <h4 class="panel-title border-bottom-small mt0 pt-">
                    Transaction Date for Recurring Gifts
                  </h4>
                  <div class="panel-body pt0">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Month</label>
                          <div class="form-group">
                            <select class="form-control form-control-subtle" id="suffix">
                              <option value="January">January</option>
                              <option value="February">February</option>
                              <option value="March">March</option>
                              <option value="April">April</option>
                              <option value="May">May</option>
                              <option value="June">June</option>
                              <option value="July">July</option>
                              <option value="August">August</option>
                              <option value="September">September</option>
                              <option value="October">October</option>
                              <option value="November">November</option>
                              <option value="December">December</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-group">
                          <label>Day</label>
                          <div class="form-group">
                            <select class="form-control form-control-subtle" id="suffix">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- // panel-body -->
                </div><!-- // panel -->
              </div>
              <div class="panel panel-default give-modal-panel">
                <h4 class="panel-title border-bottom-small mt">
                  Optional Comments
                </h4>
                <div class="panel-body pt0">
                  <ul class="list-unstyled">
                    <li>
                      <a class="commentLink" href="#">Send a Message to {Recipient}</a> 
                      <textarea class="staff-comments give-modal-comments" name="staff-comments" rows="3"></textarea>
                    </li>
                    <li>
                      <a class="commentLink" href="#">Special Handling Instructions for Processing the Gift</a> 
                      <textarea class="cru-comments give-modal-comments" name="cru-comments" rows="3"></textarea>
                    </li>
                  </ul>
                </div><!-- // panel-body -->
              </div><!-- // panel -->
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <button class="btn btn-default btn-md btn-block-xs" data-dismiss="modal" type="button">Cancel &amp; Return</button>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
            <button class="btn btn-md btn-primary btn-block-xs" type="button">Add to Gift Cart</button>
          </div>
        </div>
      </form>
    </div><!-- //modal-content -->
  </div><!-- //modal-dialog -->
</div><!-- //modal.fade -->