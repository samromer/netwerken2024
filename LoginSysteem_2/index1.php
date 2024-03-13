<?php

require("databaseFunctions.php");
    
$conn = new mysqli($servername, $username, $password, $dbname);
// connectie maken
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
    $sql = "SELECT * FROM bestellingen";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);


    if(!isset($_SESSION['users'])){
        print_r($_SESSION['users']); 
        header("location: Login.php");
        exit;
    }

     print_r($_SESSION['users']);
     echo "U bent ingelogd:";
    echo "<br>";
    echo "Bekijk hieronder alle bestellingen: ";
    echo "<br><br>";
    // bestellingen weergeven
    foreach($data as $row)
   {
    echo "Klant ID: " . $row["KlantID"] . "<br>" . 
  "Videokaart: " . $row["videokaart"]. "<br>" .
   "Processor: " . $row["processor"]. "<br>" .
    "Moederbord: " . $row["moederbord"]. "<br>" .
     "RAM geheugen: " . $row["RAM"]. "<br>" .
     "Behuizing: " .  $row["behuizing"]. "<br>" .
      "SSD: " .  $row["SSD"]. "<br>" .
        "HDD: " . $row["HDD"] . "<br><br>";
   }
    echo "<br><br>";
  
?>

<a href="logout.php">logout</a>