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

          <div class="card">
            <div class="card-body custom-style">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="d-flex justify-content-between referlink" for="referLink">
                      <span>Your Referal Link</span>
                      <small class="d-block text-muted small">Click to copy to clipboard</small>
                    </label>
                    <input readonly id="referLink" class="form-control auto-copy" value="https://whitelabel.com/ref/2b369bbb-aed3-034a-3709-1b1b5b65aa81">
                  </div>
                </div>
                <div class="col-md-7">
                  <h3 class="h3 mt-0 font-weight-light mb-2">You get <span class="text-primary">5%</span> from all purchases that you have referred!</h3>
                  <div class="card my-2 b-shadow-0">
                    <div class="card-header text-primary h3 my-0 font-weight-light p-0">Users Referred</div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">groups</i>
                  </div>
                  <p class="card-category">Total Referred</p>
                  <h3 class="card-title">20</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="#pablo">Get More Space...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">attach_money</i>
                  </div>
                  <p class="card-category">Balance</p>
                  <h3 class="card-title">$15,000.00</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Google Analytics
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon text-center">
                    <i class="material-icons">credit_card</i>
                  </div>
                  <p class="card-category">Total Referrals</p>
                  <h3 class="card-title">$2,245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
      </div>
      <?php include './includes/dashboard-footer.php'?> 
    </div>
  </div>
  <?php include './includes/theme-color.php'?>

  

  <?php include './includes/footer.php'?>

  </body>

</html>