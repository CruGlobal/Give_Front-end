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
            <div class="col-sm-6  col-xs-12">

              <!-- Default panel contents -->
              <h2 title="Staff #5564666" class="mb0">Jean Deaux</h2>
              <p class="mt0">#5552424</p>

            </div>
            <div class="col-sm-6  col-xs-12 text-right">
              <!-- Editing Buttons -->
              <button type="button" class="btn btn-secondary btn-lg">
                Done Editing
              </button>
              <button type="button" class="btn btn-default btn-lg">
                Edit Page
              </button>
              <!-- \\ Editing Buttons -->

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                Give a Gift
              </button>
              <!-- \\ Button trigger modal -->

            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-margin-bottom">
        <div class="panel-cover-wrap">
          <a href="" data-toggle="modal" data-target="#editCover">
            <img src="http://fpoimg.com/1920x1080" class="panel-cover-image"/>
          </a>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <a href="" data-toggle="modal" data-target="#editSecondary" class=" pull-right secondary-detail ml mb hidden-xs">
                <img src="http://fpoimg.com/1920x1080" class="" />
              </a>

              <a href="" data-toggle="modal" data-target="#editProductDesc">Edit Text</a>
              <h4>Great Spiritual Need</h4>
              <p>Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                elit. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus.</p>
              <p>
              <p>Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                elit. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus.</p>
              <p>
              <p>Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                elit. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus.</p>
              <p>
              <p>
                <label class="product-website-link">Website: <a href="">http://www.google.com/</a></label>
              </a>
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

<?php 

give_footer();

?>