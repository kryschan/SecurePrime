<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Certificates</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    @include("header")
</head>

<body>
    <!-- Navbar Start -->
    @include("nav")
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 mb-5 hero-header2">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Business Certificates</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Certificates Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 ">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100 pic" src="img/Businesspermit.png" alt="">
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Business Permit</h3>
                        <a class="btn " href="img/Businesspermit.png" data-lightbox="service"><button class="buttonview"><span>&#128269</span></button></a>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">

                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="img/Certificateofincorporation.png" alt="">
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Certificate of Incorporation</h3>
                        <a class="btn " href="img/Certificateofincorporation.png" data-lightbox="service"><button class="buttonview"><span>&#128269</span></button></a>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="img/Certofregistration.png" alt="">
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Certificate of Registration</h3>
                        <a class="btn " href="img/Certofregistration.png" data-lightbox="service"><button class="buttonview"><span>&#128269</span></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Certificates End -->
    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container pt-5">
            <div class="row g-5">
                
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Room 202, 2nd Floor, ISECURE Building, 17-T Serrano Street ,Brgy. Marulas, District 2 City of Valenzuela, Third District, National Capital Region(NCR) 1440</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>(02) 8292-0508 <br>666-3883</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>src.secureprime@isecure.com.ph</p>
                </div>
                <div class="col-lg-3 col-md-6 follow">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex follow">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.facebook.com/profile.php?id=100091642766269"><i class="fab fa-facebook-f fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-light py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0"><a class="text-white" href="#">Secure Prime Insurance Agency Corp.</a> © 2023</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    @include("script")
    <script>
    // Get the modal
      var modal = document.getElementById("myModal");

      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById("myImg");
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      }

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
      modal.style.display = "none";
}
</script>
</html>