 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Secure Prime Insurance Agency Corp.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
    @include('header')
</head>

    
<body>
    <!-- Navbar Start -->
    @include('nav')
    <!-- Navbar End -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 ">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
            <div class="carousel-inner">
                <div class="carousel-item active"> 
                    <img class="w-100" src="img/buildings.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">We maximized your money's worth!</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Secure Prime Insurance Agency Corp.</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/hero_header.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Invest in your future and protect what matters most</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Avail to our Product and Services Now!</h1>
                            <div class="row">
                                <div class="col-4 col-md-4">
                                    <a href="fireinsurance.html" class="btn btn-primary animated slideInLeft">Read More</a>
                                </div>
                                <div class="col-4 col-md-4">
                                    <a href="motorcarinsurance.html" class="btn btn-primary animated slideInLeft">Read More</a>
                                </div>
                                <div class="col-4 col-md-4">
                                    <a href="engineeringinsurance.html" class="btn btn-primary animated slideInLeft">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/hero_header_1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">We maximized your money's worth!</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Avail to our Product and Services Now!</h1>
                            <div class="row">
                                <div class="col-4 col-md-4">
                                    <a href="marineandaviationinsurance.html" class="btn btn-primary animated slideInLeft">Read More</a>
                                </div>
                                <div class="col-4  col-md-4">
                                    <a href="liabilityinsurance.html" class="btn btn-primary animated slideInLeft">Read More</a>
                                </div>
                                <div class="col-4  col-md-4">
                                    <a href="bonds.html" class="btn btn-primary animated slideInLeft">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/CardHolding1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Avail now and get a discount!</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Secure Power Card</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Avail Now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Services Start -->
    {{-- <div class="container-fluid my-5 py-5 wow zoomIn  " data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 sr-1" style="color: black;">Our Excellent Product and Services</h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-4 col-md-9 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded brd-0" style="margin-top: 30px;">
                    <div class="position-relative p-5 brd-0">
                        <img class="img-fluid rounded-top w-100" src="img/fireissurance1.png" alt="">
                        <h3 class="mb-3">Fire Insurance</h3>
                        <p id="jus" style="margin-top: 25px;">We cover loss or damage to the Insured's properties caused by fire and/or natural calamities like typhoon, lightning, flood, earthquake....</p>
                        <a href="fireinsurance.html">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded brd-0" style="margin-top: 30px;">
                    <div class="position-relative p-5 brd-0">
                        <img class="img-fluid rounded-top w-100" src="img/cars.png" alt="">
                        <h3 class="mb-3">Motor & Car Insurance</h3>
                        <p id="jus" style="margin-top: 40px;">This provides financial protection to vehicle owners against physical damage to or loss...</p>
                        <a href="motorcarinsurance.html">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded brd-0" style="margin-top: 30px;">
                    <div class="position-relative p-5 brd-0">
                        <img class="img-fluid rounded-top w-100" src="img/engineer2.png" alt="">
                        <h3 class="mb-3">Engineering Insurance</h3>
                        <p id="jus">This provides complete protection against loss of or damage to plant, mechanical,...<br></p>
                        <a href="engineeringinsurance.html">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded brd-0" style="margin-top: 30px;">
                    <div class="position-relative p-5 brd-0">
                        <img class="img-fluid rounded-top w-100" src="img/marine.png" alt="">
                        <h3 class="mb-3">Marine & Aviation Insurance</h3>
                        <p id="jus">This indentifies the owner and/or assignee of a vessel...<br></p>
                        <a href="marineandaviationinsurance.html">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded brd-0" style="margin-top: 30px;">
                    <div class="position-relative p-5 brd-0">
                        <img class="img-fluid rounded-top w-100" src="img/lia.png" alt="">
                        <h3 class="mb-3">Liability Insurance</h3>
                        <p id="jus">This protects the Insured against the financial consequences of accidents...<br></p>
                        <a href="liabilityinsurance.html">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div> --}}
    <!-- Services End -->

    <!-- Power Card Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 75px;">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h1 class="display-5 mb-0">Avail our Powercards to gain discount</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <div class="mix">
                            <img class="mageh img-fluid rounded-top" src="img/silver_1.jpg" alt="" style="width: 250px; height: 160px;">
                            </div>
                            <br><br>
                            <h3 class="text-white">Secure Power Card Silver</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">₱</small>2,500<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">.00 per/Anum</small>
                            </h1>
                        </div>
                       <div class="text-center py-5">
                        <p class="border-top border-light mb-2 pb-2">Lost of life due to Accidental Death</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of life fue to Accidental Death</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of Life due to Unprovoked Murder & Assault</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of life due to Motorcycling Accident</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of Life (Group Year Renewable Term-GYTR)</p>
                            <p class="border-bottom border-light mb-2 pb-2">Accidental Disablement</p>
                            <p class="border-bottom border-light mb-2 pb-2">Accidental Death Burial Assistance</p>
                            <p class="border-bottom border-light mb-2 pb-2">Hospital Income Benefit due to Accident (Max of 7days per policy year)</p>
                            <p class="border-bottom border-light mb-2 pb-2">Emergency Hospitalization due to Accident (Emergency Room Only)</p>
                        
                            <p class="mb-2 pb-2">You can only Save <strong> ₱ 6.85/ Day</strong><br> and you can get up to <strong> ₱ 200,000.00 </strong></p>
                          
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <div class="mix">
                             
                            <img class="img-fluid rounded-top" src="img/Platinum_1.jpg" alt="" style="width: 250px; height: 160px;" data-toggle="modal" data-target="#exampleModal">
                              
                        </div>
                            <br><br>
                            <h3 class="text-white">Secure Power Card Platinum</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">₱</small>3,100<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">.00 per/Anum</small>
                            </h1>
                        </div>
                       <div class="text-center py-5">
                        <p class="border-top border-light mb-2 pb-2">Lost of life due to Accidental Death</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of life fue to Accidental Death</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of Life due to Unprovoked Murder & Assault</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of life due to Motorcycling Accident</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of Life (Group Year Renewable Term-GYTR)</p>
                            <p class="border-bottom border-light mb-2 pb-2">Accidental Disablement</p>
                            <p class="border-bottom border-light mb-2 pb-2">Accidental Death Burial Assistance</p>
                            <p class="border-bottom border-light mb-2 pb-2">Hospital Income Benefit due to Accident (Max of 7days per policy year)</p>
                            <p class="border-bottom border-light mb-2 pb-2">Emergency Hospitalization due to Accident (Emergency Room Only)</p>
                            <p class="mb-2 pb-2">You can only Save <strong> ₱ 8.85/ Day</strong><br> and you can get up to <strong> ₱ 300,000.00 </strong></p>
                          
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <div class="mix">
                           <img class="img-fluid rounded-top" src="img/Gold_1.jpg" alt="" style="width: 250px; height: 160px;">
                        </div>
                            <br><br>
                            <h3 class="text-white">Secure Power Card Gold</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">₱</small>3,800<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">.00 per/Anum</small>
                            </h1>
                        </div>
                       <div class="text-center py-5">
                        <p class="border-top border-light mb-2 pb-2">Lost of life due to Accidental Death</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of life fue to Accidental Death</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of Life due to Unprovoked Murder & Assault</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of life due to Motorcycling Accident</p>
                            <p class="border-bottom border-light mb-2 pb-2">Lost of Life (Group Year Renewable Term-GYTR)</p>
                            <p class="border-bottom border-light mb-2 pb-2">Accidental Disablement</p>
                            <p class="border-bottom border-light mb-2 pb-2">Accidental Death Burial Assistance</p>
                            <p class="border-bottom border-light mb-2 pb-2">Hospital Income Benefit due to Accident (Max of 7days per policy year)</p>
                            <p class="border-bottom border-light mb-2 pb-2">Emergency Hospitalization due to Accident (Emergency Room Only)</p>
                        
                            <p class="mb-2 pb-2">You can only Save <strong> ₱10.41/ Day</strong><br> and you can get up to <strong> ₱ 400,000.00 </strong></p>
                          
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Read More</a>
                    </div>
                </div>
            </div>
            <br>
            {{-- <div class="container-main bg-light">
                <div class="content">
                    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                        <h1> Secure Power Card Benefits</h1>
                    </div>
                    <div class="row">
                    <div class="arrow-container col align-self-start">
                        <p class="parrow">Loss of life due to Accidental Death</p>
                        <p class="parrow">Loss of life due to Unprovoked Murder & Assult</p>
                        <p class="parrow">Loss of life due to Motorcycling Accident</p>
                        <p class="parrow">Loss of life (Group Year Renewable Term-GYTR)</p>
                        <p class="parrow">Accidental Disamblement</p>
                        
                    </div>
                    <div class="arrow-container col align-self-start">
                        <p class="parrow">Accidental Death Bruial Assistance</p>
                        <p class="parrow">Hospital Income Benefit due to Accident (Max. of 7 days per policy year)</p>
                        <p class="parrow">Emegency Hospitalization due to Accident (Emergency Room only)</p>
                        <p class="parrow">PREMIUM PER YEAR</p>
                        <p class="parrow">SAVINGS PER DAY FOR A YEAR</p>
                    </div>
                    </div>    
                </div>
                <br>
                <!--<a href="" class="btn btn-primary py-2 px-4 position-absolute buttom-100 start-50 translate-middle">Avail Now</a>-->
            </div> --}}
            <br>
            <div class="container-main">
                <div class="content">
                    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                        <h1>Coverage of Secure Power Card</h1>
                    </div>
                    
                    <div class="arrow-container">
                        <p class="parrow">Twenty-four hour, 365 days-a-year coverage against death due to any cause, accident or sickness, worldwide in the course of business or pleasre</p>
                        <p class="parrow">Commercial Flying while riding as a fare paying passenger only</p>
                        <p class="parrow">Animal bites coverage limited to cat, dog and snake only. Mosquito/insect bites are not covered.</p>
                        <p class="parrow">Accidental Food Poisoning</p>
                        <p class="parrow">Acts of Nature</p>
                        <p class="parrow"> Motorcycling cover for Accidental Death & Disablement only, except for professional racing and sports related activities due to Accident</p>
                    </div>
                </div>
                <br>
                <a href="" class="btn btn-primary py-2 px-4 position-absolute buttom-100 start-50 translate-middle">Avail Now</a>
            </div>
        </div>
    </div>
    <!-- Power Card End -->

    <!-- Partners Start -->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Our Partners</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="position-relative rounded-top">
                    <img class="img-fluid rounded-top w-100" src="img/Alpha.png" alt="">
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="position-relative rounded-top">
                    <img class="img-fluid rounded-top w-100" src="img/Cocogen.png" alt="">
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="position-relative rounded-top">
                    <img class="img-fluid rounded-top w-100" src="img/FPG.png" alt="">
                </div>
            </div>
        </div>
        <div class="row g-5" style="justify-content: center; margin-top: 20px;">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="position-relative rounded-top">
                    <img class="img-fluid rounded-top w-100" src="img/MercantileInsurance.png" alt="">
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="position-relative rounded-top">
                    <img class="img-fluid rounded-top w-100" src="img/ParamountLife.png" alt="">
                </div>
            </div>
        </div>
    </div>
    </div> --}}
    <!-- Partners End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5 wow fadeInUp " data-wow-delay="0.1s">
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


    {{-- MODAL --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

  @include('script')

      
</body>

</html>