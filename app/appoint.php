<?php
require 'includes\connect.inc.php'; 
require '..\layouts\navbar.php';
require 'includes\funcs.inc.php';

$query = "SELECT * FROM `cim`.`customers` ORDER BY `CustomerID` asc";
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CIM-Info</title>
	<link href="..\css\bootstrap.min.css" rel="stylesheet">
	<link href="..\css\bootstrap-theme.min.css" rel="stylesheet">
    <link href="..\css\table.css" rel="stylesheet">
    <link href="..\css\style.css" rel="stylesheet">
    <script src="..\js\script.js" defer></script>
</head>
<body>
<div class="body-area">
    <div class="body-area-title">
        <div>
            <div class="title-container">
                <div class="title-container-wrapper">
                    <h2 id="header" class="title-value">Customers Information</h2>
                </div>  
            </div>
        </div>
    </div>
    <div class="body-area-content">
        <div class="body-area-hidden-header" aria-hidden="true">
            <div class="hidden-header">
                <h2 class="title-value">Customers Information</h2>
            </div>
        </div>
        <div id="main-layout-content" class="main-body" aria-labelledby="header-title">
            <div class="inner-body-layer">
                <div class="main-main-body">
                    <div>
                    <div class="main-1section">
    <?php if ($query_run = mysqli_query($connection, $query)) {
if (mysqli_num_rows($query_run) == NULL) {
    echo 'NO RESULT FOUND';
} else { ?>
                    <table class="table table-hover tab">
                   
  <thead class="bg-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Company</th>
	  <th scope="col">WorkFunction</th>
	  <th scope="col">Email</th>
	  <th scope="col">Next Contact</th>
    </tr>
  </thead>
  <?php 
 
    while ($query_row = mysqli_fetch_assoc($query_run)) {
        $id = $query_row['CustomerID'];
        $name = $query_row['CustomerName'];
        $company = $query_row['Customer_company']; 
        $work_function = $query_row['Customer_WorkFunction'];
        $email = $query_row['CustomerEmail'];
        $nxt_cnt = $query_row['NextContact'];?>
  <tbody>
    
    <tr>
      <th scope="row"><?php echo $id ?></th>
      <td> <?php echo $name; ?></td>
      <td><?php echo $company; ?></td>
      <td><?php echo $work_function; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $nxt_cnt; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

                    </div>
                    </div>
                </div>
                <div id="footer" class="footer-footer"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
}
} else {
echo mysql_error();
}
?>
 <?php
                //Release returned data
                mysqli_free_result($query_run);
            ?>
<?php mysqli_close($connection); ?>