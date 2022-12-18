<?php
    $myfile=fopen("5.txt","w") or die("Unable to open the file!");
    $a="PHP originally stood for Personal Home Page.<br>";
    fwrite($myfile,$a);
    echo readfile("5.txt");
    fclose($myfile);
    
?>