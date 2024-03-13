<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcbuilder";

//connectie  maken
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error){ 
  die("Connection failed: " . $conn->connect_error);
}
  
if(isset($_POST['bestellen'])){
    $sql = "
        INSERT INTO bestellingen (videokaart,processor,moederbord,RAM,behuizing,SSD,HDD)  
        VALUES(
          '" . $_POST['videokaart'] . 
          "', '" . $_POST['processor'] . "', '" . $_POST['moederbord'] . "', '" .
          $_POST['ram'] . "', '" . $_POST['behuizing'] . "', '" . $_POST['ssd'] .
          "', '" . $_POST['hdd'] .
        "');";

        

    $result = $conn ->query($sql);
   
          //bestelde items weergeven
    if ($result)
    {
        echo "<br>Bedankt voor het bestellen!";
          echo "<br>";
           echo "Bekijk hieronder voor uw bestelde items: ";
            echo "<br>";
            echo "<br>";
              echo "Videokaart: " . $_POST['videokaart'] . "<br>" . "Processor: " .$_POST['processor'] . 
               "<br>". "Moederbord: " .$_POST['moederbord'] . "<br>". "RAM: " .$_POST['ram'] . 
                  "<br>". "Behuizing: " .$_POST['behuizing'] . "<br>". "SSD: " .$_POST['ssd'] .
                     "<br>" . "HDD: " .$_POST['hdd'] . "<br>";
    }
    echo "<br>";
    echo "<a href=\"Componenten.php\">Ga terug naar de webshop.</a>";
    
}





?>