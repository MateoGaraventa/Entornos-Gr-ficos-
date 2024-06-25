<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form
    $email = $_POST["email"];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "base2");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL query to check if the email exists in the table
    $sql = "SELECT nombre FROM alumnos WHERE mail = '$email'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if (mysqli_num_rows($result) > 0) {
        // Fetch the name from the result
        $row = mysqli_fetch_assoc($result);
        $nombre = $row["nombre"];

        // Store the name in a session variable
        $_SESSION["nombre"] = $nombre;

        // Redirect to the third page
        header("Location: third_page.php");
        exit;
    } else {
        // Email does not exist in the table, show an error message
        echo "Email does not exist";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

