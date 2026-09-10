<?php

$name = $_POST["name"] ?? "";
$birthdate = $_POST["birthdate"] ?? "";
$color = $_POST["color"] ?? "";
$place = $_POST["place"] ?? "";
$nickname = $_POST["nickname"] ?? "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Matthew Perkins Wk 2 Performance Assessment</title>
</head>

<body>

    <h1>Matthew Perkins Wk 2 Performance Assessment</h1>

    <form method="POST">

        <p>
            <strong>Enter your name:</strong>
            <input type="text" name="name">
        </p>

        <p>
            <strong>Enter your birthdate:</strong>
            <input type="text" name="birthdate">
        </p>

        <p>
            <strong>Enter your favorite color:</strong>
            <input type="text" name="color">
        </p>

        <p>
            <strong>Enter your favorite place to visit:</strong>
            <input type="text" name="place">
        </p>

        <p>
            <strong>Enter your nickname:</strong>
            <input type="text" name="nickname">
        </p>

        <button type="submit">Submit Values</button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        

        if ($name != "") {
            echo "<p><strong>The name you entered is: "
                . htmlspecialchars($name)
                . "</strong></p>";
        } else {
            echo "<p><strong>You didn't enter a name!</strong></p>";
        }

        if ($birthdate != "") {
            echo "<p><strong>The birthdate you gave is: "
                . htmlspecialchars($birthdate)
                . "</strong></p>";
        } else {
            echo "<p><strong>You didn't enter a birthdate!</strong></p>";
        }

        if ($color != "") {
            echo "<p><strong>You said your favorite color is: "
                . htmlspecialchars($color)
                . "</strong></p>";
        } else {
            echo "<p><strong>You didn't enter a favorite color!</strong></p>";
        }

        if ($place != "") {
            echo "<p><strong>You said your favorite place is: "
                . htmlspecialchars($place)
                . "</strong></p>";
        } else {
            echo "<p><strong>You didn't enter a favorite place!</strong></p>";
        }

        if ($nickname != "") {
            echo "<p><strong>You said your nickname is: "
                . htmlspecialchars($nickname)
                . "</strong></p>";
        } else {
            echo "<p><strong>You didn't enter a nickname!</strong></p>";
        }
    }

    ?>

</body>

</html>