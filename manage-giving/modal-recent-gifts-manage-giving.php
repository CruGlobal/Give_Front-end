<div id="recentGiftsManageGiving" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content give-modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="border-bottom-small">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3>You've also given to these recipients recently.</h3>
                                <p>Would you like to add them to your recurring gifts?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <div class="container-fluid" tabindex="-1" role="dialog">
                    <div class="row row-no-spacing">
                        <div class="col-md-12 col-xs-12">

                            <!-- /////////////// Person list -->

                            <?php
                            $i = 1;
                            while($i <= 2) { ?>

                                <div class="repeating-row select-recipient-row">
                                    <div class="col-sm-3 col-md-3 mb">
                                        <img src="http://placehold.it/550x310" class="">
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <h4 class="recipient-name">Eli Adadevoh</h4>
                                        <span class="modal-meta">#334565</span>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <div class="checkbox-right">
                                            <label>Add <input type="checkbox" value=""></label>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                $i++;
                            }
                            ?>

                            <!-- /////////////// Person list -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row row-no-spacing">
                    <div class="col-xs-6">
                        <a class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#">Back</a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#newRecurringGiftManageGiving">Continue</a>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->