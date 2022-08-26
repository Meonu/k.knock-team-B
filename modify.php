<?php
    error_reporting(E_ALL); 
    ini_set("display_errors",1);
    $no = $_POST['no'];
    
    $password = "kyw@514514514";
    
    $servername = "localhost";

    $user = "yeonugim";

    $DBname = "MEMBER_INFO";
 

    $connect = new mysqli($servername, $user, $password, $DBname);

    if (!$connect)
     echo "<h2>서버와의 연결 실패</h2>";
    $query = "select title, content, date, view, name from board where no = $no";
    $result = $connect -> query($query);
    $rows = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글 수정</title>
</head>
<body>
    <h1>게시글 수정</h1>
    <h4>글을 수정합니다.</h4>
        <div>
            <form action="modify_ok.php?no=<?php echo $no; ?>" method="post">
            <table>
            <tr>
                <td>작성자</td><td><?php echo $rows['name'] ?></td>
            </tr>
            <tr>
                <td>제목</td><td><input type="text" name="title" id="title" placeholder="제목" value="<?php echo $rows['title'] ?>"></td>
            </tr>
            <tr>
                <td>내용</td><td><textarea name="content" id="content" cols=85 rows=20 required><?php echo $rows['content'] ?></textarea></td>
            </tr>
            </table>
                <input type="submit" name="modyfy" value="수정">
            </form>
        </div>
    
</body>
</html>