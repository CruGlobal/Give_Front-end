<?php

require_once('../_functions/function.php');

give_head();

?>

<div class="screenContent" tabindex="-1" role="dialog">
  <div class="container">
    <div class="col-md-12">
      <div class="panel panel-margin-bottom">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-5  col-xs-12">

              <!-- Default panel contents -->
              <h2 title="Staff #5564666" class="mb0">

                Jean Deaux
                <a data-toggle="modal" data-target="#editProductTitle" class="edit-trigger edit-trigger-text inline"><i class="fa fa-pencil"></i></a>
              </h2>
              <p class="mt0">#5552424</p>

            </div>
            <div class="prod-edit-btns col-md-7 col-xs-12 text-right">
              <!-- Editing Buttons -->
              <button type="button" class="btn btn-secondary">
                Done Editing
              </button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#editProductOptions">
                Page Options
              </button>
              <button type="button" class="btn btn-default">
                Edit Page
              </button>
              <!-- \\ Editing Buttons -->

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Give a Gift
              </button>
              <!-- \\ Button trigger modal -->

            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-margin-bottom">
        <div class="panel-cover-wrap">
          <div href="" data-toggle="modal" data-target="#editCover">
            <div class="edit-trigger"><i class="fa fa-camera"></i></div>
            <img src="/assets/img/photo-placeholder.png" class="panel-cover-image"/>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div href="" data-toggle="modal" data-target="#editSecondary" class=" pull-right secondary-detail ml mb hidden-xs">
                <div class="edit-trigger"><i class="fa fa-camera"></i></div>
                <img src="/assets/img/photo-placeholder.png" class="" />
              </div>

              

              <h4>
                <a data-toggle="modal" data-target="#editProductDesc" class="edit-trigger edit-trigger-text"><i class="fa fa-pencil"></i></a>
                Great Spiritual Need
              </h4>
              <p>Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus.</p>
              <p>Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus.</p>
              <p class="signature-wrap">
                <a data-toggle="modal" data-target="#editSignature" class="edit-trigger edit-trigger-text"><i class="fa fa-pencil"></i></a>
                <img src="/assets/img/signature.png" class="signature-image" />
              </p>
              <p>
                <a data-toggle="modal" data-target="#editProductDesc" class="edit-trigger edit-trigger-text"><i class="fa fa-pencil"></i></a>
                Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus.
              </p>
              <p>
                <a data-toggle="modal" data-target="#editProductWebsite" class="edit-trigger edit-trigger-text"><i class="fa fa-pencil"></i></a>
                <label class="product-website-link">Website: <a href="">http://www.google.com/</a></label>
              </p>
              <p>
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                  Give a Gift
                </button>
              </p>
            </div>
          </div>
        </div>
      </div>

    

      <?php include( '../_includes/search.php' ); ?>
      
      <?php include( '../cart/partial-cart-related.php' ); ?>
    </div>
  </div>
</div>

<!-- Product Config. Modal -->
<?php include('../product-detail/product-configuration.php'); ?>
<!-- // Product Config. Modal End -->

<!-- Product Edit Cover. Modal -->
<?php include('product-edit-cover.php'); ?>
<!-- // Product Edit Cover. Modal End -->

<!-- Product Edit Secondary. Modal -->
<?php include('product-edit-secondary.php'); ?>
<!-- // Product Edit Secondary. Modal End -->

<!-- Product Edit Secondary. Modal -->
<?php include('product-edit-copy.php'); ?>
<!-- // Product Edit Secondary. Modal End -->

<!-- Product Edit Signature. Modal -->
<?php include('product-edit-signature.php'); ?>
<!-- // Product Edit Signature. Modal End -->

<!-- Product Edit Title. Modal -->
<?php include('product-edit-title.php'); ?>
<!-- // Product Edit Title. Modal End -->

<!-- Product Edit Website. Modal -->
<?php include('product-edit-website.php'); ?>
<!-- // Product Edit Website. Modal End -->

<!-- Product Edit Options. Modal -->
<?php include('product-edit-options.php'); ?>
<!-- // Product Edit Options. Modal End -->

<?php 

give_footer();

?>