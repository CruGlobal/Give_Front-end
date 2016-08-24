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

              <button class="btn btn-primary mt- submit-search">Search</button>
            </form>

            <p class="mt mb0">or search by:</p>
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
            <div class="panel panel-give-featured mt">
              <div class="panel-header">
                <h3>Featured</h3>
              </div>
              <div class="panel-body">
                <h3>Give Support to “JESUS” Film Teams</h3>
                <div class="give-featured-image">
                  <img src="https://give.cru.org/ucmcons/groups/public/@shared-dss-1-tg-6/documents/stillimage/~extract/CMS1_086059~1~staticrendition/crudss288.jpg" />
                </div>
                <p><strong>How wonderful is our God! He truly is the great healer of body...and spirit!</strong></p>
                <p>Myndert Bloem is a missionary from South Africa. He and his JESUS film team had been showing the film in several… <a href="">[read more]</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <form class="form-inline form-give-home-signin mt">
              <div class="form-group">
                <label for="exampleInputName2">Name</label>
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail2">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
              </div>
              <button type="submit" class="btn btn-default">Send invitation</button>
            </form>
            
            <div class="give-home-slider mt">
            </div>

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