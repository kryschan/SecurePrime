<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inquiry Data</title>

   @include("dashboard/header")

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      
        @include('sweetalert::alert')
      @include('dashboard/nav')
        <!-- /top navigation -->

        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Create Group</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
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
                                <h2>Group <small>Information</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="#">Settings 1</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form method="POST" action="{{ route('additionalMem', ['ref' => $compId]) }}">
                                    @csrf
                                    <div class="item form-group">
                                        <div class="col-md-2 col-sm-2 ">
                                        </div>
                                        <div class="col-md-8 col-sm-8 ">
                                            <h3>Select Member Here</h3>
                                            <table id="datatable"  class="table table-striped table-bordered " style="width:100%">
                                                <thead align="center">
                                                  
                                                
                                                <tr >
                                                    <th align="center" width ="5%">Select</th>
                                                    <th>Member FullName</th>
                                                </tr>
                                            </thead >
                                          
                                            @foreach ($memInfos as $memData)

                                              
                                                <tr>
                                                    <td align="center"><input type="checkbox" name="compMem[]" value="{{ $memData->ins_ref }}"></td>
                                                    <td>{{  $memData->ins_fname . " " . $memData->ins_mname . " " . $memData->ins_lname . " " . $memData->ins_suffix }}</td>
                                                </tr>
                                                
                                             @endforeach 

                                            </table>
                                        </div>
                                    </div>
                                    
                                    

                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-5">
                                           
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
 <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
 <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>


  

    
  </body>
</html>