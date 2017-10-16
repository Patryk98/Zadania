<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />   
    <link rel="stylesheet" type="text/css" href="css.css" />
</head>
<body>

    <div id="container">
        <header>PORTAL FANÓW WYŚCIGÓW MOTORYZACYJNYCH</header>
        <nav>
            <ol>
                <li><a href="test.html">Strona główna</a></li>
                <li>F1
                <ul>
                    <li><a href="#">Fernando Alonso</a></li>
                    <li><a href="#">Robert Kubica</a></li>
                    <li><a href="#">Nico Rosberg</a></li>
                    <li><a href="#">Emerson Fittipaldi</a></li>
                    <li><a href="#">Ayrton Senna</a></li>
                </ul>
                </li>
                <li><a href="#">WRC</a></li>
                <li><a href="#">MotoGP</a>
                    <ul>
                        <li><a href="#">VR46</a></li>
                        <li><a href="#">MM93</a></li>
                        <li><a href="#">Sic58</a></li>
                        <li><a href="#">KA17</a></li>
                        <li><a href="#">CC35</a></li>
                    </ul>
                </li>
                <li><a href="logowanie.html">Zaloguj się</a></li>
            </ol>
        </nav>
        <div id="content">
            <h2>Witaj na naszej stronie</h2>
            <?php
                $pass = "haslo";
                $user = "user";
                if(isset($_POST["login"]))
                {
                    $login = $_POST["login"];
                }
                else
                {
                    $login = "anonymous";
                }
                if(isset($_POST["haslo"]))
                {
                    $haslo = $_POST["haslo"];
                }
                else
                {
                    $haslo = "wrong";
                }


                if($login == $user && $haslo == $pass)
                {
                    echo "Witaj: ".$user."<br/>";
                    if(isset($_POST["opcje"]))
                    {
                        echo "wybrałeś opcje: "."<br/>";
                        for($i=0;$i<count($_POST["opcje"]);$i++)
                        {
                            echo $_POST["opcje"][$i]."<br/>";
                        }
                    }
                    else
                    {
                        echo "Nie wybrałeś opcji";
                    }
                }
                else
                {
                    echo "Nie poprzwny login lub hasło";
                    echo "<form action='logowanie.html'>";
                    echo "<input type='submit' value='wróć do logowania'>";
                    echo"</form>";
                }
            ?>
        </div>
        <footer>&copy;&nbsp;Moto<span id="red">Race</span>&nbsp;2017</footer>
    </div>
</body>
</html>