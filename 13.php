<html>
<head>
<style>
table, th, td 
{
  border: 1px solid black;
}
</style>
</head>
<body>
<form method="post">        
Enter a UserName: <input type="text" name="username"/><br> 
Enter a Password: <input type="text" name="password"/><br> 
Enter a Database name: <input type="text" name="dbname"/><br>
Enter a Table name: <input type="text" name="tbname"/><br>
Enrollment: <input type="text" name="enroll"/><br>
First name: <input type="text" name="fname"/><br> 
Last name: <input type="text" name="lname"/><br>
Email: <input type="text" name="email"/><br>
Date of Birth: <input type="text" name="dob"/><br>
Class: <input type="text" name="class"/><br>
Address: <input type="text" name="address"/><br>
<button type="submit">Submit</button>
</form> 
<?php 
if($_POST)
{ 
	$servername = "localhost"; 
	$username = $_POST['username'];
  $password = $_POST['password'];
  $dbname = $_POST['dbname'];
  $tbname = $_POST['tbname'];
  $enroll = $_POST["enroll"]; 
	$fname = $_POST["fname"]; 
	$lname = $_POST["lname"]; 
	$email = $_POST["email"]; 
	$dob = $_POST["dob"]; 
	$class = $_POST["class"]; 
	$address = $_POST["address"]; 
 
	$conn = new mysqli($servername, $username, $password, $dbname); 
		if ($conn->connect_error) { 
		die("Connection failed: " . $conn->connect_error); 
		} 
	$sql = "INSERT INTO $tbname (enroll, fname, lname, email, DOB, class,address) 
  VALUES ('{$enroll}','{$fname}','{$lname}','{$email}','{$dob}','{$class}','{$address}')"; 
		if ($conn->query($sql) === TRUE)
    { 
		  echo "Information Submitted Successfully"; 
    } 
		else 
    { 
			echo "Error: " . $sql . "<br>" . $conn->error; 
		} 
    $sql = "SELECT * FROM $tbname";
    $result=$conn->query($sql);
        if ($result->num_rows>0) 
        {
          echo "<table><tr><th>Enrollment</th><th>First Name</th><th>Last Name</th><th>Email</th><th>DOB</th><th>Stream</th><th>Address</th></tr>";
          while($row = $result->fetch_assoc()) 
          {
            echo "<tr><td>".$row["enroll"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["dob"]."</td><td>".$row["class"]."</td><td>".$row["address"]."</td></tr>";
          } 
        }
        else 
        {
          echo "No Records!!";
        }
        $conn->close();
	} 
?> 
</body>
</html>