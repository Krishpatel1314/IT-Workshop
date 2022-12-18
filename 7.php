<form method="post">        
Enter a UserName: <input type="text" name="username"/><br> 
Enter a Password: <input type="text" name="password"/><br> 
Enter a Database name: <input type="text" name="dbname"/><br> 
<button type="submit">Submit</button>  
</form> 
<?php
    if($_POST)
    {
        $servername = "localhost";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $dbname = $_POST['dbname'];

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully!!<br>";
        $sql = "CREATE DATABASE $dbname";
        if ($conn->query($sql) === TRUE) 
        {
            echo "Database created successfully!!<br>";
        } 
        else 
        {
            echo "Error creating database: " . $conn->error;
        }
    
        $sql = "DROP DATABASE $dbname";
        if ($conn->query($sql) === TRUE) 
        {
            echo "Database deleted successfully!!<br>";
        } 
        else 
        {
            echo "Error creating database: " . $conn->error;
        }
        $conn->close();   
    } 
?>