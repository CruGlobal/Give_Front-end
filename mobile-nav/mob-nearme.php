<form id="mob-nearme-search">
  <div class="form-group">
    <input type="text" class="form-control form-control-subtle text-center" name="mob-nearme" placeholder="FIND CRU NEAR ME">
  </div>
</form>

<script>
  $("form#mob-nearme").submit(function (e) {
    e.preventDefault();

    var query = $(this).find("input").val();
    window.location.href ="https://www.cru.org/locator/colleges.html?q=" + query;
  })
</script>