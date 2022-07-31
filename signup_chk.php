<?php

    include_once("connectSQL.php");

    $userid = $_POST["title"];

    $userpw = $_POST["userpw"];

    $name = $_POST["username"];

    $userphone = $_POST["userphone"];

    $email = $_POST["useremail"];

    echo "<h3>추가될 회원 정보는 {$username},{$userpw},{$name},{$userphone},{$email}</h3>";

?>