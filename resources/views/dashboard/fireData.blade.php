

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Client Data</title>

   @include("dashboard/header")

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      
        @include('sweetalert::alert')
      @include('dashboard/nav')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            
           

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Client Records</h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <a href="{{ route('clientAdd') }}" >  <button class="btn btn-primary" type="button">Add New Client</button> </a>
                   <!-- if you want to download convert to excel, pdf etc. 
                        add this id = "datatable-button" -->
                    <table id="datatable"  class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID #</th>
                          <th>Full Name</th>
                          <th>Type Of Insurance</th>
                        
                          <th>Actions</th>
                      
                        </tr>
                      </thead>


                      <tbody>

                        @foreach ($clientList as $cli)
                            
                       
                        <tr >


                            <td>{{ $cli->ins_ref }}</td>
                            <td><a href="{{'clientView/' . encrypt($cli->ins_ref) }}"> {{ $cli->ins_fname . " " . $cli->ins_lname }} </a></td>
                            <td>{{ $cli->ins_name }}</td>


                     
                          <td>   <!--  <a href={{ "clientDel/" . $cli->ins_ref }} class="btn btn-info"><i class="glyphicon glyphicon-eye-open"></i></a>-->
                            <a href={{ "clientEdits/" .  encrypt($cli->ins_ref) }} class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                        <!--    <a href={{ "clientDel/" . $cli->ins_ref }} class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>-->

                        @if(session("power"!=2))
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $cli->ins_ref }}">
                              <i class="glyphicon glyphicon-trash"></i>
                            </button>
                            @endif
                            <!-- Modal -->
                            <form action="{{ "clientDel/" . $cli->ins_ref }}" method="post">
                              @csrf
                              @method("delete")
                            <div class="modal fade" id="exampleModal{{ $cli->ins_ref }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Deleting Record</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                  <h4><center>Do you want to Delete record of <strong> {{ $cli->ins_fname . " " . $cli->ins_lname }}</strong>?
                                  <br><strong> WARNING!!!</strong> <br>This Data is Permanently Deleted </center></h4>
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
                       
                       
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>

      </div>
    </div>
  
   @include("dashboard/script")

  

    
  </body>
</html>