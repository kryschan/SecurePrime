
<style>
    .tMar {
        margin-top: 150px;
    }
</style>



<div class="tMar"></div>
<nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0 px-3 px-lg-0 fixed-top align-items-center " >
    <a href="{{ route('index') }}" class="navbar-brand ms-lg-5">
        <img class="logo" src="img/logo1.png">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('index') }}" class="nav-item nav-link">Home </a>
            <div class="nav-item dropdown">
                <a href="service.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products and Services</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('fireinsurance') }}" class="dropdown-item">Fire Insurance</a>
                    <a href="{{ route('motorcarinsurance')}}" class="dropdown-item">Motor Car Insurance</a>
                    <a href="{{ route('engineeringinsurance') }}" class="dropdown-item">Engineering Insurance</a>
                    <a href="{{ route('marineandaviationinsurance') }}" class="dropdown-item">Marine and Aviation Insurance</a>
                    <a href="{{ route('liabilityinsurance') }}" class="dropdown-item">Liability  Insurance</a>
                    <a href="{{ route('bonds') }}" class="dropdown-item ">Bonds/Surety</a>
                    <a href="{{ route('securepowercard') }}" class="dropdown-item ">Group Life</a>
                    <a href="{{ route('securepowercard') }}" class="dropdown-item ">Secure Power Card</a>
                    <a href="" class="dropdown-item ">Personal Accident</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Claims Procedures</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('claimsmotor') }}" class="dropdown-item">Motor Car Claims</a>
                    <a href="#" class="dropdown-item">Claims 2</a>
                    <a href="#" class="dropdown-item">Claims 3</a>
                    <a href="#" class="dropdown-item">Claims 4</a>
                    <a href="#" class="dropdown-item">Claims 5</a>
                    <a href="{{ route('claimsgpa') }}" class="dropdown-item">Group Personal Accident Insurance Claims</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Partners</a>
                <div class="dropdown-menu m-0">
     
                    <a href="{{ route('parts') }}" class="dropdown-item">Our Partners</a>
                    <a href="{{ route('person') }}" class="dropdown-item">List of Client</a>
                    <a href="{{ route('estas') }}" class="dropdown-item">Accredited Establishment</a>
                   
                
                </div>
            </div>
            <a href=" {{ route("quote") }}" class="nav-item nav-link">Get a Quote</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('certificates') }}" class="dropdown-item">Certificates</a>
                    <a href="{{ route('officers') }}" class="dropdown-item">Board of Directors</a>
                    <a href="{{ route('about') }}" class="dropdown-item">Our Company</a>
                    <a href="{{ route('news') }}" class="dropdown-item">News & Updates</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link"  style="margin-right: 50px;">Contact</a>
            {{-- <a href="{{ route('login') }}" class="nav-item nav-link" style="margin-right: 50px;"><i class="bi bi-arrow-right text-primary me-2"></i>Login</a> --}}
        
            
        </div>
    </div>
</nav>

<div class="ex1"></div>