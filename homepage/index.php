<?php

require_once('../_functions/function.php');

give_head();

?>

  <div class="screenContent" tabindex="-1" role="dialog">
    <section id="give-hero">
      <div class="hero-container container">
        <div class="hero-image">
          <div class="hero-content">
            <h1>Start a New Gift</h1>
            <h4>Search by Name, Keyword or ID</h4>

            <form>
              <div class="input-group">
                <input type="text" class="form-control form-control-subtle input-lg">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
                </span>
              </div>

              <button class="btn btn-primary mt- ps_x">Search</button>
            </form>

            <p class="mt">or search by:</p>
          </div>
        </div>
      </div>

      <div class="hero-leads container">
        <div class="hero-lead-first">
          <a href="#" title="" >
            <div class="image-container">
            <h3>People</h3>
            </div>
          </a>
        </div>
        <div class="hero-lead-second">
          <a href="#" title="" >
            <div class="image-container">
            <h3>Ministries</h3>
            </div>
          </a>
        </div>
        <div class="hero-lead-third">
          <a href="#" title="">
            <div class="image-container">
            <h3>Featured Opportunities</h3>
            </div>
          </a>
        </div>
      </div>
    </section>


    <section id="give-featured">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            Featured
          </div>
          <div class="col-md-7 col-md-offset-1">
            Slider
          </div>
        </div>
      </div>
    </section>

    <section id="give-integrity">
    </section>

    <section id="give-creditibility">
    </section>

  </div>


<?php

give_footer();

?>