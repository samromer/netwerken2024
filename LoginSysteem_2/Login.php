

<form action="checkLogin.php" method="post">
<div class="inputRow">
    <label for="email">Email</label>
    <input type="email" name="email" required>
</div>
<div class="inputRow">
    <label for="wachtwoord">Wachtwoord</label>
    <input type="text" name="wachtwoord" required>
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

include "checkLogin.php";
?>