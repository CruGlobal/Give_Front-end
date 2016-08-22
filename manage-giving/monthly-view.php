<?php

require_once('../_functions/function.php');

give_head();

?>

  <div class="screenContent" tabindex="-1" role="dialog">
    <div class="container">
      <div class="col-md-12">
        <?php
        if (isset($_GET['success'])) {
          echo '<div class="alert alert-danger" role="alert">Your changes were successful.</div>';
        }
        ?>

        <?php include("partial-user-profile-panel.html"); ?>
        <?php include("partial-your-giving-views-panel.html"); ?>
        <?php include("partial-monthly-view.php") ?>

        <?php include('../_includes/search.php'); ?>

      </div>
    </div>
  </div>


<?php

include("partial-includes.php");

give_footer();

?>