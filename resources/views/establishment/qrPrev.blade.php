<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Secure Prime </title>


  @include("establishment/header")
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      
        @include('establishment/nav')
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
                            <h2>Scan Secure Power Card Info</h2>
                          
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />

                              @if (!empty($person[0]->ins_fname))

                              <div class="item form-group">
                                  <label class="" for="first-name">Card Type:</label>
                                  <div class="col-md-6">
                                  <p><strong> {{ $cardInfo[0]->card_type }} </strong></p>
                                  </div>    
                                </div>
                                <div class="item form-group">
                                  <label class="" for="first-name">Card Number:</label>
                                  <div class="col-md-6">
                                  <p><strong> {{ $cardInfo[0]->card_id }} </strong></p>
                                  </div>    
                                </div>
                                <div class="item form-group">
                                  <label class="" for="first-name">Discount:</label>
                                  <div class="col-md-6">
                                  <p><strong> {{ $estinfo[0]->est_discount }} </strong></p>
                                  </div>    
                                </div>    
                                <div class="item form-group">
                                    <label class="" for="first-name">Firstname :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $person[0]->ins_fname }} </strong></p>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="" for="first-name">Middlename :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $person[0]->ins_mname }} </strong></p>
                                    </div>
                                </div>
                                 <div class="item form-group">
                                    <label class="" for="first-name">Lastname :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $person[0]->ins_lname }} </strong></p>
                                    </div>    
                                 </div>
                                 <div class="item form-group">
                                    <label class="" for="first-name">Address :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $person[0]->ins_addNo . " " . $person[0]->ins_street . " " . $person[0]->ins_brgy . " " . $person[0]->ins_city . " " . $person[0]->ins_district . " " . $person[0]->ins_zipcode }} </strong></p>
                                    </div>    
                                 </div>

                                 

                                 <div class="item form-group">
                                    <label class="" for="first-name">Policy Number :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $person[0]->ins_policyNo }} </strong></p>
                                    </div>    
                                 </div>
                                 <div class="item form-group">
                                    <label class="" for="first-name">expire Date :</label>
                                    <div class="col-md-6">
                                    <p><strong> {{ $person[0]->ins_dExpire }} </strong></p>
                                    </div>    
                                 </div>   

                                 @else
                                 <div class="item form-group">
                                
                                   <div class="col-md-6">
                                   <h3><strong> NO RECORD FOUND </strong></h3>
                                   </div>    
                                </div> 
                                 @endif
                               
                              
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <a href="{{ route("QrScanner") }}" type="button" class="btn btn-primary">Back</a>
                                     
                                    </div>
                                </div> 

                            </form>
                        </div>
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