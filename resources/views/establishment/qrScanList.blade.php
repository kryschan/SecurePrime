<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Client Data</title>

   @include("establishment/header")

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      
        @include('sweetalert::alert')
      @include('establishment/nav')
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
                    <h2>Discounted Client List</h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              {{-- <a href="{{ route('addUser') }}" >  <button class="btn btn-primary">Add New Users</button> </a> --}}
                   <!-- if you want to download convert to excel, pdf etc. 
                        add this id = "datatable-button" -->
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Power Card No</th>
                          <th>Client Name</th>
                          <th>Transaction Date/Time</th>
                          
                        
                        </tr>
                      </thead>


                      <tbody>
                  
                        @foreach ($qrList as $tranList)
                        <tr>
                          <td>{{ $tranList->card_id  }}</td>
                          <td>{{ $tranList->ins_fname . " " . $tranList->ins_mname . " " . $tranList->ins_lname  }}</td> <!-- Replace "other_property" with the actual property you want to display -->
                          <td>{{ $tranList->est_date . " " . $tranList->est_time }}</td>
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
   
   @include("establishment/script");
  </body>
</html>