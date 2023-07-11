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
    <div class="container-fluid bg-primary p-5 mb-5 hero-header10">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Bonds/Surety</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->



    <!-- BONDS/SURETY Start -->
    <div>
        <div class="col wow zoomIn box" data-wow-delay="0.3s">
            <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                <div class="position-relative p-5 just">
                    <h3 class="mb-3 mission just">BONDS/SURETY</h3>
                    <p style="text-align: center;">This cover undertakes to provide you with the needed guarantee to complete a contractual or civil engineering project.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- BONDS/SURETY End -->

    <!-- Types Start -->
    <div>
        <div class="col-lg-4 col-md-6 wow zoomIn box" data-wow-delay="0.3s">
            <div class="bg-light border-bottom border-5 border-primary rounded">
                <div class="position-relative p-5 just row gx-5">
                    <div class="col-lg-5 mt-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="img/sign.jpg" style="object-fit: contain;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                    <h3 class="mb-3 mission just">Types of Bonds/Surety:</h3>
                    <p><b>Bid or Proposal Bond</b></p>
                    <ul style="float: left;"><li>This is required in connection with the submission of tender for contracts with public authorities and private owners to guarantee that the bidder (contractor), if awarded the contract, will enter into the contract and finish the prescribed Performance Bond. The surety is generally responsible only for the difference between the bid of its principal and that of the contractor who is finally awarded the contract. If the bid bond, however, is a forfeiture or penalty bond, the whole amount of the bond is forfeitable regardless of the difference in bids.</li></ul>
                    <br><p><b>Performance Bond</b></p>
                    <ul style="float: left;"><li>This is required of a contractor to guarantee the full and timely performance of the contract according to plans and specifications.</li></ul>
                    <br><br><p><b>Advance Payment Bond</b></p>
                    <ul style="float: left;"><li>If the obliged (owner) is financing a contractor through an advance payment of the contract, he may secure the repayment of the advance by means of an Advance Payment Bond. The amount guaranteed decreases in accordance with the fixed percentage in the monthly bills.</li></ul>
                    <br><p><b>Labor and Materials Payment Bond</b></p>
                    <ul style="float: left;"><li>This bond guarantees that the contractor will pay all the bills incurred in connection with the use of labor and materials required in the fulfillment of the contract.</li></ul>
                    <br><p><b>Warranty Bond</b></p>
                    <ul style="float: left;"><li>This guarantees the completed works during the maintenance period, generally one year, against defective workmanship or materials.</li></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper a wow zoomIn" style="margin-top: 50px;" data-wow-delay="0.3s">
        <a href="quote.html"><button class="buttonview1"><span>Quote Now</span></button></a>
    </div>
    <!-- Types End -->

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