<?php

require_once('../_functions/function.php');

give_head();

?>

<div class="screenContent" tabindex="-1" role="dialog">
  <section class="is-top">
    <div class="container">
      <h1>Search Results for <strong>Josh</strong> <em>(143 results)</em></h1>
      <!-- Search Box -->

      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
          <form>
            <div class="input-group is-search-main"">
              <input type="search" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">Search</button>
              </span>
            </div><!-- /input-group -->
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="is-tabs">
    <ul class="nav nav-tabs nav-search-tabs text-center">
      <li role="presentation"><a href="#">Explore</a></li>
      <li role="presentation" class="active"><a href="#">Giving</a></li>
      <li role="presentation"><a href="#">Missions Trips</a></li>
    </ul>
  </section>


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
        <div class="panel">
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-3">
                <div class="is-advanced">
                  <form>
                    <h4>Advanced Search</h4>
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="search" class="form-control input-subtle" />
                    </div>

                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="search" class="form-control input-subtle" />
                    </div>

                    <button class="btn btn-primary btn-block">Search</button>
                  </form>
                </div>
              </div>

              <div class="col-sm-9"> 
                <?php
                $i=1;
                while ($i <= 10) { 
                ?>
                <div class="is-row clearfix">
                  <a href="/product-detail/" class="is-row-thumb">
                    <img src="http://placehold.it/550x310" />
                  </a>
                  <div class="is-row-meta">
                    <a href="#">
                      <span class="is-row-title">Susan Yarvandalandovich</span>
                      <span class="is-row-num">#4567761</span>
                    </a>
                  </div>
                  <div class="is-row-actions">
                    <a href="#" class="btn btn-sm btn-primary">Give a Gift</a>
                    <a href="#" class="btn btn-sm btn-subtle">Details</a>
                  </div>
                </div>
                <?php
                $i++;
                }
                ?>
              </div>
            </div>

          </div>
        </div>
      
      <!-- // Search Container -->
      </div>
    </div>
  </div>
</div>


<?php 

give_footer();

?>