const sendit = () => {
    const userid = document.regiform.userid;
}
if(userid.value == '') {
    alert('아이디를 입력해주세요.');
    userid.focus();
    return false;
}