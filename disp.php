<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blood bank";
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

/*$sql = "CREATE DATABASE blood bank"; //database created 
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}*/

$sql = "CREATE TABLE donar (
name VARCHAR(30) NOT NULL,
age INT(2),
address VARCHAR(30) NOT NULL,
email VARCHAR(50),
mob VARCHAR(10) NOT NULL,
BG VARCHAR(10) NOT NULL,
sex VARCHAR(10) NOT NULL,
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Donar created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


$sql = "INSERT INTO donar ()
        VALUES ('".$_GET["name"]."','".$_GET["age"]."','".$_GET["address"]."','".$_GET["email"]."','".$_GET["mob"]."','".$_GET["BG"]."','".$_GET["sex"]."')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "SELECT * FROM donar";
$result = mysqli_query($conn, $sql);
//$sql1 = "SELECT * FROM donar where BG='AB+'";// to filter the results according to the Blood group type or any other thing mentioned.
//$result1 = mysqli_query($conn, $sql1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Table display</title>
</head>
<body>
<table>
	<tr>
	<th>
		Name
	</th>
	<th>
		Age
	</th>
	<th>
		Address
	</th>
	<th>
		E-mail
	</th>
	<th>
		Mob
	</th>
	<th>
		BG
	</th>
	<th>
		sex
	</th>
	</tr>
			<?php
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
     {
         echo  "<tr><td>".$row["name"]."</td>"."<td>". $row["age"]."</td><td>". $row["address"]."</td><td>". $row["email"]."</td><td>". $row["mob"]."</td><td>". $row["BG"]."</td><td>". $row["sex"]."</td></tr>". "<br>";
    }
} 
else 
{
    echo "0 results";
}
if (mysqli_num_rows($result1) > 0) 
{
    while($row = mysqli_fetch_assoc($result1))
     {
         echo  "<tr><td>".$row["name"]."</td>"."<td>". $row["age"]."</td><td>". $row["address"]."</td><td>". $row["email"]."</td><td>". $row["mob"]."</td><td>". $row["BG"]."</td><td>". $row["sex"]."</td></tr>". "<br>";
    }
} 
else 
{
    echo "0 results";
}
?>
</table>
</body>
</html>
