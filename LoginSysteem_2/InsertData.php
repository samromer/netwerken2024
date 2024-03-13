<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcbuilder";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error){ 
  die("Connection failed: " . $conn->connect_error);
}
// insert in de database
if(isset($_POST['verzenden'])){
    $sql = "
        INSERT INTO klantgegevens (voornaam,achternaam,email,tel,straat,huisnmr,postcode)  
        VALUES(
          '" . $_POST['voornaam'] . 
          "', '" . $_POST['achternaam'] . "', '" . $_POST['email'] . "', '" .
          $_POST['tel'] . "', '" . $_POST['straat'] . "', '" . $_POST['huisnmr'] .
          "', '" . $_POST['postcode'] .
        "');";

        

    $result = $conn ->query($sql);
   
    echo "<br>" . $result;
    if ($result)
    {
        echo "<br>U bent ingelogd!";
    }

    echo "<br><br>";
    echo "<a href=\"UserLogin.php\">Terug naar inloggen</a>";
    echo "<br>";
    echo "<a href=\"Componenten.php\">Ga naar de webshop.</a>";
    

}






?>