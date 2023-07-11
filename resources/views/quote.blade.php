<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <title>For Quotation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
   @include("header")
</head>

<body class="divitotwo">
   
    <!-- Navbar Start -->
    @include("nav")
    <!-- Navbar End -->
    
    

    <!-- Form Start -->
    <div class="wow slideInUp col-lg-6" data-wow-delay="0.3s">
    <div class="form1">
            <form action="inquire" method="post">
                @csrf
                <label style="color: black; text-align: center;">Get your Quote Now!</label><br>
             
             
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">First Name:</label>
                        <input type="text" id="firstname" oninput="displayText()" maxlength="200" name="inFname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="name">Middle Name:</label>
                        <input type="text" id="lastname" oninput="displayText()" maxlength="200" name="inMname" >
                    </div>
                    <div class="col-md-6">
                        <label for="name">Last Name:</label>
                        <input type="text" id="lastname" oninput="displayText()" maxlength="200" name="inLname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="name">Suffix:</label>
                        <input type="text" id="lastname" oninput="displayText()" maxlength="5" name="inSname" >
                    </div>
                </div>
                <label for="email">Email:</label>
                <input type="email" id="email" oninput="displayText()" maxlength="200" name="email" required>
                <label for="phone">Contact no:</label>
                <input type="number" class="form-control" id="phone" oninput="displayText()" maxlength="200" name="phone" required>
               
            {{-- <label for="insurance-type">Type of Insurance:</label>
            <select id="insurance-type" name="insurance" required>
                <option value="">--Select Type of Insurance--</option>
                <option value="fire">Fire Insurance</option>
                <option value="motor">Motor Car Insurance</option>
                <option value="eng">Engineering Insurance</option>
                <option value="marine">Marine & Aviation Insurance</option>
                <option value="liabilty">Liability Insurance</option>
                <option value="bonds/surety">Bonds/Surety</option>
            </select> --}}
                <input type="submit" value="Submit ">
            </form>
    </div>
    </div>
    <!-- Form End -->

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