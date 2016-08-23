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
                <input type="text" class="form-control form-control-subtle">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
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
          <a href="" title="" >
            <img src="" alt="" /><!-- offset top by -30px -->
          </a>
        </div>
        <div class="hero-lead-second">
          <a href="" title="" >
            <img src="" alt="" /><!-- offset top by -30px -->
          </a>
        </div>
        <div class="hero-lead-third">
          <a href="" title="" >
            <img src="" alt="" /><!-- offset top by -30px -->
          </a>
        </div>
      </div>
    </section>
  </div>


<?php

give_footer();

?>