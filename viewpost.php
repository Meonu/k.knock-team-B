<?php
    session_start();
    $no=$_GET['no'];
    error_reporting(E_ALL); 
    ini_set("display_errors",1);

    $password = "kyw@514514514";
    
    $servername = "localhost";

    $user = "yeonugim";

    $DBname = "MEMBER_INFO";
 

    $connect = new mysqli($servername, $user, $password, $DBname);

        $query = "SELECT title, content, date, view, name from board where no = $no";
        $result = $connect -> query($query);
        $rows = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $rows['title']; ?></title>
    <script>
        function mdcheck()
        {  
            url = "./inputpw.php?no=<?php echo $no ?>&method=modify";
            window.open(url,"chkpw","width = 400, height=200");
        }
        function delcheck()
        {
            url = "./inputpw.php?no=<?php echo $no ?>&method=delete";
            window.open(url,"chkpw","width = 400, height=200");
        }
        function postmodify()
        {
            location.href = "./modify.php?no=<?php echo $no ?>;"
        }
        function postdelete()
        {
            location.href = "./deletepost.php?no=<?php echo $no ?>"
        }
    </script>
</head>
<body>
    <table align="center">
        <tr>
            <td><?php echo $rows['title'] ?></td>
        </tr>
        <tr>
            <td>작성자</td><td><?php echo $rows['name'] ?></td>
            <td>조회수</td><td><?php echo $rows['view'] ?></td>
        </tr>
        <tr>
            <td><?php echo $rows['content'] ?></td>
        </tr>

    </table>
    <div align="center">
        <button onclick="location.href='./index.php'">목록으로</button>
        <button onclick="mdcheck();">수정하기</button>
        <button onclick="delcheck()">삭제하기</button>
    </div>
</body>
</html>