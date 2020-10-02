<?php

$legitUsername = "nudes";
$legitPassword = "69";

print_r($_POST);
function login()
{
    $legitUsername = "nudes";
    $legitPassword = "69";

    if ($_POST["username"] == $legitUsername &&
        $_POST["password"] == $legitPassword
    ) {
        echo "Logged in congrats";
        header("Location: welcome.html");
    } else {
        header("Location: index.html");
    }
}
login();
