<!DOCTYPE html>
<?php
session_start();
session_destroy();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
    alert("로그아웃 되었습니다.");
    location.href= "../index.php";
</script>
</body>
</html>