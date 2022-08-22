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
    <script>
        function logout()
        {
            session_unset();
            session_destroy();
        }
        function write()
        {
            location.href="./postwrite.php"
        }
    </script>
</head>
<body>
    <?php
        if (isset($_SESSION['userid'])) {
            echo "{$_SESSION['userid']}님 환영합니다  ";
        ?>
            <li>
                <a href="./loginsignuppage/logout.php">로그아웃</a>
            </li>
        <?php
        } else {
        ?>
            <li>
                <a href="./loginsignuppage/loginpage.php">회원가입 </a>
            </li>

            <li>
                <a href="./loginsignuppage/loginpage.php">로그인</a>
            </li>

        <?php
        }?>
        

        <h1>자유게시판</h1>
        <h4>글을 작성하고 공유하는 게시판입니다.</h4>
        
            <input type="button" value="글쓰기" onclick = "location.href='./postwrite.php'">
        <table class="list-table">
            <thead>
            <tr>
                <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <!-- 추천수 항목 추가 -->
                <th width="100">추천수</th>
                <th width="100">조회수</th>
            </tr>
            </thead>
        </table>
        <?php
        error_reporting(E_ALL); 
        ini_set("display_errors",1);
    
        $password = "kyw@514514514";
        
        $servername = "localhost";
    
        $user = "yeonugim";
    
        $DBname = "MEMBER_INFO";
     
    
        $connect = new mysqli($servername, $user, $password, $DBname);
        
        $sql = mysqli_query($connect,"select * from board order by no desc limit 0,10");
        while($board = $sql -> fetch_array())
        {
        ?>
        <table>
            <tr>
                <td width = "70"><?php echo $board['no']; ?></td>
                <td width = "500"><a href="viewpost.php?no=<?php echo $board['no']?>"><?php echo $board['title'];?></a></td>
                <td width = "120"><?php echo $board['name'];?></a></td>
                <td width = "100"><?php echo $board['date'];?></a></td>
                <td width = "100"><?php echo $board['thumb'];?></a></td>
                <td width = "100"><?php echo $board['view'];?></a></td>
            </tr>
        </table>
        <?php } ?>
        <p>
        
        <form action="./search.php">
        <select name="category">
            <option value="title">제목</option>
            <option value="name">글쓴이</option>
            <option value="content">내용</option>
        </select>
        <input type="text" name="search" placeholder="검색"><input type="submit" value="검색">
        </form>
        </p>
        


</body>
</html>