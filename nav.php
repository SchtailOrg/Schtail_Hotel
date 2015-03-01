<nav>
  <ul>
    <li>test.php</li>
    <li>test2.php</li>
    <li>weather.php</li>
  </ul>
</nav>


<script>
  var loader = $("<div class='loader'><div class='circle'><div class='arrow'><div><div></div>");
  $("nav").on("click", "li", function(){
    $("body").append(loader);
    $.ajax({
      url: "sites/"+$(this).text(),
      success: function(r){
        history.pushState({}, '', $(this).text());
        $("main").html(r)
        loader.remove();
      }
    });
  });
</script>
