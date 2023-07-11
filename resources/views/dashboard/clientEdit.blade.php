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
                <h3>Edit Client Info</h3>
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

            <form class="form-horizontal form-label-left" method="POST" action="/actionUpdate/{{ $clientInfo[0]->ins_ref }}">
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
                    <div class="clearfix"><h2>Client Information</h2></div>
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
                                              <small>Personal Info</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Address & Contact</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small> Insurance Info.</small>
                                          </span>
                          </a>
                        </li>
                         <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small> Beneficiary For Single</small>
                                          </span>
                          </a>
                        </li> 
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">
                                              Step 5<br />
                                              <small> Beneficiary For Married</small>
                                          </span>
                          </a>
                        </li> 
                      </ul>
                   
                      
                     
                      <div id="step-1">
                       
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-3 ">
                              <input type="text" id="last-name"  name = "lName" placeholder="Last Name" class="form-control" value="{{ $clientInfo[0]->ins_lname  }}">
                           
                            </div> 
                            
                            <div class="col-md-3 col-sm-3 ">
                              <input type="text" id="first-name"  name = "fName" placeholder="First Name" class="form-control" value="{{ $clientInfo[0]->ins_fname  }}">
                            
                            </div>
                            
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><span class="required"></span>
                            </label>
                            <div class="col-md-3 col-sm-3 ">
                              <input type="text" id="first-name"  name = "mName" placeholder="Middle Name" class="form-control" value="{{ $clientInfo[0]->ins_mname  }}">
                            
                            </div> 
                            
                            <div class="col-md-3 col-sm-3 ">
                              <input type="text" id="first-name" name = "sName" placeholder="Suffix" class="form-control" value="{{ $clientInfo[0]->ins_suffix  }}">
                            
                            </div>
                            
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Place of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name ='pBirth' id="first-name"   placeholder="Place of Birth" class="form-control" value="{{ $clientInfo[0]->ins_bPlace  }}">
                           
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="date" name ='dBirth' id="first-name"  class="form-control" value="{{ $clientInfo[0]->ins_bDay  }}">
                           
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Civil Status <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select name="cStat" id="" class="form-control">
                                <option value="">Select civil Status . . .</option>
                                <option value="Single" {{ $clientInfo[0]->ins_civil == "Single"? 'selected' : '' }}>Single</option>
                                <option value="Married" {{ $clientInfo[0]->ins_civil == "Married"? 'selected' : '' }}>Married</option>
                                <option value="Widow" {{ $clientInfo[0]->ins_civil == "Widow"? 'selected' : '' }}>Widow</option>
                                <option value="Single Parent" {{ $clientInfo[0]->ins_civil == "Single Parent"? 'selected' : '' }}>Single Parent</option>
                               </select>
                           
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Gender <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                             <select name="gender" id="" class="form-control">
                              <option value="">Select gender . . .</option>
                              <option value="Male" {{ $clientInfo[0]->ins_gender == "Male"? 'selected' : '' }}>Male</option>
                              <option value="Female" {{ $clientInfo[0]->ins_gender == "Female"? 'selected' : '' }}>Female</option>
                             </select>
                           
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Religion <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select name="cRegs" id="" class="form-control">
                                <option value="">Select Religion . . . </option>
                                @foreach ($optRels as $otpRegData)
                                <option value="{{ $otpRegData->reg_name }}" {{ $clientInfo[0]->ins_religion ==  $otpRegData->reg_name ? 'selected' : '' }}>{{ $otpRegData->reg_name }}</option>
                                @endforeach
                              </select>
                              
                           
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Education <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select name="cEduc" id="" class="form-control">
                                <option value="">Select Educational Attain . . . </option>
                                @foreach ($optEds as $otpEdData)
                                <option value="{{ $otpEdData->ed_name }}" {{ $clientInfo[0]->ins_educ ==  $otpEdData->ed_name ? 'selected' : '' }}>{{ $otpEdData->ed_name }}</option>
                                @endforeach
                              </select>
                              
                           
                            </div>
                          </div>


                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Contact Number <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name ='contact' id="first-name"  placeholder="Cellphone Number" class="form-control" value="{{ $clientInfo[0]->ins_contact  }}">
                           
                            </div>
                          </div>
                      </div>
                   
                    
                  
                      <div id="step-2">
                       
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">House/Block/Lot/Phase No. <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name="aNum" class="form-control" value="{{ $clientInfo[0]->ins_addNo  }}">
                            </div>
                          </div>
                       
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Street/Village/Subdivision <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" name="aStreet"  class="form-control " value="{{ $clientInfo[0]->ins_street  }}">
                            </div>
                          </div>
                       
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Barangay</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text" name="aBrgy" value="{{ $clientInfo[0]->ins_brgy  }}">
                            </div>
                          </div>
                        
                          <div class="form-group row">
                            <label for="middle-name" id="" class="col-form-label col-md-3 col-sm-3 label-align">Province/State/Region</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text" name="aProv" value="{{ $clientInfo[0]->ins_district  }}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">City/Municipality</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text" name="aCity" value="{{ $clientInfo[0]->ins_city  }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Region</label>
                            <div class="col-md-6 col-sm-6 ">
                              <select name="region" id="" class="form-control">
                                <option value="">Select . . . </option>
                                @foreach ($optRegs as $otpRegData)
                                <option value="{{ $otpRegData->rel_name }}"{{ $clientInfo[0]->ins_region == $otpRegData->rel_name ? "selected" : ''}} >{{ $otpRegData->rel_name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div> 
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Zip Code</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="text"  name="aZip"  value="{{ $clientInfo[0]->ins_zipcode  }}">
                            </div>
                          </div>
                          
                      </div>
                   
                    
                      <div id="step-3">
                        
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">TIN NO. / SSS <span class="required">*</span>
                          </label>
                          <div class="col-md-3 col-sm-3 ">
                            <input type="text" id="first-name"  class="form-control" placeholder="TIN Number" value="{{ $clientInfo[0]->gov_tin }}" name="gTin">
                          </div>
                          <div class="col-md-3 col-sm-3 ">
                            <input type="text" id="first-name"  class="form-control" placeholder="SSS Number" value="{{ $clientInfo[0]->gov_sss }}" name="gSss">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Passport / Voters/National ID <span class="required">*</span>
                          </label>
                          <div class="col-md-3 col-sm-3 ">
                            <input type="text" id="first-name"  class="form-control" placeholder="Passport Number" value="{{ $clientInfo[0]->gov_passport }}" name="gPass">
                          </div>
                          <div class="col-md-3 col-sm-3 ">
                            <input type="text" id="first-name"  class="form-control" placeholder="Voters / National ID" value="{{ $clientInfo[0]->gov_voters }}" name="gVN">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">GSIS / PHILHEALTH <span class="required">*</span>
                          </label>
                          <div class="col-md-3 col-sm-3 ">
                            <input type="text" id="first-name"  class="form-control" placeholder="GSIS Number" value="{{ $clientInfo[0]->gov_gsis }}" name="gGsis">
                          </div>
                          <div class="col-md-3 col-sm-3 ">
                            <input type="text" id="first-name"  class="form-control" placeholder="PHILHEALTH Number" value="{{ $clientInfo[0]->gov_philhealth }}" name="gPhilhealth">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Drivers Liciense<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name"  class="form-control" placeholder="Drivers License" value="{{ $clientInfo[0]->gov_drivers }}" name="gDrivers">
                          </div>
                        
                        </div>

                     
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Insurance Type <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" name="iType">
                              <option value="" selected disabled>Please Select Insurance Type . . .</option>
                              @foreach($insList as $ins)
                              <option value="{{ $ins['ins_refNo'] }}" {{ $clientInfo[0]->ins_type == $ins['ins_refNo'] ? 'selected' : '' }}>{{ $ins['ins_name'] }}</option>
                              @endforeach
                            </select>
                           
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Policy Number <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name"  class="form-control" placeholder="Policy Number" name="iPolicy"  value="{{ $clientInfo[0]->ins_policyNo }}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date Aquire <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="date" id="first-name"  class="form-control" name="iAdate"  value="{{ $clientInfo[0]->ins_dAcquire  }}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date Expire <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="date" id="first-name"  class="form-control" name="iEdate"  value="{{ $clientInfo[0]->ins_dExpire  }}">
                          </div>
                      </div>
                        
                      </div>

                      <div id="step-4">

                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mother Full Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                           
                            <input type="text"  class="form-control" placeholder="Mother Full Name" value="{{ $clientInfo[0]->sb_m_name }}" name="sMFName">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date Birth / Contact <span class="required">*</span>
                          </label>
                          <div class="col-md-3 col-sm-3">
                            <input type="date" id="first-name"  class="form-control" placeholder="Birthday" value="{{ $clientInfo[0]->sb_m_bday }}"  name="sMBDay">
                          </div>
                         
                          <div class="col-md-3 col-sm-3">
                            <input type="text" id="first-name"  class="form-control" placeholder="Contact" value="{{ $clientInfo[0]->sb_m_contact }}" name="sMContact">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Father Full Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6">
                            <input type="text" id="first-name"  class="form-control" placeholder="Father Full Name" value="{{ $clientInfo[0]->sb_f_name }}" name="sFFName">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date / Contact <span class="required">*</span>
                          </label>
                          <div class="col-md-3 col-sm-3">
                            <input type="date" id="first-name"  class="form-control" name="sFBDay" value="{{ $clientInfo[0]->sb_f_bday }}" >
                          </div>
                          <div class="col-md-3 col-sm-3">
                            <input type="text" id="first-name"  class="form-control" name="sFContact" value="{{ $clientInfo[0]->sb_f_contact }}" placeholder="Contact">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sister/ Brother Full Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="text" id="first-name"  class="form-control" placeholder="Father Full Name" value="{{ $clientInfo[0]->sb_s_name }}" name="sSFName">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date / Contact <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3">
                          <input type="date" id="first-name"  class="form-control" name="sSBDay" value="{{ $clientInfo[0]->sb_s_bday }}" >
                        </div>
                        <div class="col-md-3 col-sm-3">
                          <input type="text" id="first-name"  class="form-control" name="sSContact" value="{{ $clientInfo[0]->sb_s_contact }}" placeholder="Contact">
                        </div>
                    </div>
                      </div>


                      <div id="step-5">

                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Spouse Full Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name"  class="form-control" placeholder="Spouse Full Name" value="{{ $clientInfo[0]->mb_h_name }}" name="sFname">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Birthday / Contact <span class="required">*</span>
                          </label>
                          <div class="col-md-3 col-sm-3">
                            <input type="date" id="first-name"  class="form-control" name="sHBdate" value="{{ $clientInfo[0]->mb_h_bdate  }}" >
                          </div>
                          <div class="col-md-3 col-sm-3">
                            <input type="text" id="first-name"  class="form-control" name="sHContact" value="{{ $clientInfo[0]->mb_h_contact }}" placeholder="Contact">
                          </div>
                      </div>

                        <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="test"> Name of Dependents / Birthday <span class="required">*</span>
                          </label>

                          
                          <div class="col-md-6 col-sm-6 container1">
        
                              {{-- <button class="add_form_field btn btn-success" type="button">Add New Dependent &nbsp;  
                                <span style="font-size:16px; font-weight:bold;">+ </span>
                              </button>--}}
                              <div>
                                @foreach ($marriedData as $dependent)
                                    
                                
                                <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ $dependent->dp_name }}"  placeholder = "Name of Dependents"name="sDept[]">
                                </div>
                              <div class="col-md-6">
                                <input type="Date" class="form-control"  value="{{ $dependent->dp_bdate }}"  placeholder = "Birthdate" name="sBday[]">
                                <br>
                              </div>
                              @endforeach
                              </div> 
                          </div>
                          
                        </div>
                        
  
  
                      <br>
                          <div class="form-group row">
                            <div class="col-md-9 col-sm-9 text-right">
                          <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
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

 <script>	
  window.onload = function() {	
  
    // ---------------
    // basic usage
    // ---------------
    var $ = new City();
    $.showProvinces("#province");
    $.showCities("#city");

    
  }
  </script>
  <script>
    $(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div><br><div class="col-md-6"><input type="text" placeholder="Name of Dependents" class="form-control" name="sDept[]"/></div><div class="col-md-6"><input type="date" class="form-control" name="sBday[]"/></div><a href="#" class="btn delete">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
  </script>
	
  </body>
</html>