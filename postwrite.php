<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>
<body>
    <h1>글쓰기</h1>
    <h4>자유로운 주제로 글을 작성해 보세요.</h4>
    <form action="./posting.php" method="post" id="posting">
    <table>
    <tr>
    <td>제목</td><td><input type = "text" name="title" id="title" placeholder="제목을 입력하세요." required></td>
    </tr>
    <tr>
    <td>글쓴이</td><td><input type = "text" name="name" id="name" placeholder="닉네임을 입력하세요." required></td>
    </tr>
    <tr>
    <td>내용</td><td><textarea name="content" id="content" cols=85 rows=20 required></textarea></td>
    </tr>
    <tr>
    <td>비밀번호</td><td><input type="password" name="pw" placeholder="password" size=10 maxlength="10" required></td>
    </tr>
    </table>
    <input type="submit" id="post_btn" value="완료">
    </form>
</body>
</html>