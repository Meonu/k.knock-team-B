
    function right_login()
    {
        var userid = document.getElementById("userid").value;
        var userpw = document.getElementById("userpw").value;

        if(userid == '')
        {
            alert("아이디를 입력해주세요.");
            return false;
        }
        else if (userpw == '')
        {
            alert("비밀번호를 입력해주세요");
            return false;
        }
        else
        {
            alert("yeah");
            return true;
        }
    }