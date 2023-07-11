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
                <h3>View Information</h3>
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

                <div class="col-md-3 col-sm-3 ">
                </div>
                <div class="col-md-6 col-sm-6 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Company Information</h2>
                          
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <h4 class="" for="first-name">Ref #:</h4>
                                <div class="item form-group">
                                
                                    <div class="col-md-6">
                                    <h4><strong>{{ $comName[0]->com_id }}</strong></h4>
                                    </div>
                                </div>


                                <h4 class="" for="first-name">Company Name:</h4>
                                <div class="item form-group">
                                    
                                    <div class="col-md-12">
                                        
                                    <h4><strong>{{ $comName[0]->com_name }}</strong></h4>
                                    </div>
                                </div>
                                <h4 class="" for="first-name">Date Registered:</h4>
                                <div class="item form-group">
                                  
                                    <div class="col-md-6">
                                    <h4><strong>{{ $comName[0]->com_memDate }} </strong></h4>
                                    </div>
                                </div>
                               
                              
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-6 offset-md-9">
                                        {{-- <button class="btn btn-primary" type="button">Cancel</button> --}}
                                        <button class="btn btn-primary" type="reset">Update</button>
                                      
                                    </div>
                                </div> 

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Members Information</h2>
                          
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                          <table id="datatable"  class="table table-striped table-bordered " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Member #</th>
                                        <th>Name</th>
                    
                                    </tr>
                                </thead>
                                @foreach ($comMem as $memList)
                                <tr>
                                    <td>{{$memList->mem_id  }}</td>
                                    <td>{{ $memList->com_memName }}</td>
                                </tr>
                                @endforeach
                            </table>
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
 <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
 <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>


	
  </body>
</html>