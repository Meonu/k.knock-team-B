function check()
    {
        var userid = document.getElementById("userid").value;
        if(userid)
        {
            url = "idcheck.php?userid="+userid;
            window.open(url,"chkid","width = 400, height=200");
        }
        else
        {
            alert("아이디를 입력하세요.");
            return 0;
        }
    }
    function rightsign()
    {
        var userid = document.getElementById("decide_id").value;
        var userpw = document.getElementById("userpw").value;
        var pwconfirm = document.getElementById("pwconfirm").value;

        var username = document.getElementById("username").value;

        var userphone = document.getElementById("userphone").value;

        if(userid == '')
        {
            alert("아이디를 입력해주세요.");
            return false;
        }
        else if(length(userid) < 6)
        {
            alert("6자 이상 입력해주세요.");
            return false;
        }
        else if(userpw == '')
        {
            alert("비밀번호를 입력해주세요.");
            return false;
        }
        else if(length(userpw) < 9)
        {
            alert("비밀번호는 9자 이상의 문자열이어야 합니다.");
        }
        else if((userpw == pwconfirm) == false)
        {
            alert("비밀번호가 일치하지 않습니다.");
            return false;
        }
        else if(username == '')
        {
            alert("이름을 입력해주세요.");
            return false;
        }
        else return true;
    }
    function decide()
    {
        document.getElementById("decide").innerHTML = "<span style='color:blue;'>사용 가능한 ID 입니다.</span>"
        document.getElementById("decide_id").value = document.getElementById("userid").value
        document.getElementById("userid").disabled = true
        document.getElementById("SignUp_btn").disabled = false
        document.getElementById("checkbutton").value = "다른 ID로변경"
        document.getElementById("checkbutton").setAttribute("onclick","change()")
    }
    function change(){
	    document.getElementById("decide").innerHTML = "<span style='color:red;'>ID 중복 여부를 확인해주세요.</span>"
	    document.getElementById("userid").disabled = false
	    document.getElementById("userid").value = ""
        document.getElementById("decide_id") = null
	    document.getElementById("SignUp_btn").disabled = true
	    document.getElementById("checkbutton").value = "ID 중복 검사"
	    document.getElementById("checkbutton").setAttribute("onclick", "check()")
    }