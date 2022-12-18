<?php
    $a=array("Krish","Diya","Shreya");
    $b=array("CSE","IT","BBA","CSE");
    print_r($a);
    echo "<br>";
    print_r($b);
    echo "<br>";
    array_push($a,"Herin");
    echo "After Pushing an element: ";
    print_r($a);
    echo "<br>";
    array_pop($a);
    echo "After Poping an element: ";
    print_r($a);
    echo "<br>";
    echo "Unique element of Array: ";
    print_r(array_unique($b));
    echo "<br>";
    echo "Merging of two Array: ";
    print_r(array_merge($a,$b));
?>