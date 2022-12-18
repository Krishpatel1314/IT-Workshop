<form method="post">        
Enter a first Number: <input type="text" name="a"/><br> 
Enter a second Number: <input type="text" name="b"/><br> 
<button type="submit">Swap </button>  
</form>  
<?php   
    if($_POST)  
    {  
        $a = $_POST['a'];
        $b = $_POST['b'];
        echo "Numbers before swapping are:a=".$a." b=".$b;
        $t = $a;
        $a = $b;
        $b = $t;
        echo "<br>"."Numbers after swapping are:a=".$a." b=".$b;
    }     
?> 