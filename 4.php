<!-- <?php
    $a=array("Krish","Mayank","Shreya");
    $b=count($a);
    print_r($a);
    echo "<br>";
    echo "Total value in Array:";
    print_r($b);
    echo "<br>";
    echo "<br>";
    $c["first"]="Krish";
    $c["last"]="Patel";
    $c["age"]="19";
    print_r($c);
?> -->

<?php
    $a=array(13,25,93,67,44);
    echo print_r($a);
    echo "<br>";
    echo "Total no. of elements:";
    echo count($a);
    echo "<br>";
    echo "Sum:";
    echo array_sum($a);
    echo "<br>";
    echo "Reverse Array:";
    echo print_r(array_reverse($a));
    echo "<br>";
    echo "Each :";
    print_r(each($a));
?>