<?php
session_start();
?>
<html>
<body>
<?php
$_SESSION["favcolor"] = "blue";
$_SESSION["favnum"] = "1322";
print_r($_SESSION);

echo "<br>Session variables are set.";
?>
</body>
</html>