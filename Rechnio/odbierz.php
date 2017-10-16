<?php
if(isset($_POST["email"]) && isset($_POST["plec"]) && isset($_POST["sport"]))
{
    $mail = $_POST["email"];
    if($mail != "")
    {
    echo "kontakt do ciebie".$mail."<br />";
    $plec = $_POST["plec"];
    echo $plec."<br/>";
    if(count($_POST["sport"])>=1){
    foreach ($_POST["sport"] as $sport)
    {
        echo $sport.", ";
    }
}
}
else{
    ?>
    <form action="index.php">
        <input type="submit" value="powrót">
    </form>
    <?php
}
}
else
{
    ?>
    <form action="index.php">
        <input type="submit" value="powrót">
    </form>
    <?php
}
?>