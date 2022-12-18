<html>
<head>
<style>
table, th, td {
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
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully!!<br>";
        $sql = "SELECT * FROM $tbname";
        $result=$conn->query($sql);
            if ($result->num_rows>0) 
            {
              echo "<table><tr><th>ID</th><th>Firstname</th><th>Lastname</th></tr>";
              while($row = $result->fetch_assoc()) 
              {
                echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td></tr>";
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