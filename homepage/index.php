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
            <form class="form-inline form-give-home-signin mt pb border-bottom-small text-center">
              <div class="form-group">
                <span class="btn btn-default form-heading">EXISTING USERS</span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-default">Sign In</button>
            </form>
            
            <div class="give-home-slider mt">
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="give-integrity">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>Our Commitment to Financial Integrity</h1>
            <p class="mb0">Cru is supported by people like you who want to help the Body of Christ
              grow through evangelism and discipleship.</p>
            <p><strong>Your gifts help:</strong></p>
          </div>

          <div class="col-xs-8 col-xs-offset-2">
            <div class="row">
              <div class="col-md-4 integrity-col win">
                <p>Win people to faith <br> in Jesus Christ</p>
              </div>

              <div class="col-md-4 integrity-col build">
                <p>Build them <br> in their faith</p>
              </div>

              <div class="col-md-4 integrity-col send">
                <p>Send them to win <br> and build others</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section id="give-creditibility">
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
          <div class="credibility-col credibility-security">
            <h4>Credibility</h4>
            <p>Cru is a charter member of the Evangelical Council for Financial Accountability (EFCA) and follows the highest ethical standards. You can also download a copy of our annual report.</p>

            <h4>Security</h4>
            <p>You can give with confidence knowing that your transaction is secure.</p>
          </div>

          <div class="credibility-col credibility-logos">
            <img src="/assets/images/ECFA%20logo.png">
            <img src="/assets/images/digicert%20logo.png">
          </div>

          <div class="credibility-col trust">
            <h4>Trust</h4>
            <p>Your trust is important to us, so a full description of Cru's fundraising policies and guidelines are available online for you to view anytime.</p>
            <p>We invite you to read more about our commitment to good stewardship.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php

give_footer();

?>