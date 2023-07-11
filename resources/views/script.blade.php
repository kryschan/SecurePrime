  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <script>$(document).ready(function(){
      var mouseX, mouseY;
      var ww = $( window ).width();
      var wh = $( window ).height();
      var traX, traY;
      $(document).mousemove(function(e){
        mouseX = e.pageX;
        mouseY = e.pageY;
        traX = ((4 * mouseX) / 570) + 40;
        traY = ((80 * mouseY) / 570) + 50;
        console.log(traX);
        $(".title").css({"background-position": traX + "%" + traY + "%"});
      });
    });

    $(window).scroll(function() {
            if ($(window).scrollTop() > 10) {
                $(".navbar").addClass("navbar-scrolled");
            } else {
                $(".navbar").removeClass("navbar-scrolled");
            }
        });
    </script>