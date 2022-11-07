<!DOCTYPE html>
<html lang="en">

<head>

<?php include  './includes/dashboard-head.php' ?>

</head>


<html>
  <body class="">
    

  <div class="wrapper ">
    <?php include './includes/sidebar.php'?> 
    
    <div class="main-panel">
      <?php include './includes/dashboard-header.php'?>
      <div class="content">
        <div class="container-fluid">
          
            
            
              
        <form class="custom-style" method="#" action="#">
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <label for="change-password-old">Old password</label>
                    <input type="password" class="form-control" name="OldPassword" id="change-password-old" placeholder="********" required="">
                  </div>
                  <div class="form-group">
                    <label for="change-password-new">Password</label>
                    <input type="password" class="form-control" name="Password" id="change-password-new" placeholder="********" required="">
                  </div>
                  <div class="form-group">
                    <label for="change-password-confirm">Confirm password</label>
                    <input type="password" class="form-control" name="Confirm" id="change-password-confirm" placeholder="********" required="">
                  </div>
                  <div class="d-flex mt-3">
                    <button class="btn btn-primary fs16 mr-3"><i class="material-icons mr-1">lock</i> Change </button>
                    <button class="btn btn-default fs16"> <i class="material-icons mr-1">cancel</i> Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end content-->
          </div>
          <!--  end card  -->

        </form>
              
        </div>

      </div>

      <?php include './includes/dashboard-footer.php'?> 
    </div>
  </div>
  

  <?php include './includes/theme-color.php'?>

  <?php include './includes/footer.php'?>

  </body>

</html>