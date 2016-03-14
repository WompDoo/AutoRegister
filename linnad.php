<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div id="home">
    <p>Lisa autoregistri andmed andmebaasi:</p>

    <form action="add2.php" method="post">
        <p>Mark:</p>
        <input placeholder="Audi" class="lisama" name="mark" type="text">

        <p>RegistriNR:</p>
        <input placeholder="12345" class="lisama" name="RegNR" type="text">
        <br>
        <button style="margin-top: 10px;" class="submit" id="submit">Sisesta</button>
    </form>
</div>
<h1 style="font-family: century gothic;">Andmed andmebaasist:</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autoreg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from AUTO;";

$result = $conn->query($sql);

echo "
<form action='' method='post'>
<table class='tabl'>
<tr>
<th>id</th>
<th>mark</th>
<th>regnr</th>
<th>aasta</th>
<th>kuupäev</th>
</tr>";
// output data of each row
while ($row = $result->fetch_assoc()) {
    echo "<tr>
                <td>" . $row["auto_id"] . " </td>
                <td>" . $row["mark"] . " </td>
                <td> " . $row["RegNR"] . "</td>
                <td> " . $row["aasta"] . " </td>
                <td> " . $row["L_O_kuup"] . "</td>
                </tr>";
}

echo "</table>
   </form>";
$conn->close();
?>
</body>
</html>