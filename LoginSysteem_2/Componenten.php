<form action="Insertcomp.php" method="post">
<div class="inputrow">
    <label for="videokaart">Videokaart: </label>
    <input type="text" name="videokaart">
</div>
<div class="inputrow">
    <label for="processor">Processor: </label>
    <input type="text" name="processor">
</div>
<div class="inputrow">
    <label for="moederbord">Moederbord: </label>
    <input type="text" name="moederbord">
</div>
<div class="inputrow">
    <label for="geheugen">RAM geheugen: </label>
    <input type="text" name="ram">
</div>
<div class="inputrow">
    <label for="behuizing">Behuizing</label>
    <input type="text" name="behuizing">
</div>
<div class="inputrow">
    <label for="ssd">SSD: </label>
    <input type="text" name="ssd">
</div>
<div class="inputrow">
    <label for="hdd">HDD (word niet aanbevolen): </label>
    <input type="text" name="hdd">
</div>
<div class="inputRow">
    <label for="register"></label>
    <input type="submit" name="bestellen"value="bestellen">
</div>
</form>

<?php

echo "<a href=\"UserLogin.php\">Terug naar inloggen</a>";


?>