<?php

function cart_row($row_image, 
                  $row_name = 'Jean Deaux', 
                  $row_acctnum = '34343434',
                  $row_frequency = 'Monthly',
                  $row_starts_on = 'Starts on: 7/8/2019',
                  $row_amt = '$50.00') {

  return '
    <tr class="giftsum-gift-row">
      <td class="td-gift">
        <img src="' . $row_image . '" class="giftsum-profile pull-left" />
        <span class="giftsum-person giftsum-title">' . $row_name . '</span>
        <span class="giftsum-accountnum giftsum-detail"><span class="hidden-xs">Ministry </span>#' . $row_acctnum . '</span>
      </td>
      <td class="td-frequency">
        <span class="giftsum-frequency giftsum-title">' . $row_frequency . '</span>
        <span class="giftsum-date giftsum-detail">' . $row_starts_on . '</span>
      </td>
      <td class="td-amount">
        <span class="giftsum-about giftsum-title">' . $row_amt . '</span>
        <span class="giftsum-detail"><span class=" visible-xs">Gift Amount</span></span>
      </td>
      <td class="td-actions giftsum-actions">
        <a href="" class="btn btn-link btn-giftsum-action">Edit</a>
        <span class="sep"> | </span>
        <a href="" class="btn btn-link btn-giftsum-action"><i class="fa fa-close"></i> Remove</a>
      </td>
    </tr>
  ';

}

?>