<?php $i = 1; ?>
<?php while ($i <= 3) { ?>
  <div class="panel panel-margin-bottom recent-recipient-row">
    <div class="panel-body">

      <!-- Recipient Row -->
      <div class="row">
        <div class="col-md-2 col-full-height col-sm-12 col-xs-12 mb">
          <img class="full-width" src="http://placehold.it/550x310"/>
        </div>
        <div class="col-sm-12 col-md-7 col-full-height">
          <h4 class="mb0">Darth Luke Solo</h4>
          <small>#89075769</small>

          <div class="row">
            <div class="col-sm-3 col-md-3">
              <div class="form-group mb0">
                <label>Year-to-date:</label>
                <ul class="list-unstyled list-recurring">
                  <li>
                    <h4>$1350.00</h4>
                    <span class="meta">Jul 6, 2016</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-md-3">
              <div class="form-group mb0">
                <label>Most Recent:</label>
                <ul class="list-unstyled list-recurring">
                  <li>
                    <h4>$1350.00</h4>
                    <span class="meta">Jul 6, 2016</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="form-group mb0">
                <label>Recurring Gifts:</label>
                <ul class="list-unstyled list-recurring">
                  <li>
                    <h4>$1350.00 Monthly</h4>
                    <span class="meta">Next Gift: Jul 6, 2016</span>
                  </li>
                  <li>
                    <h4>$1350.00 Daily</h4>
                    <span class="meta">Next Gift: Aug 6, 2016</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-3 col-full-height split-row">
          <a class="btn btn-primary btn-block split-col-left">Give a New Gift</a>
          <a class="btn btn-subtle btn-block mt- collapse-indicator collapsed split-col-right"
             role="button"
             data-toggle="collapse"
             href="#details_<?php echo $i; ?>"
             aria-expanded="false"
             aria-controls="details_<?php echo $i; ?>">
            Details
          </a>
        </div>
      </div>

      <div class="collapse mt" id="details_<?php echo $i; ?>">
        <h4 class="border-top-small pl--">Recent Gift History</h4>
        <div class="table-responsive">
          <table class="table table-striped table-payment-history">
            <thead>
            <tr>
              <th class="date">Date</th>
              <th class="amount">Amount</th>
              <th class="method">Payment Method</th>
              <th class="status">Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="date">July 6, 2016</td>
              <td class="amount">$50.00</td>
              <td class="method">
                <div class="radio-method">
                  <label>
                    <img class="method-logo hidden-xs"
                         src="/assets/img/cc-icons/visa-curved-128px.png"/>
                    <strong>Visa</strong> ends in ****3456
                  </label>
                </div>
              </td>
              <td class="status status-complete">Complete</td>
            </tr>
            <tr>
              <td class="date">July 6, 2016</td>
              <td class="amount">$50.00</td>
              <td class="method">
                <div class="radio-method">
                  <label>
                    <img class="method-logo hidden-xs"
                         src="/assets/img/cc-icons/visa-curved-128px.png"/>
                    <strong>Visa</strong> ends in ****3456
                    <div class="expiring">
                      <small class="number">EXP<span class="hidden-xs">IRES</span>
                        02/<span class="hidden-xs">20</span>19
                      </small>
                    </div>
                  </label>
                </div>
              </td>
              <td class="status status-pending">Pending</td>
            </tr>
            <tr>
              <td class="date">July 6, 2016</td>
              <td class="amount">$50.00</td>
              <td class="method">
                <div class="radio-method">
                  <label>
                    <img class="method-logo hidden-xs"
                         src="/assets/img/cc-icons/visa-curved-128px.png"/>
                    <strong>Visa</strong> ends in ****3456
                  </label>
                </div>
              </td>
              <td class="status status-complete">Complete</td>
            </tr>
            <tr>
              <td class="date">July 6, 2016</td>
              <td class="amount">$50.00</td>
              <td class="method">
                <div class="radio-method">
                  <label>
                    <img class="method-logo hidden-xs"
                         src="/assets/img/cc-icons/visa-curved-128px.png"/>
                    <strong>Visa</strong> ends in ****3456
                    <div class="expiring">
                      <small class="number">EXP<span class="hidden-xs">IRES</span>
                        02/<span class="hidden-xs">20</span>19
                      </small>
                    </div>
                  </label>
                </div>
              </td>
              <td class="status status-pending">Pending</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
  <?php $i++;
} ?>