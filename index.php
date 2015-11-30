<?php
$test = "works";

$con = mysql_connect('br-cdbr-azure-south-a.cloudapp.net', 'b1d71881ca3bdb', '06bea04b');

if(!$con) die("no conection " . mysql_error());

?>
<html>
	<h1><?php echo($test); ?></h1>
</html>