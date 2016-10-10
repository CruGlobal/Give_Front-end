<form id="mob-search-form">
  <div class="form-group">
    <input type="text" class="form-control form-control-subtle text-center" name="mob-search" placeholder="ENTER KEYWORDS">
  </div>
</form>

<script>
  $("form#mob-search").submit(function (e) {
    e.preventDefault();

    var query = $(this).find("input").val();
    window.location.href ="https://give.cru.org/give/VirtualCommonLinks/process/search2?Query=" + query;
  })
</script>