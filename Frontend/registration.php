<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link

      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"

      rel="stylesheet"

    />

    <link rel="stylesheet" href="adminpage.css" />

    <title>Home</title>

  </head>

  <body>

    <nav>
    <div class="heading">

    <h4>Ration Shop Distribution System </h4>

    </div>

      <ul class="nav-links">

      <li><a class="home" href="adminpage.php">Home</a></li>
        <li><a href="search_user.php">Search</a></li>
        <li><a href="registration.php">Registration</a></li>
        <li><a href="sell.php">Sell</a></li>
        <li><a href="history.php">History</a></li>
        <li><a href="add_stock.php">Add_Stock</a></li>
        <li><a href="index.php">Logout</a></li>
        

      </ul>

    </nav>

    <!-- <div class="body-text"><h1>This is Home Page!</h1></div> -->

  </body>

</html>
<?php
$insert = false;
$insert1 = false;
if(isset($_POST['id']) ){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password,"DBMS");

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $id = $_POST['id'];
    $name = $_POST['name'];
    $income = $_POST['income'];



    if ($income<= 30000) {
      $color="yellow";
    } elseif ($income<= 100000) {
      $color="orange";
    } else {
      $color="white";
    }
    $family_count=$_POST['family_count'];
    // $contact = $_POST['contact'];
    $contact = $_POST['phone'];
    $city= $_POST['city'];
    // $sql ="INSERT INTO `customer_info` (`id`, `name`, `color`, `family_count`, `contact`, `city`) VALUES('$id', '$name', '$color', '$family_count','$contact', '$city');";

  









    $sql1 ="SELECT * FROM `customer_info` WHERE `id`='$id' ;";
    $result = $con->query($sql1);
    $rows = $result->fetch_assoc();
    if($rows['id']== true){
        // echo "Successfully inserted";
        // $sql=" UPDATE `remain_stock` SET `rice`=`rice`+'$rice', `wheat`=`wheat`+'$wheat', `sugar`=`sugar`+'$sugar'WHERE `id`='$id'; ";

    $insert1 = true;
        // $sql ="INSERT INTO `remain_stock` (`id`, `rice`, `wheat`, `sugar`) VALUES ('$id', '$rice', '$wheat', '$sugar');";

        // Flag for successful insertion
      
    }
    else{
      $sql ="INSERT INTO `customer_info` (`id`, `name`, `color`, `family_count`, `contact`, `city`) VALUES('$id', '$name', '$color', '$family_count','$contact', '$city');";

      if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
      }
      else{
          echo "ERROR: $sql <br> $con->error";
      }
    }
    
// Execute the query
    // if($con->query($sql) == true){
    //     // echo "Successfully inserted";

    //     // Flag for successful insertion
    //     $insert = true;
    // }
    // else{
    //     echo "ERROR: $sql <br> $con->error";
    // }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration  form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="container">
        <h1>Registration form</h3>
        <p>Enter customer details and submit this form </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Registration completed!!!!</p>";
        }
        if($insert1 == true){
          echo "<p class='submitMsg'>Data Already exits for that Id!!!</p>";
          }
  
    ?>
        <form action="registration.php" method="post">
            <input type="number" name="id" id="id" placeholder="Enter Id">
            <input type="text" name="name" id="name" placeholder="Enter customer name">
            <!-- <input type="text" name="color" id="color" placeholder="Enter customer card-color"> -->
            <input type="number" name="income" id="id" placeholder="Enter customer income">
            <input type="number" name="family_count" id="family_count" placeholder="Enter customer family count">
            <!-- <input type="number" name="contact" id="contact" placeholder="Enter customer number"> -->
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Enter custommer telephone number">
            <input type="text" name="city" id="city" placeholder="Enter customer city">
            <button class="btn">Submit</button> 
        </form>
    </div>
    
    
</body>
</html>
