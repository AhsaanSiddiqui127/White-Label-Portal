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
          <table class="table table-sm table-striped  mb-0">
              <thead>
                <th class="border-top-0 align-middle" width="3%">#</th>
                <th class="border-top-0 align-middle" width="10%">Country</th>
                <th class="border-top-0 align-middle" width="10%">Name</th>
                <th class="border-top-0 align-middle" width="10%">Street</th>
                <th class="border-top-0 align-middle" width="10%">Street 2</th>
                <th class="border-top-0 align-middle" width="10%">City</th>
                <th class="border-top-0 align-middle" width="10%">State</th>
                <th class="border-top-0 align-middle" width="10%">Zip</th>
                <th class="border-top-0 align-middle" width="10%">
                    <div class="btn-group float-right">
                      <a class="btn btn-sm btn-link text-success" href="https://labelsupply.io/address/new" title="New" data-toggle="tooltip"><span class="fa fa-plus"></span></a>
                      <a class="btn btn-sm btn-link text-secondary" href="https://labelsupply.io/addresses/1" title="Refresh" data-toggle="tooltip"><span class="fa fa-sync"></span></a>
                    </div>
                </th>
              </thead>
              <tbody>
                <tr>
                    <td class="align-middle">1</td>
                    <td class="align-middle">US</td>
                    <td class="align-middle">Ray Padilla</td>
                    <td class="align-middle">Odit sit officiis no</td>
                    <td class="align-middle">Odit sit officiis no</td>
                    <td class="align-middle">In modi harum quos v</td>
                    <td class="align-middle">AK</td>
                    <td class="align-middle">74505</td>
                    <td class="align-middle">
                      <div class="btn-group float-right">
                          <a class="btn btn-sm btn-link text-blue" href="https://labelsupply.io/address/d1117763-b115-8b0b-6cd4-4d210d8c656c/info" title="View" data-toggle="tooltip"><span class="fa fa-info-circle"></span></a>
                          <a class="btn btn-sm btn-link text-warning" href="https://labelsupply.io/address/d1117763-b115-8b0b-6cd4-4d210d8c656c/edit" title="Edit" data-toggle="tooltip"><span class="fa fa-edit"></span></a>
                          <a class="btn btn-sm btn-link text-danger" href="https://labelsupply.io/address/d1117763-b115-8b0b-6cd4-4d210d8c656c/delete" title="Delete" data-toggle="tooltip"><span class="fa fa-trash-alt"></span></a>
                      </div>
                    </td>
                </tr>
              </tbody>
          </table>
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