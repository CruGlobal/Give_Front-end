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
            <div class="col-sm-6  col-xs-12">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-lg u-floatRight" data-toggle="modal" data-target="#myModal">
                Give a Gift
              </button>
              <!-- Button trigger modal -->

            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-margin-bottom">
        <div class="panel-cover-wrap">
          <img src="http://fpoimg.com/1920x1080" class="panel-cover-image"/>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <img src="http://fpoimg.com/1920x1080" class="secondary-detail pull-right ml mb hidden-xs" />
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

<?php 

give_footer();

?>