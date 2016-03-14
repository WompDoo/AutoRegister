
<?php
$servername = "localhost";
$username = "root";
$password = "";

// connect to mysql
$con = mysql_connect('localhost', 'root', '')
or die("ERR: Connection");

// connect to database
$db = mysql_select_db("autoreg", $con)
or die("ERR: Database");

$sql = "INSERT INTO AUTO(mark, RegNR, aasta, L_O_kuup, L_O_osaline, K_koef)
VALUES ('$_POST[mark]','$_POST[RegNR]','$_POST[aasta]','$_POST[L_O_kuup]','$_POST[L_O_osaline]','$_POST[K_koef]')";

$exec = mysql_query($sql, $con);
if (!$exec) die(mysql_error());

echo "Andmed on andmebaasi sisestatud!";

mysql_close($con)
?>
<a href="test.php">Suuna tagasi</a>





