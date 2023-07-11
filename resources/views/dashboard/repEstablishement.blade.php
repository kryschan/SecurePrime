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
                <h3>Establishement Transaction</h3>
              </div>
              
              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group row pull-right top_search">
                  
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

           
            
            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                  
                    <div class="clearfix">Establishement Transaction Reports <strong style="color:red">(If you want generate all Record leave it blank & click Submit)</strong></div>
                  </div>
                  <div class="x_content">


                
                    <div  class="form_wizard wizard_horizontal">
                      
                   

                      
                      <div id="step-1">
                        <form class="form-horizontal form-label-left" method="POST" action="repEst">
                          @csrf
 
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Transaction Date From <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input name="tFrom" type="date" class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;" pattern="\d*" placeholder="From">
                            </div> 
                            
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Transaction Date To  <span class="required">*</span>
                            </label>
                          
                            <div class="col-md-6 col-sm-6 ">
                              <input name="tTo" type="date" class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;" placeholder="To">
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