<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Search query
if (isset($_POST['search'])) {
    $searchArray = $_POST['search'];

    $query = "SELECT * FROM buscador WHERE canciones IN ('" . implode("','", $searchArray) . "')";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Output the results
        while ($row = $result->fetch_assoc()) {
            echo "Song: " . $row['canciones'] . "<br>";
        }
    } else {
        echo "No songs found.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Song Search</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="search[]" placeholder="Enter song name">
        <input type="submit" value="Search">
    </form>
</body>
</html>