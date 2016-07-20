<?php

// Generate Cart Row
function cart_row($row_image, 
                  $row_name = 'Jean Deaux', 
                  $row_acctnum = '34343434',
                  $row_frequency = 'Monthly',
                  $row_starts_on = 'Starts on: 7/8/2019',
                  $row_amt = '$50.00',
                  $row_size = 'full') {

  $row_data = '
    <tr class="giftsum-gift-row">
      <td class="td-gift">
        <img src="' . $row_image . '" class="giftsum-profile pull-left" />
        <span class="giftsum-person giftsum-title">' . $row_name . '</span>
        <span class="giftsum-accountnum giftsum-detail"><span class="hidden-xs">Ministry </span>#' . $row_acctnum . '</span>
      </td>
      <td class="td-frequency">
        <span class="giftsum-frequency giftsum-title">' . $row_frequency . '</span>
        <span class="giftsum-date giftsum-detail">' . $row_starts_on . '</span>
      </td>';

  if (($row_size == 'full') || ($row_size == 3)) { 
    $row_data .= '
      <td class="td-amount">
        <span class="giftsum-about giftsum-title">' . $row_amt . '</span>
        <span class="giftsum-detail"><span class=" visible-xs">Gift Amount</span></span>
      </td>';
  }

  if ($row_size == 'full') {
    $row_data .= '
      <td class="td-actions giftsum-actions">
        <a href="" class="btn btn-link btn-giftsum-action">Edit</a>
        <span class="sep"> | </span>
        <a href="" class="btn btn-link btn-giftsum-action"><i class="fa fa-close"></i> Remove</a>
      </td>';
  }
  $row_data .= '</tr>';
  return $row_data;
}


// Generate Cart Summary Table
function cart_table($cols = 'full', $destination = '#', $showfooter = true) {
  $cart_table = '
  <table class="table giftsum-table">
    <thead>
      <tr>
        <th class="th-title-gift">Gift</th>
        <th class="th-title-frequency">Frequency</th>
        <th class="th-title-amount">Amount</th>';
        if ($cols == 'full') { $cart_table .= '<th class="th-title-actions"></th>'; }
  $cart_table .= '
      </tr>
    </thead>
    <tbody>
  ';
    $cart_table .= cart_row('http://placehold.it/90x70', 'Jean Deaux', '34343434', 'Monthly', 'Starts on: 7/8/2019', '$50.00', $cols);
    $cart_table .= cart_row('http://placehold.it/90x70', 'Jean Deaux', '34343434', 'Monthly', 'Starts on: 7/8/2019', '$50.00', $cols);
    $cart_table .= '</tbody>';

    if ($cols == 'full') {
      $cart_table .= '
        <tfoot class="mobile-footer-persist">
          <tr>
            <td colspan="4" class="text-right">
              <div class="checkout-cta pull-right">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                  Proceed to Checkout
                </button>
              </div>
              <span class="giftsum-line">Your Monthly Gift Total: <strong>$50.00</strong></span>
              <span class="giftsum-line">Your Single Total: <strong>$100.00</strong></span>
            </td>
          </tr>
        </tfoot>';
      } elseif ($cols == 3) {
        if ($showfooter) {
          $cart_table .= '
            <tfoot class="mobile-footer-persist">
              <tr>
                <td colspan="3" class="text-right">
                  <div class="checkout-cta pull-right">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Proceed to Checkout
                    </button>
                  </div>
                  <span class="giftsum-line">Your Monthly Gift Total: <strong>$50.00</strong></span>
                  <span class="giftsum-line">Your Single Total: <strong>$100.00</strong></span>
                </td>
              </tr>
            </tfoot>';
        }
      } elseif ($cols == 2) {
        if ($showfooter) {
          $cart_table .= '
            <tfoot>
              <tr>
                <td colspan="2" class="text-right">
                  <span class="giftsum-line">Monthly Gift Total: <strong>$50.00</strong></span>
                  <span class="giftsum-line">Single Total: <strong>$100.00</strong></span>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <a href="/cart/" class="btn  btn-subtle  u-floatRight  mt">Edit Cart</a>
                </td>
              </tr>
            </tfoot>';
        }
      }

  $cart_table .= '</table>';
  return $cart_table;
}

?>