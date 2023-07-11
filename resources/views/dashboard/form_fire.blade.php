<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Secure Prime </title>


  @include("dashboard/header");
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      
        @include('dashboard/nav')
        <!-- /top navigation -->

        <!-- page content -->

        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Fire Insurance Form</h3>
              </div>
              
              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group row pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-secondary" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

           
            
            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Step 1 description</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Step 2 description</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Step 3 description</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small>Step 4 description</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                   

                      
                      <div id="step-1">
                        <form class="form-horizontal form-label-left" method="POST" action="{{ route("sample.validate_registration") }}">
                          @csrf
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" required="required" name = "name" class="form-control">
                              @if($errors->has('name'))
                              <span class="text-danger">{{ $error->first('name') }}</span>
                              @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name ='email' id="first-name" required="required" class="form-control">
                              @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                              @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Password <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="password" name = 'password' id="last-name" name="last-name" required="required" class="form-control ">
                              @if($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                              @endif
                            </div>
                          </div>
                         
                         



                          <div class="form-group row">
                            <div class="col-md-10 col-sm-6 ">
                            </div>
                            <div class="col-md-2 col-sm-6 ">

                              <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                          </div>

                        </form>

                      </div>

                      <div id="step-2">
                        <form class="form-horizontal form-label-left">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Block/Lot/Phase No. <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Street <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Village/Subdivision</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text" name="middle-name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">City/Municipality</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text" name="middle-name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Province/State/Region</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text" name="middle-name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Zip Code</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text" name="middle-name">
                            </div>
                          </div>
                          
                        </form>

                      </div>
                      <div id="step-3">
                        <form class="form-horizontal form-label-left">

                          
                          
                          


                            

                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Description of Property to be Insured</label>
                            <div class="col-md-9 col-sm-9 ">
                              <select class="form-control">
                                <option>Choose option</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Contents</option>
                                <option>Condominium</option>
                                <option>One Storey</option>
                                <option>Two Storey</option>
                                <option>Three Storey Or More</option>
                                <option>Townhouse</option>
                                
                              </select>
                            </div>
                          </div>
                          <span class="section">Coverage</span>
                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Fire and/or Lightining</label>
                            <div class="col-md-9 col-sm-9 ">
                              <select class="form-control">
                                <option>Choose amount</option>
                                <option>50,000.00</option>
                                <option>75,000.00</option>
                                <option>100,000.00</option>
                                <option>150,000.00</option>
                                <option>200,000.00</option>
                                <option>250,000.00</option>
                                <option>300,000.00</option>
                                <option>400,000.00</option>
                                <option>50,000.00</option>
                                <option>750,000.00</option>
                                <option>1,000,000.00</option>
                                
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Vehicle Impact</label>
                            <div class="col-md-9 col-sm-9 ">
                              <select class="form-control">
                                <option>Choose amount</option>
                                <option>50,000.00</option>
                                <option>75,000.00</option>
                                <option>100,000.00</option>
                                <option>150,000.00</option>
                                <option>200,000.00</option>
                                <option>250,000.00</option>
                                <option>300,000.00</option>
                                <option>400,000.00</option>
                                <option>50,000.00</option>
                                <option>750,000.00</option>
                                <option>1,000,000.00</option>
                                
                              </select>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Consequential Loss or Business Interruption</label>
                            <div class="col-md-9 col-sm-9 ">
                              <select class="form-control">
                                <option>Choose amount</option>
                                <option>50,000.00</option>
                                <option>75,000.00</option>
                                <option>100,000.00</option>
                                <option>150,000.00</option>
                                <option>200,000.00</option>
                                <option>250,000.00</option>
                                <option>300,000.00</option>
                                <option>400,000.00</option>
                                <option>50,000.00</option>
                                <option>750,000.00</option>
                                <option>1,000,000.00</option>
                                
                              </select>
                            </div>
                          </div>


                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Full Earthquake</label>
                            <div class="col-md-9 col-sm-9 ">
                              <select class="form-control">
                                <option>Choose amount</option>
                                <option>50,000.00</option>
                                <option>75,000.00</option>
                                <option>100,000.00</option>
                                <option>150,000.00</option>
                                <option>200,000.00</option>
                                <option>250,000.00</option>
                                <option>300,000.00</option>
                                <option>400,000.00</option>
                                <option>50,000.00</option>
                                <option>750,000.00</option>
                                <option>1,000,000.00</option>
                                
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Falling Aircraft</label>
                            <div class="col-md-9 col-sm-9 ">
                              <select class="form-control">
                                <option>Choose amount</option>
                                <option>50,000.00</option>
                                <option>75,000.00</option>
                                <option>100,000.00</option>
                                <option>150,000.00</option>
                                <option>200,000.00</option>
                                <option>250,000.00</option>
                                <option>300,000.00</option>
                                <option>400,000.00</option>
                                <option>50,000.00</option>
                                <option>750,000.00</option>
                                <option>1,000,000.00</option>
                                
                              </select>
                            </div>
                          </div>


                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Rental Value or Rental Income</label>
                            <div class="col-md-9 col-sm-9 ">
                              <select class="form-control">
                                <option>Choose amount</option>
                                <option>50,000.00</option>
                                <option>75,000.00</option>
                                <option>100,000.00</option>
                                <option>150,000.00</option>
                                <option>200,000.00</option>
                                <option>250,000.00</option>
                                <option>300,000.00</option>
                                <option>400,000.00</option>
                                <option>50,000.00</option>
                                <option>750,000.00</option>
                                <option>1,000,000.00</option>
                                
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Explosion and/or Smoke</label>
                            <div class="col-md-9 col-sm-9 ">
                              <select class="form-control">
                                <option>Choose amount</option>
                                <option>50,000.00</option>
                                <option>75,000.00</option>
                                <option>100,000.00</option>
                                <option>150,000.00</option>
                                <option>200,000.00</option>
                                <option>250,000.00</option>
                                <option>300,000.00</option>
                                <option>400,000.00</option>
                                <option>50,000.00</option>
                                <option>750,000.00</option>
                                <option>1,000,000.00</option>
                                
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Riot,Strike and Malicious Damage</label>
                            <div class="col-md-9 col-sm-9 ">
                              <select class="form-control">
                                <option>Choose amount</option>
                                <option>50,000.00</option>
                                <option>75,000.00</option>
                                <option>100,000.00</option>
                                <option>150,000.00</option>
                                <option>200,000.00</option>
                                <option>250,000.00</option>
                                <option>300,000.00</option>
                                <option>400,000.00</option>
                                <option>50,000.00</option>
                                <option>750,000.00</option>
                                <option>1,000,000.00</option>
                                
                              </select>
                            </div>
                          </div>


                          <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Industrial All Risk</label>
                            <div class="col-md-9 col-sm-9 ">
                              <select class="form-control">
                                <option>Choose amount</option>
                                <option>50,000.00</option>
                                <option>75,000.00</option>
                                <option>100,000.00</option>
                                <option>150,000.00</option>
                                <option>200,000.00</option>
                                <option>250,000.00</option>
                                <option>300,000.00</option>
                                <option>400,000.00</option>
                                <option>50,000.00</option>
                                <option>750,000.00</option>
                                <option>1,000,000.00</option>
                                
                              </select>
                            </div>
                          </div>

                        </form>
                        </p>
                      </div>
                      <div id="step-4">
                        <h2 class="StepTitle">Step 4 Content</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->





        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
 <!-- jQuery -->
 <script src="vendors/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <!-- FastClick -->
 <script src="vendors/fastclick/lib/fastclick.js"></script>
 <!-- NProgress -->
 <script src="vendors/nprogress/nprogress.js"></script>
 <!-- jQuery Smart Wizard -->
 <script src="vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
 <!-- Custom Theme Scripts -->
 <script src="build/js/custom.min.js"></script>
	
  </body>
</html>