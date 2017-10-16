<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sprawdzian</title>
</head>
<body>
    <form action="odbierz.php" method="post">
        email: <input type="email" name="email" value=""><br/>
        Kobieta:<input type="radio" name="plec" value="Kobieta">
        Mężczyzna:<input type="radio" name="plec" value="Mężczyzna"><br/>
        Sporty: <br/>
        biegi: <input type="checkbox" name="sport[]" value="biegi"><br/>
        rower: <input type="checkbox" name="sport[]" value="rower"><br/>
        tenis: <input type="checkbox" name="sport[]" value="tenis"><br/>
        narty: <input type="checkbox" name="sport[]" value="narty"><br/>
        snowboard: <input type="checkbox" name="sport[]" value="snowboard"><br/>
        <input type="submit" value="wyślij">
    </form>
</body>
</html>