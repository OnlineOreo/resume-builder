<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tester";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['test']) && isset($_POST['style'])) {
    $test = $_POST['test'];
    $style = $_POST['style'];
    $styleString = '';

    // Iterate over the associative array
    foreach ($style as $key => $value) {
        // Concatenate the key and value, separated by a delimiter (e.g., colon), and append it to the string
        $styleString .= $key . ':' . $value . '; '; // You can change the delimiter as needed
    }

    // Remove the trailing comma and space
    $styleString = rtrim($styleString, '; ');

    echo $styleString; // Output the concatenated string

}