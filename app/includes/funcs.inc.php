<?php
  require 'connect.inc.php';
  



  function create_admin_table(){

    //creates table for the admin

    global $connection;
    $sql = "CREATE TABLE admins (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(30) NOT NULL,
      pass VARCHAR(30) NOT NULL  
    )";

    try{
      mysqli_query($connection, $sql);

      //TODO
      //confirm_query here

      echo "Table Created Successfully";
    }catch(Exception $e){
      mysqli_error($e);
    }
  }






  function encrypt($passw){

    // Encrypts the password and returns hashed string

    $options = [
      'cost' => 11,
      'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
    ];
    $hashed_pass = password_hash($passw , PASSWORD_BCRYPT, $options);
    return $hashed_pass;
  }







  function table_exist($table){

    //checks to see if a table already exists

    global $connection;
    if(mysqli_num_rows(mysqli_query($connection, "SHOW TABLES LIKE '".$table."'"))==1) 
      return true;
    else return false;

  }







  function create_customers_table(){

    //creates table for customers

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
      )";

    // if (mysqli_query($connection, $sql)) {
    //   echo "Table MyGuests created successfully";
    // } else {
    //   echo "Error creating table: " . mysqli_error($conn);
    // }

    try{
      mysqli_query($connection, $sql);

      //TODO
      //confirm_query here

      echo "Table Created Successfully";
    }catch(Exception $e){
      mysqli_error($e);
    }
  }
  




  function validate_admin($user, $pass){

    //validate username and password to know if that admin exists

    //TODO
    // encrypt the $pass, then compare with that on the database
    
    global $connection;
    $query = "SELECT * FROM `cim`.`admins` WHERE `username` = '$user' AND `pass` = '$pass'";
    if ($query_run = mysqli_query($connection, $query)){

        //TODO
        //confirm_query here

        if (mysqli_num_rows($query_run) == NULL) {
            echo 'INVALID login details';
            //return false;
        } else {
            // while ($query_row = mysqli_fetch_assoc($query_run)) {
            //     $fname = $query_row['Firstname'];
            //     $lname = $query_row['Lastname'];
            //     echo 'Welcome'. ' '.$fname.' '. $lname .'<br><br>';   }
            //redirect_to('../index.php');
            return true;
            }
    }else {
        //echo "Wrong Details";
        return false;
    }
  }






  function add_admin($user, $pass){
    global $connection;


    //TODO
    //Encrypt $pass before pasing it as a value
    //and also try to find a way to decrypt it and use it for validation

    //TODO
    //use test_data to check if input is clean before passing into the database
    
    
    $sql = "INSERT INTO `cim`.`admins`(`username`, `pass`) VALUES('$user', '$pass')";
    try{
      $query_run = mysqli_query($connection, $sql);

       //TODO
       //confirm_query here

    }catch (Exception $e){
      mysqli_error($e);
    }
 }






  function add_users(){
    // function to insert users into the user table when a user signsup


    //TODO
    // Encrypt $pass before pasing it as a value
    // save the key in the table
    // band also try to find a way to decrypt it and use it for validation

  }






  function validate_user($user, $pass){
    //Validate if user details exists like $username and $password

    //TODO
    // encrypt the $pass, then compare with that on the database   

  }



  
  function test_input($data){
    // To validate every_input before adding it into the database
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }




  function add_customer(){

    // add customers to the customer table

  }





  function redirect_to($new_location){

    // redirects user to a particular page

      header("Location: ". $new_location);
      exit;
  }

  



  function confirm_query($result_set){

    // function to test for database database failure

      if (!$result_set) {
      die("Database query failed.");
      }
  }




  
  function find_all_from($table_name, $table_id) {

    //   function to find all data from a certain table

      global $connection;

      $select_query  = "SELECT * FROM {$table_name} ";
      $select_query  .= "ORDER BY {$table_id} DESC";
      $result_set = mysqli_query($connection, $select_query);
      // Test if there was a query error
      confirm_query($result_set);

      return $result_set;
  }




  function create_user_table(){

    //creates table for users

    $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FName VARCHAR(50) NOT NULL,
    username VARCHAR(30) NOT NULL,
    pass VARCHAR(30) NOT NULL  
    )";

    try{
      mysqli_query($connection, $sql);

       //TODO
       //confirm_query here

      echo "Table Created Successfully";
    }catch(Exception $e){
      mysqli_error($e);
    }
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
