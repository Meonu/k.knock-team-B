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

        $query = "SELECT title, content, date, view, name, thumb, filename from board where no = $no";
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
            var form = document.createElement('form'); // 폼객체 생성
        var objs;
        objs = document.createElement('input'); // 값이 들어있는 녀석의 형식
        objs.setAttribute('type', 'hidden'); // 값이 들어있는 녀석의 type
        objs.setAttribute('name', 'no'); // 객체이름
        objs.setAttribute('value', <?php echo $no?>); //객체값
        form.appendChild(objs);
        form.setAttribute('method', 'post'); //get,post 가능
        form.setAttribute('action', "./modify.php"); //보내는 url
        document.body.appendChild(form);
        form.submit();



        }
        function postdelete()
        {
            var form = document.createElement('form'); // 폼객체 생성
        var objs;
        objs = document.createElement('input'); // 값이 들어있는 녀석의 형식
        objs.setAttribute('type', 'hidden'); // 값이 들어있는 녀석의 type
        objs.setAttribute('name', 'no'); // 객체이름
        objs.setAttribute('value', <?php echo $no?>); //객체값
        form.appendChild(objs);
        form.setAttribute('method', 'post'); //get,post 가능
        form.setAttribute('action', "./deletepost.php"); //보내는 url
        document.body.appendChild(form);
        form.submit();
        }
        function modreply(a)
        {
            url = "./inputpw.php?no="+a+"&method=modreply";
            window.open(url,"chkpw","width = 550, height=250");
        }
        function deletereply(a)
        {
            url = "./inputpw.php?no="+a+"&method=deletereply";
            window.open(url,"chkpw","width = 550, height=250");
        }
       
        
    </script>
</head>
<body>
    <table align="center">
        <tr>
            <td><?php echo $rows['title'] ?></td>
        </tr>
        <tr>
            <td>파일 <a href="../../upload/<?php echo $rows['filename'];?>" download><?php echo $rows['filename']?></a></td>
        </tr>
        <tr>
            <td>작성자 <?php echo $rows['name'] ?></td>
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
            <div><a onclick=modreply(<?php echo $reply['no']?>)>[수정]</a>
                <a onclick=deletereply(<?php echo $reply['no']?>)>[삭제]</a></div>
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