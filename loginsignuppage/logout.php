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
    alert("You've been logged out");
    location.replace('index.php');
</script>
</body>
</html>