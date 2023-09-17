<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8" />

	<meta name="viewport"
		content="width=device-width, initial-scale=1.0" />

	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
		rel="stylesheet" />

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
<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'DBMS';

// Server is localhost with
// port number 3306
$servername = 'localhost:3306';
$mysqli = new mysqli(
	$servername,
	$user,
	$password,
	$database
);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
		$mysqli->connect_errno . ') ' .
		$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM customer_info ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 3% auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
				' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}

		.left {
			display: inline-block;
			width: 50%;
			height: 50em;
		}

		.right {
			display: inline-block;
			width: 49%;
			height: 50em;
			/* background-image: url(MODI.jpg); */
			background-repeat: no-repeat;
		}

		#information {
			color: black;
			background-color: #E4F5D4;
			text-align: center;
			margin-bottom: 8px;
			height: 79px;
			padding: 41px;

		}
	

		#suser {
			align-self: auto;
			margin-left: 36%;
			margin-top: 3%;
		}

		input,
		textarea {

			border: 2px solid black;
			border-radius: 6px;
			outline: none;
			font-size: 16px;
			/* size: 10px; */
			width: 44%;
			/* margin: 11px 0px;
			padding: 7px; */
		}


		#btn {
			color: white;
			background: purple;
			/* background-color: #E4F5D4; */
			padding: 7px 8px;
			font-size: 20px;
			border: 2px solid white;
			border-radius: 14px;
			cursor: pointer;
			margin-left: 17%;
			margin-top: 1.5%;
			width: 15%;
		}
		#seh{
			margin-left:15% ;
			/* padding: 5%; */
			/* background-color: #E4F5D4; */
		}
	</style>
</head>

<body>
	<div>
		<form id="suser" action="search_user.php"
			method="post">
			<h3 id="seh">Search Stock</h3>
			<input type="number" name="search" placeholder="Enter the Id"><br>
			<input id="btn" type="submit" >
		</form>
	</div>
	<div class="right">

		<table>
			<!-- <h1>Customer info</h1> -->
			<caption>
				<h1>Customer info</h1>
			</caption>
			<tr>

				<th>id</th>
				<th>customer_name</th>
				<th>color</th>
				<th>family count</th>
				<th>contact</th>
				<th>city</th>
			</tr>
			<?php
            $user = 'root';
            $password = '';

            // Database name is geeksforgeeks
            $database = 'DBMS';

            // Server is localhost with
            // port number 3306
            $servername = 'localhost:3306';
            $mysqli = new mysqli(
            	$servername,
            	$user,
            	$password,
            	$database
            );

            // Checking for connections
            if ($mysqli->connect_error) {
	            die('Connect Error (' .
	            	$mysqli->connect_errno . ') ' .
	            	$mysqli->connect_error);
            }

            // SQL query to select data from database
            $sql = " SELECT * FROM customer_info ";
            $result = $mysqli->query($sql);

            while ($rows = $result->fetch_assoc()) {
            ?>
			<tr>
				<td>
					<?php echo $rows['id']; ?>
				</td>
				<td>
					<?php echo $rows['name']; ?>
				</td>
				<td>
					<?php echo $rows['color']; ?>
				</td>
				<td>
					<?php echo $rows['family_count']; ?>
				</td>
				<td>
					<?php echo $rows['contact']; ?>
				</td>
				<td>
					<?php echo $rows['city']; ?>
				</td>
			</tr>
			<?php
            }
            ?>
		</table>






	</div>
	<div class="left">
		<table>
			<!-- <h1>Customer info</h1> -->
			<caption>
				<h1>Remaining stock</h1>
			</caption>
			<tr>

				<th>id</th>
				<!-- <th>name</th>
				<th>family_count</th> -->
				<th>rice(in kg)</th>
				<th>wheat(in kg)</th>
				<th>sugar(in kg)</th>
			</tr>
			<?php
            $search = $_POST['search'];

            $server = "localhost";
            $username = "root";
            $password = "";

            // Create a database connection
            $conn = mysqli_connect($server, $username, $password, "DBMS");

            if ($conn->connect_error) {
	            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM `remain_stock` WHERE id = '$search'";
            // Execute the query
            
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
	            while ($rows = $result->fetch_assoc()) {
            ?>
			<tr>
				<td>
					<?php echo $rows['id']; ?>
				</td>
				<!-- <td>
					<?php echo $rows['name']; ?>
				</td>
				<td>
					<?php echo $rows['family_count']; ?>
				</td> -->
				<td>
					<?php echo $rows['rice']; ?>
				</td>
				<td>
					<?php echo $rows['wheat']; ?>
				</td>
				<td>
					<?php echo $rows['sugar']; ?>
				</td>
			</tr>
			<?php
	            }
            }
            ?>
		</table>





	</div>
	<div id="information">
		Lorem ipsum, dolor sit amet consectetur adipisicing
		elit. Placeat, esse reprehenderit repellat quam modi
		quos iure voluptatibus.
		Iure, dolores odit? Laboriosam voluptatem minus
		voluptatum nobis accusantium provident voluptatibus
		ad
		sit? Possimus officia velit alias. Dolor omnis,
		incidunt
		minima veniam, iure, vel suscipit
		ipsam rerum ea commodi unde minus mollitia aliquam.
	</div>
</body>

</html>