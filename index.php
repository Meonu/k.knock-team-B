<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 페이지 입니다.</title>
</head>
<body>
    <?php
        if (isset($_SESSION['userId'])) {
            echo "{$_SESSION['userId']}님 환영합니다  ";
        ?>
            <li class="nav-item d-flex align-items-center" onclick="logout()">로그아웃</li>
        <?php
        } else {
        ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./loginsignuppage/loginpage.html">회원가입 </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./loginsignuppage/loginpage.html">로그인</a>
            </li>

        <?php
        }
    ?>

    
</body>
</html>