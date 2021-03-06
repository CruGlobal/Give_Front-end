<?php

require_once('../_functions/function.php');

give_head();

?>

<div class="screenContent screenContent-alt" tabindex="-1" role="dialog">

  <div class="search-head text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">
          <h1>Search Results for <strong class="search-term">Joshua Starcher</strong> <span class="search-count">(31 results)</span></h1>
          <form>
            <div class="input-group">
              <input type="text" class="form-control form-control-subtle input-lg" value="Josh">
            </div>

            <button class="btn btn-primary submit-search">Search</button>
          </form>
          <div class="col-md-10 col-md-offset-1">
          <p>Your search results are listed below. To make a donation or get more information, select a result link. For more results, try searching again with a single keyword. Or, browse or search by <strong><a href="">staff</a>, <a href="">ministries</a> or <a href="">fund appeals</a>.</strong> If you still cannot find what you are looking for, you can call 1-888-278-7233 for assistance. </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-12">


      <div class="search-body">

        <section class="search-section">
          <div class="search-section-head">
            <h2>People</h2>
          </div>

          <div class="row search-result-block">
            <?php 
            $i = 1;
            while($i <= 20) { 
            ?>

            <div class="col-md-3 col-sm-4 col-xs-6">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Marty Dervandelo</a>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Senior Chang</a>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Gregory Ogavenhaven</a>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Terry Cruz</a>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Wong Fei Hung</a>
            </div>

            <?php
            $i++;
            }
            ?>
          </div>
        </section>

        <section class="search-section">
          <div class="search-section-head">
            <h2>Ministries</h2>
          </div>

          <div class="row search-result-block">
            <?php 
            $i = 1;
            while($i <= 2) { 
            ?>

            <div class="col-md-3 col-sm-4">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Marty Dervandelo</a>
            </div>
            <div class="col-md-3 col-sm-4">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Senior Chang</a>
            </div>
            <div class="col-md-3 col-sm-4">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Gregory Ogavenhaven</a>
            </div>
            <div class="col-md-3 col-sm-4">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Terry Cruz</a>
            </div>
            <div class="col-md-3 col-sm-4">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Wong Fei Hung</a>
            </div>

            <?php
            $i++;
            }
            ?>
          </div>
        </section>

        <section class="search-section">
          <div class="search-section-head big-words">
            <h2>Featured Opportunities</h2>
          </div>

          <div class="row search-result-block">
            <?php 
            $i = 1;
            while($i <= 2) { 
            ?>

            <div class="col-md-3 col-sm-4">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Marty Dervandelo</a>
            </div>
            <div class="col-md-3 col-sm-4">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Senior Chang</a>
            </div>
            <div class="col-md-3 col-sm-4">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Gregory Ogavenhaven</a>
            </div>
            <div class="col-md-3 col-sm-4">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Terry Cruz</a>
            </div>
            <div class="col-md-3 col-sm-4">
              <a href="#" class="result" title="#<?php echo $i*rand(321,451); ?>">Wong Fei Hung</a>
            </div>

            <?php
            $i++;
            }
            ?>
          </div>
        </section>

      </div>
        
      
      <!-- // Search Container -->
      </div>
    </div>
  </div>
</div>


<?php 

give_footer();

?>