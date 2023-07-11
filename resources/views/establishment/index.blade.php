<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Secure Prime Dashboard</title>
 

  @include("establishment/header")

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include("establishment/nav")
        <!-- /top navigation -->
       

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
         
          <div class="row" style="display: inline-block;">
            <div class="top_tiles">
              <div class="animated flipInY col-lg-12 col-md-12 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-group"></i></div>
                  <div class="count">{{ $estTran }}</div>
                  <h3>Client</h3>
                  <pre>                           </pre>
                </div>
              </div>
              {{-- <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-building"></i></div>
                  <div class="count"></div>
                  <h3><small>Establishement</small></h3>
                  <pre>                           </pre>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count"></div>
                  <h3>Inquiry</h3>
                  <pre>                           </pre>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count"></div>
                  <h3>Users</h3>
                  <pre>                           </pre>
                </div>
              </div> --}}
            </div>
          </div>
          <!-- /top tiles -->

        
            


            



          
        </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
    </div>

   @include("establishment/script")
	
  </body>
</html>
