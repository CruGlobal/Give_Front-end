<div class="mt give-home-slider-wrap">
  <div class="cycle-slideshow give-home-slider " 
      data-cycle-fx="fade" 
      data-cycle-timeout="3000"
      data-cycle-slides="> div"
      data-cycle-speed="1500"
      data-cycle-fx="none"
      data-cycle-pause-on-hover="true"

      data-cycle-prev=".prevControl"
      data-cycle-next=".nextControl"
      data-cycle-pager=".cycle-pager"

      >

      <?php
      $i =  1;
      while ($i <= 2) : 
      ?>
        <div class="slide">
            <div class="slide-image"><img src="/assets/img/slider-image-<?php echo $i; ?>.jpg"/></div>
            <div class="slide-caption">
              <h3><?php echo $i; ?> Awesome Slider Is Here! Woot!</h3>
              <a href="#" class="btn btn-primary">Click Here</a>
            </div>
        </div>
      <?php
      $i++;
      endwhile; 
      ?>

      <!-- cycle nav -->
  </div>
  <div class="cycle-nav">
    <span class="prevControl">prev</span>
    <div class="cycle-pager"></div>
    <span class="nextControl">next</span>
  </div>
</div>