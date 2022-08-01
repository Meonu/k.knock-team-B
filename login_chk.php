<?php

$connect = new mysqli("localhost","yeonugim","kyw@514514514","MEMBER_INFO");

if(!$connect)
{
    echo "<h2>연결을 실패하였습니다.</h2>";
}

$userid = $_POST["userid"];
$userpw = $_POST["userpw"];






?>