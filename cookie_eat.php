<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $_COOKIE["$userName, $firstName, $lastName"];
    if (isset($_COOKIE["cookie"])) {
        foreach ($_COOKIE["cookie"] as $key => $val) {
            echo $key . ' is ' . $val . "<br>\n";
        } //end foreach
    } //end if
    ?>

</body>

</html>