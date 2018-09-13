<?php
  require 'connect.inc.php';
  
  function create_admin_table(){
    global $connection;
    $sql = "CREATE TABLE admins (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(30) NOT NULL,
      pass VARCHAR(30) NOT NULL  
    )";

    try{
      mysqli_query($connection, $sql);
      echo "Table Created Successfully";
    }catch(Exception $e){
      mysqli_error($e);
    }
  }
  function encrypt($passw){
    $options = [
      'cost' => 11,
      'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
    ];
    echo password_hash($passw , PASSWORD_BCRYPT, $options);
  }

  function table_exist($table){
    global $connection;
    if(mysqli_num_rows(mysqli_query($connection, "SHOW TABLES LIKE '".$table."'"))==1) 
      return true;
    else return false;
  }

  function create_customers_table(){
    global $connection;
    $sql = "CREATE TABLE customers (
      CustomerID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
      CustomerName VARCHAR(30) NOT NULL,
      Customer_company VARCHAR(30) NOT NULL,
      Customer_WorkFunction VARCHAR(50) NOT NULL,
      CustomerPhone VARCHAR(50) NOT NULL,
      CustomerEmail VARCHAR(50) NOT NULL,
      EstimatedSale (DECIMAL(15,2)) NOT NULL,
      LastContact DATETIME NOT NULL,
      NextAction VARCHAR(50) NULL,
      NextContact DATETIME NULL,
      LeadStatus VARCHAR(50) NULL,
      LeadSource VARCHAR(50) NULL,
      reg_date TIMESTAMP
      )";

    // if (mysqli_query($connection, $sql)) {
    //   echo "Table MyGuests created successfully";
    // } else {
    //   echo "Error creating table: " . mysqli_error($conn);
    // }

    try{
      mysqli_query($connection, $sql);
      echo "Table Created Successfully";
    }catch(Exception $e){
      mysqli_error($e);
    }

  }
  
  function insert_admin(){
    //passing a dictionary into the function and using them as the values being passed into the tables
    //$sql = "INSERT into admins VALUES 
  }

  function validate_admin($user, $pass){
    global $connection;
    $query = "SELECT * FROM `cim`.`admins` WHERE `username` = '$user' AND `pass` = '$pass'";
    if ($query_run = mysqli_query($connection, $query)){
        if (mysqli_num_rows($query_run) == NULL) {
            echo 'INVALID login details';
        } else {
            // while ($query_row = mysqli_fetch_assoc($query_run)) {
            //     $fname = $query_row['Firstname'];
            //     $lname = $query_row['Lastname'];
            //     echo 'Welcome'. ' '.$fname.' '. $lname .'<br><br>';   }
            redirect_to('../index.php');
            }
    }else {
        echo "Wrong Details";
  }
  }

  function add_admin($user, $pass){
    global $connection;

    $sql = "INSERT INTO admins(username, pass) VALUES({$user}, {$pass})";
    try{
      $query_run = mysql_query($query);
      echo 'Admin Added Successfully';
    }catch (Exception $e){
      mysqli_error($e);
    }
 }

  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function insert_customer(){

  }

  function redirect_to($new_location){
      header("Location: ". $new_location);
      exit;
  }

  // function to test for database database failure
  function confirm_query($result_set){
      if (!$result_set) {
      die("Database query failed.");
      }
  }

  //   function to find all data from a certain table
  function find_all_from($table_name, $table_id) {
      global $connection;

      $select_query  = "SELECT * FROM {$table_name} ";
      $select_query  .= "ORDER BY {$table_id} DESC";
      $result_set = mysqli_query($connection, $select_query);
      // Test if there was a query error
      confirm_query($result_set);

      return $result_set;
  }

  function create_user_table(){

  }
    
  function update_students(){
    global $connection;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dept = $_POST['dept'];
    $college = $_POST['college'];
    $level = $_POST['level'];
    // adding students to db
    $update_query = "INSERT INTO students (";
    $update_query .= " fname, lname, dept, college, level";
    $update_query .= ") VALUES (";
    $update_query .= " '{$fname}', '{$lname}', '{$dept}', '{$college}', {$level}";
    $update_query .= ")";
    $update_set = mysqli_query($connection, $update_query);
    
    return $update_set;
  }

  function search_div($action, $title) {
    $output = "<div class=\"search-container\">";
      $output .= "<form action=\"{$action}\">";
        $output .= "<p>{$title}</p>";
        $output .="<input type=\"text\" class=\"search-box\" placeholder=\"Search...\" name=\"search\">";
        $output .= "<button type=\"submit\"><img src=\"../img/search.png\" alt=\"search\"></button>";
      $output .= "</form>";
    $output .= "</div>";
  $output .= "</div>";

  return $output;
  }
?>
