<html>

<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/assets/css/styles.css">

<script src="//malsup.github.com/jquery.cycle2.js"></script>
</head>

<body>


<div class="cycle-slideshow give-home-slider" 
    data-cycle-fx="fade" 
    data-cycle-timeout="5000"
    data-cycle-slides="> div"
    data-cycle-speed="1500"
    data-cycle-fx="none"
    data-cycle-pause-on-hover="true"
    >
    <?php
    $i =  1;
    while ($i <= 3) : 
    ?>
      <div class="slide">
          <div class="slide-image"><img src="/assets/images/intern-ops.jpg"/></div>
          <div class="slide-caption">
            <h3><?php echo $i; ?> Awesome Slider Is Here! Woot!</h3>
            <a href="#" class="btn btn-primary">Click Here</a>
          </div>
      </div>
    <?php
    $i++;
    endwhile; 
    ?>

</div>


</body>

</html>