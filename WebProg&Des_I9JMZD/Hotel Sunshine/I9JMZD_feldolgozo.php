<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feldolgozó</title>
</head>
<body>
    <?php

    if(isset($_POST)){
        echo "<h2>Űrlap adatok:</h2>";

        $name = $_POST["name"];
        $email = $_POST["email"];
        $arrival = $_POST["arrival"];
        $nights = $_POST["nights"];
        $room = $_POST["room"];
        $favcolor = $_POST["favcolor"];
        $csomag = $_POST["csomag"];
        $opt = $_POST["opt"];
        $requests = $_POST ["requests"];

        echo "<p><strong>Teljes név: </strong>" . $name . "</p>";
        echo "<p><strong>Email: </strong>" . $email . "</p>";
        echo "<p><strong>Érkezés dátuma: </strong>" . $arrival . "</p>";
        echo "<p><strong>Éjszakák száma: </strong>" . $nights . "</p>";
        echo "<p><strong>Igényelt Szoba kategóriája: </strong>" . $room . "</p>";
        echo "<p><strong>Kedvenc szín: </strong>" . $favcolor . "</p>";
        echo "<p><strong>Wellnes csomag bérlet igénylése: </strong>" . $csomag . "</p>";
        echo "<p><strong>Extra szolgáltatások: </strong>" . $opt . "</p>";
        echo "<p><strong>Különleges kérések: </strong>" . $requests . "</p>";
    }else{
        echo "<h2>A foglalás nem lett elküldve!</h2>";
    }
    ?>

    <p>A foglalás sikeresen megtörtént.</p>


    <a href="I9JMZD_foglalas.html">Vissza a foglalásra.</a>
</body>
</html>