<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StartVoting</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>-->

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <script src="js/jquery.scrollify.js"></script>

  <!-- Stylesheets and CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="style.css?version=6" />

  <!-- Cancel out JScroll 
  <script src="js/scroll.js"></script>  -->

  <!-- Popover -->

    
 
  
  

  <script>
    $(function() {
      $.scrollify({
        section: ".panel",
        scrollbars: false,
        before: function(i, panels) {
          var ref = panels[i].attr("data-section-name");
          $(".pagination .active").removeClass("active");
          $(".pagination").find('a[href="# + ref + "]').addClass("active");
        
},
      });




      /*

       Tip: The two click events below are the same:

       $(".pagination a").on("click",function() {
       $.scrollify.move($(this).attr("href"));
       });

       */
      $(".pagination a").on("click", $.scrollify.move);

      $("#link-1").click(function(e) {
        e.preventDefault()
        $.scrollify.move(2);
      });
      $("#link-2").click(function(e) {
        e.preventDefault()
        $.scrollify.move(1);
      });
      $("#link-3").click(function(e) {
        e.preventDefault()
        $.scrollify.move(1);
      });
      $("#link-4").click(function(e) {
        e.preventDefault()
        $.scrollify.move(2);
      });
      $("#link-5").click(function(e) {
        e.preventDefault()
        $.scrollify.move(3);
      });
      $("#link-6").click(function(e) {
        e.preventDefault()
        $.scrollify.move(4);
      });
      $("#link-7").click(function(e) {
        e.preventDefault()
        $.scrollify.move(5);
      });

    });
  </script>


  <!-- Put Google Analytics here -->

  <!-- End Analytics -->

</head>