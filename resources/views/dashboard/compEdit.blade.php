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


                            {{-- START BODY --}}
                            <div class="x_content">
                                <br />
                                <form action="/saveComp/{{ $grpInfo[0]->com_id }}"  method="post"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Group Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" required="required" placeholder="Policy Number" class="form-control" value="{{ $grpInfo[0]->com_name }}" name = 'comName'>
                                        </div>
                                    </div>
                                 
                                   
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Date of Membership <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="birthday" class="date-picker form-control" name="comDate" placeholder="dd-mm-yyyy" type="text" value="{{ $grpInfo[0]->com_memDate }}"  required="required"  onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function timeFunctionLong(input) {
                                                    setTimeout(function() {
                                                        input.type = 'text';
                                                    }, 60000);
                                                }
                                            </script>
                                        </div>
                                       
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Master Policy Number <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" required="required" placeholder="Group Name" class="form-control" value="{{ $grpInfo[0]->com_policy }}" name = 'comPolicy'>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Date Issued <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="birthday" class="date-picker form-control" name="comAqDate" placeholder="dd-mm-yyyy" type="text" value="{{ $grpInfo[0]->com_aqDate }}"  required="required"  onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function timeFunctionLong(input) {
                                                    setTimeout(function() {
                                                        input.type = 'text';
                                                    }, 60000);
                                                }
                                            </script>
                                        </div>
                                       
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Date Expire {{  Request()->parameter }} <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="birthday" class="date-picker form-control" name="comExDate" placeholder="dd-mm-yyyy" type="text" value="{{ $grpInfo[0]->com_exDate }}"  required="required"  onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function timeFunctionLong(input) {
                                                    setTimeout(function() {
                                                        input.type = 'text';
                                                    }, 60000);
                                                }
                                            </script>
                                        </div>
                                       
                                    </div>

                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6" style="padding-left: 67%">
                                            <button class="btn btn-primary" type="submit">Save</button>

                                        </div>
                                    </div>
                                </form>
                                  
                                    <div class="item form-group">
                                        <div class="col-md-2 col-sm-2">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h3>Member of Group</h3>
                                            <a href="{{ route('addMember', ['key' => $grpInfo[0]->com_id]) }}" class="btn btn-primary">Add New Member</a>
                                            <table id="datatable"  class="table table-striped table-bordered " style="width:100%">
                                                <thead align="center">
                                                  
                                                
                                                <tr>
                                                    
                                                    <th>Member FullName</th>
                                                    <th align="center" width ="5%">Action</th>
                                                </tr>
                                            </thead >
                                          
                                            @foreach ($memInfos as $memData)

                                              
                                                <tr>
                                                   
                                                    <td>{{  $memData->ins_fname . " " . $memData->ins_mname . " " . $memData->ins_lname . " " . $memData->ins_suffix }}</td>
                                                    <td align="center"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $memData->mem_id }}">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                      </button>
                                                      <form action="{{ "/delMemComp/" . $memData->mem_id }}" method="post">
                                                        @csrf
                                                        @method("delete")
                                                      <div class="modal fade" id="exampleModal{{ $memData->mem_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel">Deleting Record</h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <h4><center>Do you want to Delete record of <strong> {{  $memData->com_memName }}</strong>?
                                                            <br><strong> WARNING!!!</strong> <br>This Data is Permanently Deleted once you press Delete Button </center></h4>
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                              <button type="submit" class="btn btn-danger">Delete Record</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </form>
                                                    
                                                    
                                                    
                                                    
                                                    </td>
                                                </tr>
                                                
                                             @endforeach 

                                            </table>
                                        </div>
                                    </div>
                                    
                                    

                                    
                                    </div>

                               
                            </div>
                            {{-- END BODY --}}
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