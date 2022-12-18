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
        $sql = "CREATE TABLE $tbname (
            id INT(6) PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL)";
            if ($conn->query($sql) === TRUE) {
              echo "Table $tbname created successfully!!";
            } else {
              echo "Error creating table: " . $conn->error;
            }
            $conn->close();
    }
?>