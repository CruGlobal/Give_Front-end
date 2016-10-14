<!-- The primary header -->


<header id="desktop-navigation" class="gh-desk-nav">

    <div class="container">

      <a href="" title="Cru" class="gh-desk-logo"></a>

      <ul class="gh-desk-nav-tree col-level-1">
            <li class="has-children" data-promo-img="" data-promo-link="">
                <a href="">Train and Grow</a>

                <div class="children-container">
                  <ul class="col-level-2 on">
                      <li class="has-children" data-promoimg="" data-promolink="">
                          <a href="">Level 2 a</a>
                          <ul class="col-level-3 ">
                              <li><a href="">Level 3 a</a></li>
                              <li><a href="">Level 3 a</a></li>
                          </ul>
                      </li>
                      <li class="has-children">
                          <a href="">Level 2 b</a>
                          <ul class="col-level-3">
                              <li><a href="">Level 3 b</a></li>
                              <li><a href="">Level 3 b</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href="">Level 2 b</a>
                      </li>
                  </ul>

                  <div class="gh-desk-promo">
                      Promo Bucket
                  </div>
                </div>
            </li>

            <li class="has-children" data-promo-img="" data-promo-link="">
                <a href="">Communities</a>

                <div class="children-container">
                  <ul class="col-level-2 on">
                      <li class="has-children" data-promoimg="" data-promolink="">
                          <a href="">Level 2 a</a>
                          <ul class="col-level-3 ">
                              <li><a href="">Level 3 a</a></li>
                              <li><a href="">Level 3 a</a></li>
                          </ul>
                      </li>
                      <li class="has-children">
                          <a href="">Level 2 b</a>
                          <ul class="col-level-3">
                              <li><a href="">Level 3 b</a></li>
                              <li><a href="">Level 3 b</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href="">Level 2 b</a>
                      </li>
                  </ul>

                  <div class="gh-desk-promo">
                      Promo Bucket
                  </div>
                </div>
            </li>
        </ul>

      <?php include "desktop-search-sign-in.html" ?>

</header>

<?php include("sub-navigation.php") ?>

<div class="search">
  <div class="container">
    <form action="" id="search">
      <input type="text" placeholder="search" class="search-input">
    </form>
  </div>
</div>





<script>
  $(function () {
    var level1WithChildren = $(".col-level-1 > li.has-children");
    var level2WithChildren = $('.col-level-2 li.has-children');
    var level2NoChildren = $('.col-level-2 > li').not('.has-children');

    var searchBox = $(".search");
    var searchIcon = $(".search-icon span");
    var subNav = $("#sub-navigation");
    var subNavSearchIcon = $(".sub-nav-search-icon span");

    level1WithChildren.mouseenter(function () {
      $(this).addClass('open-menu');
      $('.gh-desk-promo').addClass('gh-offset-2');
    });

    level1WithChildren.mouseleave(function () {
      $(this).removeClass('open-menu');
    });

    level2WithChildren.mouseenter(function () {
          $("> a", this).next().addClass('on');
          $('.gh-desk-promo').addClass('gh-offset-3');
      });

    level2NoChildren.mouseenter(function () {
          $("> a", this).next().removeClass('on');
          $('.gh-desk-promo').removeClass('gh-offset-3');
      });

    level2WithChildren.mouseleave(function () {
          $("> a", this).next().removeClass('on');
          $('.gh-desk-promo').removeClass('gh-offset-2');
      });

    function toggleSearchBar () {
      searchBox.toggleClass("open");

      if (searchBox.hasClass("open")) {
        if ($("#sub-navigation.out")) {
          searchBox.addClass("sub-nav-open");
        }

        searchBox.find("input").focus();
        searchIcon.removeClass("search-icon-off");
        searchIcon.addClass("search-icon-on");
        $("body").addClass("body-scroll-lock");
      } else {
        searchIcon.removeClass("search-icon-on");
        searchIcon.addClass("search-icon-off");
        $("body").removeClass("body-scroll-lock");
      }
    }

    searchIcon.click(function () {
      toggleSearchBar();
    });

    $(".search input").click(function () {
      $(this).addClass("black-text");
    });

    $("form#desktop-search").submit(function (e) {
      e.preventDefault();

      var query = $(this).find("input").val();
      window.location.href ="https://give.cru.org/give/VirtualCommonLinks/process/search2?Query=" + query;
    });

    $("#desktop-navigation .cart").click(function () {
        var dropdown = $(this).find(".dropdown");

        $(this).find('.dropdown').on('shown.bs.dropdown', function(){
            $("body").addClass("body-scroll-lock");
        });

        $(this).find('.dropdown').on('hidden.bs.dropdown', function(){
            $("body").removeClass("body-scroll-lock");
        });
    });

    $("body").click(function (e) {
      var targetClass = $(e.target).attr("class");

      if ($(".search.open")) {
        if ((targetClass !== "search open") && (targetClass !== "#desktop-search") && (targetClass !== "search-input black-text") && (targetClass !== "search-icon") && (targetClass !== "sub-nav-search-icon") && (targetClass !== "search-icon-off") && (targetClass !== "search-icon-on")) {
          searchBox.removeClass("open");
          $("body").removeClass("body-scroll-lock");
          searchIcon.removeClass("search-icon-on");
          searchIcon.addClass("search-icon-off");
        }
      }
    });

    var subNavigation = $("#sub-navigation");
    var navHeight = subNavigation.offset().top;

    $(window).on("scroll", function () {
      if ($(window).scrollTop() > navHeight) {
        subNavigation.addClass("out");
      }

      if ($(window).scrollTop() < navHeight) {
        subNavigation.removeClass("out");
      }
    });

    subNavSearchIcon.click(function () {
      toggleSearchBar();
    })
  });
</script>
<!-- End primary header -->

<!-- Switch Nav Type -->
<a class="btn btn-default" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;" onclick="switchNav()">Switch Navigation Profile</a>
<script>
  function switchNav () {
    var on = $(".toggle-sign-signed-in-not-for-production-on");
    var off = $(".toggle-sign-signed-in-not-for-production-off");

    on.addClass("toggle-sign-signed-in-not-for-production-off").removeClass("toggle-sign-signed-in-not-for-production-on");
    off.addClass("toggle-sign-signed-in-not-for-production-on").removeClass("toggle-sign-signed-in-not-for-production-off");
  }
</script>