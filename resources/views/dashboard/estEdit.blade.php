<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Secure Prime </title>


  @include("dashboard/header")
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
                <h3>Update Establishment</h3>
              </div>
              
              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group row pull-right top_search">
                  {{-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-secondary" type="button">Go!</button>
                          </span>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <form class="form-horizontal form-label-left" method="POST" action="/estEdPro/{{ $estData[0]->est_id }}">
              @csrf
            
            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"><h2>Establishment Information</h2></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                  
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                            Step 1  <br />
                                              <small>Establishment Info</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Address Information</small>
                                          </span>
                          </a>
                        </li>
                      
                      </ul>
                   
                      
                     
                      <div id="step-1">
                       
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Establishment Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="last-name"  name = "eName" placeholder="Name of Establishment" class="form-control" value="{{ $estData[0]->est_name }}">
                           
                            </div> 
                          
                          </div>
                   
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Branch<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name ='bName' id="first-name"   placeholder="Branch" class="form-control" value="{{ $estData[0]->est_branch }}">
                           
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Discount Persentage<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name ='eDis' id="first-name"   placeholder="Persentage of Discount" class="form-control" value="{{ $estData[0]->est_discount }}">
                           
                            </div>
                          </div>
                        
                       
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Contact Number<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name ='contact' id="first-name"   placeholder="Cellphone/TelPhone Number" value="{{ $estData[0]->est_contact }}" class="form-control">
                           
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Year Established<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name ='eYear' id="first-name"   placeholder="E.G (2020, 2021, 2022 ... etc.)" value="{{ $estData[0]->est_year }}" class="form-control">
                           
                            </div>
                          </div>


                      </div>
                   
                    
                  
                      <div id="step-2">
                       
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">House/Block/Lot/Phase No. <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name="aNum" class="form-control" placeholder="e.g. (#001 Block 1 lot 1 phase 1)" value="{{ $estData[0]->a_num }}">
                            </div>
                          </div>
                       
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Street/Village/Subdivision <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name="aStreet"  class="form-control" placeholder="Street/Village/Subdivision/Compound" value="{{ $estData[0]->a_street }}">
                            </div>
                          </div>
                       
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Barangay</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text" name="aBrgy" placeholder="Barangay" value="{{ $estData[0]->a_brgy }}">
                            </div>
                          </div>
                        
                          <div class="form-group row">
                            <label for="middle-name" id="" class="col-form-label col-md-3 col-sm-3 label-align">Province/State/Region</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="middle-name" class="form-control col" type="text" name="aProv" placeholder="Province" value="{{ $estData[0]->a_district }}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">City/Municipality</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="middle-name" class="form-control col" type="text" name="aCity" placeholder="City" value="{{ $estData[0]->a_city }}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Zip Code</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text"  name="aZip" placeholder="Zip Code" value="{{ $estData[0]->a_zip }}">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <div class="col-md-9 col-sm-9 text-right">
                          <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                      </div>
                   
                    
                    <!-- End SmartWizard Content -->


                  </form>


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
 <script src="../vendors/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <!-- FastClick -->
 <script src="../vendors/fastclick/lib/fastclick.js"></script>
 <!-- NProgress -->
 <script src="../vendors/nprogress/nprogress.js"></script>
 <!-- jQuery Smart Wizard -->
 <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
 <!-- Custom Theme Scripts -->
 <script src="../build/js/custom.min.js"></script>
 <script src="../src/phCity/city.js"></script>


	
  </body>
</html>