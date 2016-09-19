<div id="whatTodDoManageGiving" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content give-modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="border-bottom-small">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3>What would you like to do?</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <form>
                                <div class="form-group">
                                    <label class="radio">
                                        <input value="restartManageGiving" type="radio" name="stop-restart-option">Restart my giving
                                    </label>
                                    <label class="radio">
                                        <input value="changeManageGiving" type="radio"name="stop-restart-option">Change my giving to a new payment method
                                    </label>
                                    <label class="radio">
                                        <input value="redirectManageGiving" type="radio"name="stop-restart-option">Redirect a gift to a new recipient
                                    </label>
                                    <label class="radio">
                                        <input value="stopGiftManageGiving" type="radio" name="stop-restart-option" checked="checked">Stop a gift
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row row-no-spacing">
                    <div class="col-xs-6">
                        <a class="btn btn-default" data-dismiss="modal">Cancel</a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a class="btn btn-primary" id="fwdbtn" data-dismiss="modal" data-toggle="modal" data-target="#stopGiftManageGiving">Continue</a>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
$(function() {

    function radio_val() {
        var selected = $('input[name=stop-restart-option]:checked').val();
        $('#fwdbtn').attr('data-target', '#' + selected);
    }

    $('input[name=stop-restart-option]').change(function() {
        radio_val();
    });

});
</script>