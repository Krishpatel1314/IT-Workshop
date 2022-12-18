<form method="post">        
Enter a Number: <input type="text" name="a"/><br>  
<button type="submit">Check</button>  
</form>  
<?php   
    if($_POST)  
    {
        $a = $_POST['a'];  
        $b = strrev($a);  
        if($a == $b)
        {  
            echo "The number is Palindrome";     
        }else
        {  
            echo "The number is not a Palindrome";   
        }  
    }     
?> 
