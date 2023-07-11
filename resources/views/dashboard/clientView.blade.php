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
                <h3>View Client Info</h3>
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

            
            <div class="row">
                <div class="col-md-6 col-sm-6 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Member Information</h2>
                          
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="item form-group">
                                    <label class="" for="first-name">First Name :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $viewData[0]->ins_fname }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Middle Name :</label>
                                    <div class="col-md-6">
                                    <p><strong>{{ $viewData[0]->ins_mname }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Last Name :</label>
                                    <div class="col-md-6">
                                    <p><strong>{{ $viewData[0]->ins_lname }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Suffix :</label>
                                    <div class="col-md-6">
                                    <p><strong>{{ $viewData[0]->ins_suffix }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Birth Place :</label>
                                    <div class="col-md-6">
                                    <p><strong>{{ $viewData[0]->ins_bPlace }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Birth Day :</label>
                                    <div class="col-md-6">
                                    <p><strong>{{ $viewData[0]->ins_bDay }} </strong></p>
                                    </div>
                                </div>
                                
                               
                                <div class="item form-group">
                                    <label class="" for="first-name">Gender :</label>
                                    <div class="col-md-6">
                                    <p><strong>{{ $viewData[0]->ins_gender }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Civil Status :</label>
                                    <div class="col-md-6">
                                    <p><strong>{{ $viewData[0]->ins_civil }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Religion :</label>
                                    <div class="col-md-6">
                                    <p><strong>{{ $viewData[0]->ins_religion }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Educational Attainment :</label>
                                    <div class="col-md-6">
                                    <p><strong>{{ $viewData[0]->ins_educ }} </strong></p>
                                    </div>
                                </div>
                              
                                <div class="ln_solid"></div>
                              <!--  <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div> -->

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Address and Contact Information</h2>
                          
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="item form-group">
                                    <label class="" for="first-name"> House/Lot/Unit Number :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $viewData[0]->ins_addNo }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name"> Street :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $viewData[0]->ins_street }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name"> Barangay :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $viewData[0]->ins_brgy }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name"> City :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $viewData[0]->ins_city }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name"> Province/District :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $viewData[0]->ins_district }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name"> Region :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $viewData[0]->ins_region }} </strong></p>
                                    </div>
                                </div>
                                
                                <div class="item form-group">
                                    <label class="" for="first-name"> Zipcode :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $viewData[0]->ins_zipcode }} </strong></p>
                                    </div>
                                </div>
                                <h2>Goverment Issued ID</h2>
                                
                                <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="" for="first-name"> TIN No :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $viewData[0]->gov_tin }} </strong></p>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item form-group">
                                        <label class="" for="first-name"> SSS No :</label>
                                        <div class="col-md-6">
                                        <p><strong> {{ $viewData[0]->gov_tin }} </strong></p>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="item form-group">
                                            <label class="" for="first-name"> Passport No :</label>
                                            <div class="col-md-6">
                                            <p><strong> {{ $viewData[0]->gov_passport }} </strong></p>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item form-group">
                                                <label class="" for="first-name"> GSIS:</label>
                                                <div class="col-md-6">
                                                <p><strong> {{ $viewData[0]->gov_gsis}} </strong></p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="item form-group">
                                                    <label class="" for="first-name"> Philhealth :</label>
                                                    <div class="col-md-6">
                                                    <p><strong> {{ $viewData[0]->gov_philhealth }} </strong></p>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="item form-group">
                                                        <label class="" for="first-name"> National/Voters:</label>
                                                        <div class="col-md-6">
                                                        <p><strong> {{ $viewData[0]->gov_voters }} </strong></p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="item form-group">
                                                            <label class="" for="first-name"> Drivers License:</label>
                                                            <div class="col-md-6">
                                                            <p><strong> {{ $viewData[0]->gov_drivers }} </strong></p>
                                                            </div>
                                                        </div>
                                                        </div>
                                
                              
                                
                              <!--  <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div> -->

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Subcriptions Info</h2>
                          
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="item form-group">
                                    <label class="" for="first-name">Insurance Type :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $viewData[0]->ins_name }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Policy Number :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $viewData[0]->ins_policyNo }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Date Aquire :</label>
                                    <div class="col-md-6">
                                    <p><strong>{{ $viewData[0]->ins_dAcquire }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Date Expire :</label>
                                    <div class="col-md-6">
                                    <p><strong>{{ $viewData[0]->ins_dExpire }} </strong></p>
                                    </div>
                                </div> 
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-6">
                                        <a href='{{ "/clientEdits/" . encrypt($viewData[0]->ins_ref)  }}' class="btn btn-primary" type="button">Update </a>
                                
                                       
                                        <a href='{{ "/PowerCard/" . encrypt($viewData[0]->ins_ref) }}' class="btn btn-primary" type="reset">Generate Card</a>
                                    </div>
                                </div> 

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6  ">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Beneficiary<small>Single / Married</small></h2>
                    
                        <div class="clearfix"></div>
                     </div>
                  <div class="x_content">

                    <!-- start accordion -->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">For Single Beneficiary</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            
                            <div class="row">
                            <div class="col-md-12">
                                <div class="item form-group">
                                    <label class="" for="first-name">Father Full Name :</label>
                                   
                                    <p><strong> {{ $viewData[0]->sb_f_name }} </strong></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="" for="first-name">Birthday :</label>
                                   
                                    <p><strong> {{ $viewData[0]->sb_f_bday }} </strong></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item form-group">
                                        <label class="" for="first-name">Contact Number :</label>
                                       
                                        <p><strong> {{ $viewData[0]->sb_f_contact }} </strong></p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="item form-group">
                                            <label class="" for="first-name">Mother Full Name :</label>
                                           
                                            <p><strong> {{ $viewData[0]->sb_m_name }} </strong></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="item form-group">
                                            <label class="" for="first-name">Birthday :</label>
                                           
                                            <p><strong> {{ $viewData[0]->sb_m_bday }} </strong></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item form-group">
                                                <label class="" for="first-name">Contact Number :</label>
                                               
                                                <p><strong> {{ $viewData[0]->sb_m_contact }} </strong></p>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                        <div class="item form-group">
                                            <label class="" for="first-name">Brother / Sister Full Name :</label>
                                           
                                            <p><strong> {{ $viewData[0]->sb_s_name }} </strong></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="item form-group">
                                            <label class="" for="first-name">Birthday :</label>
                                           
                                            <p><strong> {{ $viewData[0]->sb_s_bday }} </strong></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item form-group">
                                                <label class="" for="first-name">Contact Number :</label>
                                               
                                                <p><strong> {{ $viewData[0]->sb_s_contact }} </strong></p>
                                                </div>
                                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                   
                  
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">For Married Beneficiary</h4>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                          
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="item form-group">
                                        <label class="" for="first-name">Spouse Full Name :</label>
                                       
                                        <p><strong> {{ $viewData[0]->mb_h_name}} </strong></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="item form-group">
                                            <label class="" for="first-name">BirthDay :</label>
                                           
                                            <p><strong> {{ $viewData[0]->mb_h_bdate }} </strong></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item form-group">
                                                <label class="" for="first-name">Contact :</label>
                                               
                                                <p><strong> {{ $viewData[0]->mb_h_contact}} </strong></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            <h4><strong>Dependent name</strong> </h4>
                                            </div>
                                            @foreach ($marriedData as $dependent)
                                            
                                            <div class="col-md-6">
                                                <div class="item form-group">
                                                    <label class="" for="first-name">Name :</label>
                                                   
                                                    <p><strong> {{ $dependent->dp_name }} </strong></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="item form-group">
                                                        <label class="" for="first-name">Contact :</label>
                                                       
                                                        <p><strong> {{ $dependent->dp_bdate}} </strong></p>
                                                        </div>
                                                    </div>

                                                
                                            @endforeach
                            
                            </div>
                                





                          </div>
                        </div>
                      </div>
                   
                    </div>
                    <!-- end of accordion -->


                  </div>
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



	
  </body>
</html>