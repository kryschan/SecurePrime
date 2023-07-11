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
                            <h2>Scan Secure Power Card</h2>
                          
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                         <form action="svEstUser" method="post">
                            @csrf
                                <div class="item form-group">
                                    <div class="col-md-12">
                                 <label for="">Email</label>
                                        <input type="email" name="estEmail" value="{{ $estData[0]->u_username }}" class="form-control">
                                        
                                </div>

                                </div>
                                
                               
                                
                                <div class="item form-group">
                                    <div class="col-md-12">
                                 <label for="">Password</label>
                                        <input type="password" id="Pass" name="estPass" class="form-control">
                                        
                                </div>

                                </div>
                                <div class="item form-group">
                                    <div class="col-md-12">
                                 <label for="">Confirm Password</label>
                                        <input type="password"  id="cPass" name ="estCPass" class="form-control">
                                        <span id="message"></span>
                                </div>

                                </div>
                                
                               
                              
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 offset-md-7 ">
                                     
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
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

<script>

$('#Pass, #cPass').on('keyup', function () {
  if ($('#Pass').val() == $('#cPass').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});

</script>





  {{-- <script>
    var span = document.getElementById('span');

function time() {
  var d = new Date();
  var s = d.getSeconds();
  var m = d.getMinutes();
  var h = d.getHours();
  span.textContent = 
    ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
}

setInterval(time, 1000);


  </script> --}}

	
  </body>
</html>