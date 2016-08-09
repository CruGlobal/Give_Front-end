
<?php

require_once('../_functions/function.php');

give_head();

?>

<div class="screenContent" tabindex="-1" role="dialog">
  <div class="container">
    <div class="col-md-12">
      <div class="row row-eq-height mb">
        <div class="col-sm-8  col-xs-12">
          <div class="panel panel-full-height">
            <div class="panel-body">
              <!-- Giving Control -->
              <div class="row">
                <div class="col-md-7">
                  <div class="text-center">
                    <p>Your Year-to-Date Giving</p>
                    <h2><strong>$2000.00</strong></h2>
                    <p>As of 7/29/16</p>
                  </div>
                </div>
                <div class="col-md-5">
                  <a class="btn btn-block btn-primary">Edit Your Recurring Gifts</a>
                  <a class="btn btn-block btn-primary mb- mt-">Give a 1-Time Gift</a>
                  <a class="btn btn-block btn-primary">Stop or Restart a Gift</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4  col-xs-12">
          <div class="panel panel-full-height">
            <div class="panel-body">
              <h3 class="mb0">Howard &amp; Maria Stark</h3>
              <p>#000090</p>

              <div class="form-group">
                <label class="">Mailing Address:</label>
                <p>
                1234 Sesame Street, Apt 306<br/>
                Orlando, FL 22345-2234
                </p>
              </div>

              <div class="form-group mb0">
                <label class="">Contact Phone:</label>
                <p class="mb0">
                (407) 555-1212
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-margin-bottom">
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-12">

              <h2>Your Giving</h2>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default">Recipient View</button>
                <button type="button" class="btn btn-default">Monthly View</button>
              </div>

              <!-- Filters -->
              <div class="btn-group">
                <button type="button" 
                  class="btn btn-default dropdown-toggle" 
                  data-toggle="dropdown" 
                  aria-haspopup="true" 
                  aria-expanded="false">
                  Filters <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Your Recent Gifts</a></li>
                  <li><a href="#">All Gifts</a></li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-margin-bottom">
        <div class="panel-body">

          <!-- Recipient Row -->
            <div class="row row-eq-height">
              <div class="col-sm-2 col-full-height">
                <img src="http://placehold.it/550x310" />
              </div>
              <div class="col-sm-7 col-full-height">
                <h4 class="mb0">Darth Luke Solo</h4>
                <small>#89075769</small>

                <div class="row">
                  <div class="col-sm-3">
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
                  <div class="col-sm-3">
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
                  <div class="col-sm-4">
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
              <div class="col-sm-3 col-full-height">
                <a class="btn btn-primary btn-block">Give a New Gift</a>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 text-right">
                <a class="btn btn-link p0 m0" 
                  role="button" 
                  data-toggle="collapse" 
                  href="#details_1" 
                  aria-expanded="false" 
                  aria-controls="details_1">
                  Details +
                </a>
              </div>
            </div>

            
            <div class="collapse" id="details_1">
              <h4 class="border-top-small pl--">Recent Gift History</h4>
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
                          <img class="method-logo hidden-xs" src="/assets/img/cc-icons/visa-curved-128px.png" />
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
                          <img class="method-logo hidden-xs" src="/assets/img/cc-icons/visa-curved-128px.png" />
                          <strong>Visa</strong> ends in ****3456 
                          <div class="expiring">
                            <small class="number">EXP<span class="hidden-xs">IRES</span> 02/<span class="hidden-xs">20</span>19</small>
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
                          <img class="method-logo hidden-xs" src="/assets/img/cc-icons/visa-curved-128px.png" />
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
                          <img class="method-logo hidden-xs" src="/assets/img/cc-icons/visa-curved-128px.png" />
                          <strong>Visa</strong> ends in ****3456 
                          <div class="expiring">
                            <small class="number">EXP<span class="hidden-xs">IRES</span> 02/<span class="hidden-xs">20</span>19</small>
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

      <?php include( '../_includes/search.php' ); ?>
      
    </div>
  </div>
</div>


<?php 

give_footer();

?>