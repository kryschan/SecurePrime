<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Products & Services</title>
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
    <div class="container-fluid bg-primary p-5 hero-header6 mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Motor and Car Insurance</h1>
            </div>
        </div>
    </div>
    
    <!-- Hero End -->


  <!-- Motorcar Start -->
    <div>
        <div class="col-lg-4 col-md-6 wow zoomIn box" data-wow-delay="0.3s">
            <div class="bg-light border-bottom border-5 border-primary rounded">
                <div class="position-relative p-5 just row gx-5">
                    <div class="col-lg-5 mt-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="img/car1.png" style="object-fit: contain;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                    <h3 class="mb-3 mission just">MOTOR CAR INSURANCE</h3>
                    <p>This provides financial protection to vehicle owners against physical damage to or loss of their vehicles and legal liability to third parties and/or passengers due to accident.  Extended perils or optional coverage are also available.</p>
                    <p>     
                        <ul class="whitefontcolor">
                        <li>Compulsory Third Party Liability(CTPL)</li>
                        <li>Own Damage/Theft</li>
                        <li>Excess Third Party Liability</li>
                        <li>Auto Personal Accident (Auto PA)</li>
                        <li>Extended Coverage for Acts of Nature (Flood, Typhoon, Hurricane Volcanic, Eruption, Strikes, Riots and Civil Commotion)</li>
                    </ul> </p>
                    </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="wrapper a wow zoomIn" style="margin-top: 50px;" data-wow-delay="0.3s">
        <a href="quote.html"><button class="buttonview1"><span>Quote Now</span></button></a>
    </div>
    <!-- Motorcar End -->

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
</body>

</html>