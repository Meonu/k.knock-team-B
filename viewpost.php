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

        $query = "SELECT title, content, date, view, name, thumb from board where no = $no";
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
            <td>작성자<?php echo $rows['name'] ?></td>
        </tr>
        <tr>
            <td>조회수 0<?php echo $rows['view'] ?></td>
            <td>좋아요 0<?php echo $rows['thumb']?></td>
        </tr>
        <tr>
            <td><?php echo $rows['content'] ?></td>
        </tr>
        <tr>
            <td>작성일 <?php echo $rows['date']?></td>
        </tr>

    </table>
    <div align="center">
        <button onclick="location.href='./index.php'">목록으로</button>
        <button onclick="mdcheck();">수정하기</button>
        <button onclick="delcheck()">삭제하기</button>
    </div>

    <div class="reply">
        <h4>댓글</h4>

        <?php
        $sql = mysqli_query($connect,"select * from reply where post_num ='$no' order by no asc");
        while($reply = $sql -> fetch_array())
        {
        ?>
            <P>
            <div><?php echo $reply['name']; ?></div>
            <div><?php echo $reply['content']?></div>
            <div><?php echo $reply['date']?></div>
            </P>
        <?php } ?>
    </div>

    <div class="reply add">
        <form action="./replyadd.php" method="post">
            <p>
            <input type="text" name="rep_name" size="15" placeholder="아이디" required>
            <input type="password" name="rep_pw" size="15" placeholder="비밀번호" required>
            </p>
            <p><textarea name="rep_content" rows="8" cols="70" reqired></textarea></p>
            <input type="hidden" name="no" value="<?php echo $no?>">
            <input type="submit" value="댓글 작성">

        </form>

    </div>
</body>
</html>