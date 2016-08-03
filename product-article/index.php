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
              <h2 title="Staff #5564666">Jean Deaux</h2>

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
          <div class="container-fluid postArticle">
            <div class="row">
              <div class="postContent  layoutSingleColumn  pb_x  pt">
                <h4>Great Spiritual Need</h4>
                <p>Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum
                    faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                    lacinia odio sem nec elit. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida
                    at eget metus.</p>
                <blockquote class="pullquote">
                    <em>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                        justo sit amet risus.</em>
                </blockquote>
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget
                    risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum
                    faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit.</p>
                <figure>
                    <iframe src="https://player.vimeo.com/video/29950141?title=0&byline=0&portrait=0" width="700"
                            height="393" frameborder="0" webkitallowfullscreen mozallowfullscreen
                            allowfullscreen></iframe>
                    <figcaption class="imageCaption  default">
                        <span class="image-credit">The Lorem Family: Joe, Jane, Jimmy and Jenny</span>
                    </figcaption>
                </figure>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante
                    venenatis dapibus posuere velit aliquet. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis
                    euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                    mus.</p>

                <blockquote>
                    "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante
                    venenatis dapibus posuere velit aliquet."
                </blockquote>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante
                    venenatis dapibus posuere velit aliquet. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis
                    euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                    mus.</p>

                <p>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        Give a Gift
                    </button>
                </p>
              </div>
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


<div class="masonry__item  col-md-12">
    <div class="panel panel-margin-bottom">
        <div class="panel-body">
            <div class="row">
                
            </div>
        </div>
    </div>
</div>
