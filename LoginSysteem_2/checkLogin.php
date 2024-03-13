<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcbuilder";

//connectie maken
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['verzenden'])) {
    $sql = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "' AND wachtwoord = '" . $_POST['wachtwoord'] . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        


        $_SESSION['users'] = $row;
        header('location: index1.php');

    } else {
        header('location: index1.php');
    }
}





?>