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
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <h4 class="heading-bd b-0">Ticket</h4>
                    <p class="para">Open a support ticket to contact us</p>
                    <label for="title">Title</label>
                    <input type="text" class="form-control" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="title">Category</label>
                    <select class="selectpicker">
                      <option disabled>USPS Priority V4</option>
                      <option value="2">USPS Express V4</option>
                      <option value="3">USPS First Class V4</option>
                      <option value="4">UPS Next Day Air Early V2</option>
                      <option value="5">UPS Next Day Air V2</option>
                      <option value="6">UPS 2nd Day Air V2</option>
                      <option value="7">UPS 3 Day Select V2</option>
                      <option value="8">UPS Ground V2</option>
                      <option value="9">USPS Priority</option>
                      <option value="10">USPS Express</option>
                      <option value="11">FedEx Ground</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="textareaMessage">Message</label>
                    <textarea class="form-control" name="textareaMessage" cols="30" rows="10" placeholder="Message"></textarea>
                  </div>
                  <button class="btn btn-primary fs16">Open</button>
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