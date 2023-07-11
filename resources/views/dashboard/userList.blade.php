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
                    <h2>User Records</h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <a href="{{ route('addUser') }}" >  <button class="btn btn-primary" type="button">Add New Users</button> </a>
                   <!-- if you want to download convert to excel, pdf etc. 
                        add this id = "datatable-button" -->
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>FullName</th>
                          <th>Username</th>
                          <th>Actions</th>
                        
                        </tr>
                      </thead>


                      <tbody>
                  
                        @foreach ($userListData as $user) 
                        <tr>
                         
                          <td>{{ $user['u_name'] }}</td>
                          <td>{{ $user['u_username'] }}</td>
                          <td><a href="userupdate/{{ $user['u_id'] }}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                            {{-- <a href="" class="btn btn-danger" data-confirm-delete="true"><i class="glyphicon glyphicon-trash
                          "></i></a></td> --}}
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
   
   @include("dashboard/script");
  </body>
</html>