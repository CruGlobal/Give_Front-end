          <!-- Slick Cart Related -->
          <div class="panel">
            <div class="panel-body">

              <h3 class="panel-name">You May Also Be Interested In</h3>
              <div id="related-carousel" class="slick-related-carousel">

                <?php 
                  $i = 1; 
                  while ($i <= 9) :

                  echo '
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="related-image">
                        <a href="" class="related-link"><img src="http://placehold.it/550x310"/></a>
                      </div>
                      <div class="panel-body">
                        <h3><a href="" class="panel-title">Help Start a Cru on a campus Near You '. $i .'</a></h3>
                        <p>Optional Description Would be IN this spot here, but it\'s optional.</p>
                        <a href="" class="u-linkClean btn-default-border  icon--readNext">Read More </a>
                      </div>
                      <div class="panel-box">
                        <a href="" class="btn btn-block btn-default">Give a gift</a>
                      </div>
                    </div>
                  </div>
                  ';

                  $i++;
                  endwhile; 
                ?>

              </div>

            </div>
          </div>
          <!-- // Slick Cart Related -->