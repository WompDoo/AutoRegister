<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div id="home">
    <a href="index.php">tagasi</a>
    <p>Lisa linnade tabelisse andmed:</p>

    <form action="add2.php" method="post">
        <p>Linn:</p>
        <input placeholder="Tartu" class="lisama" name="mark" type="text">

        <p>Rahvaarv:</p>
        <input placeholder="50000" class="lisama" name="RegNR" type="text">
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

$sql = "select * from LINNAD;";

$result = $conn->query($sql);

echo "
<form action='' method='post'>
<table class='tabl'>
<tr>
<th>id</th>
<th>nimi</th>
<th>rahvaarv</th>
</tr>";
// output data of each row
while ($row = $result->fetch_assoc()) {
    echo "<tr>
                <td>" . $row["LinnID"] . " </td>
                <td>" . $row["Nimi"] . " </td>
                <td> " . $row["Rahvaarv"] . "</td>
                </tr>";
}

echo "</table>
   </form>";
$conn->close();
?>
</body>
</html>