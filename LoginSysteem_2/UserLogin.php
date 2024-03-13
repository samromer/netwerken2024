<form action="InsertData.php" method="post">
<div class="inputRow">
    <label for="email">Email</label>
    <input type="email" name="email">
</div>
<div class="inputRow">
    <label for="voornaam">Voornaam</label>
    <input type="text" name="voornaam">
</div>
<div class="inputRow">
    <label for="achternaam">Achternaam</label>
    <input type="text" name="achternaam">
</div>
<div class="inputRow">
    <label for="tel">Telefoonnummer</label>
    <input type="text" name="tel">
</div>
<div class="inputRow">
    <label for="straat">StraatNaam</label>
    <input type="text" name="straat">
</div>

<div class="inputRow">
    <label for="huisnmr">Huisnummer</label>
    <input type="text" name="huisnmr">
</div>
<div class="inputRow">
    <label for="postcode">Postcode</label>
    <input type="text" name="postcode">
</div>

<div class="inputRow">
    <label for="register">Verzenden</label>
    <input type="submit" name="verzenden"value="verzenden">
</div>
</form>



<?php


if(isset($_POST['sendForm'])){
    print_r($_POST);
}


?>