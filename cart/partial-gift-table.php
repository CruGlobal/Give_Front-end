<table class="table giftsum-table">
  <thead>
    <tr>
      <th class="th-title-gift">Gift</th>
      <th class="th-title-frequency">Frequency</th>
      <th class="th-title-amount">Amount</th>
      <th class="th-title-actions"></th>
    </tr>
  </thead>
  <tbody>
    <?php echo cart_row('http://placehold.it/90x70', 'Jean Deaux', '34343434', 'Monthly', 'Starts on: 7/8/2019', '$50.00'); ?>
    <?php echo cart_row('http://placehold.it/90x70', 'Jean Deaux', '34343434', 'Monthly', 'Starts on: 7/8/2019', '$50.00'); ?>
  </tbody>
  <tfoot class="mobile-footer-persist">
    <tr>
      <td colspan="3" class="text-right">
        <span class="giftsum-line">Your Monthly Gift Total: <strong>$50.00</strong></span>
        <span class="giftsum-line">Your Single Gift Total: <strong>$100.00</strong></span>
      </td>
      <td class="checkout-cta">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
          Proceed to Checkout
        </button>
      </td>
    </tr>
  </tfoot>
</table>