<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tester";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['headerStyle'])) {
    $HeaderStyle = $_POST['headerStyle'];
    $HeaderStyleString = '';


    foreach ($HeaderStyle as $key => $value) {
        // Concatenate the key and value, separated by a delimiter (e.g., colon), and append it to the string
        $HeaderStyleString .= $key . ':' . $value . '; '; // You can change the delimiter as needed
    }

    // Trim trailing semicolon and spaces
    $HeaderStyleString = rtrim($HeaderStyleString, '; ');

    // Prevent SQL injection
    $HeaderStyleString = mysqli_real_escape_string($conn, $HeaderStyleString);

    // SQL query to insert data into the database
    $sql = "INSERT INTO test (detail, css) VALUES ('again', '$HeaderStyleString')";

    if (mysqli_query($conn, $sql)) {
        echo $HeaderStyleString;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "headerStyle is not set.";
}
