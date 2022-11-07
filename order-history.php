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

        <form class="custom-style" method="POST">
          <div class="input-group  mb-4">
              <input type="text" class="form-control" name="Search" placeholder="Search by ID, To Name, From Name..." value="">
              <div class="input-group-append">
                <button class="btn btn-primary"><span class="fa fa-search"></span></button>
              </div>
          </div>
        </form>
        <form class="custom-style" action="" method="POST">
          <div class="card">
              <table class="table table-sm table-striped mb-0">
                <thead>
                    <th class="border-top-0 align-middle" width="1%">
                      <button type="submit" class="btn btn-link text-primary" title="Bulk Download" data-toggle="tooltip">
                      <span class="fa fa-download"></span>
                      </button>
                    </th>
                    <th class="border-top-0 align-middle" width="3%">#</th>
                    <th class="border-top-0 align-middle" width="5%">Type</th>
                    <th class="border-top-0 align-middle" width="15%">From</th>
                    <th class="border-top-0 align-middle" width="15%">To</th>
                    <th class="border-top-0 align-middle" width="5%">Price</th>
                    <th class="border-top-0 align-middle" width="5%">Status</th>
                    <th class="border-top-0 align-middle" width="10%">Added</th>
                    <th class="border-top-0 align-middle" width="10%">
                      <div class="float-right">
                          <a class="btn btn-sm btn-link text-secondary" href="javascript:;" title="Refresh" data-toggle="tooltip"><span class="fa fa-sync"></span></a>
                      </div>
                    </th>
                </thead>
                <tbody></tbody>
              </table>
          </div>
        </form>
        <nav>
          <ul class="pagination justify-content-center my-4">
              <li class="page-item">
                <a class="page-link" href="javascript:;">&laquo;</a>
              </li>
              <li class="page-item text-center"><a class="page-link"><small class="text-muted">1 of 1</small></a></li>
              <li class="page-item">
                <a class="page-link" href="javascript:;">&raquo;</a>
              </li>
          </ul>
        </nav>
              
        </div>

      </div>

      <?php include './includes/dashboard-footer.php'?> 
    </div>
  </div>
  

  <?php include './includes/theme-color.php'?>

  <?php include './includes/footer.php'?>

  </body>

</html>