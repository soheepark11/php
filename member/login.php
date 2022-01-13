<?php
    echo $islogin;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>로그인</h1>
    <table>
        <form action="../process/login_process.php" id="loginForm" method="post">
        <tr>
            <td>아이디</td>
            <td><input type="text" name="userId" id="userId"></td>
            <td rowspan="2">
                <button id="loginBtn">Login</button>
            </td>
        </tr>
        <tr>
            <td>비밀번호</td>
            <td><input type="password" name="userPw" id="userPw"></td>
        </tr>
        <tr>
            <td colspan="3"></td>
        </tr>
        </form>
    </table>
    <script>
        const loginForm = document.querySelector('#loginForm');
        const loginBtn = document.querySelector('#loginBtn');
        const userid = document.querySelector('#userId');
        const userpw = document.querySelector('#userPw');
        if(userid.value != "" && userpw.value != ""){
            if(userpw.value.length == 8){
                loginForm.submit();
            }else {
                alert('비밀번호는 8자리로 입력해주세요');
            }   
        }else {
            alert("아이디와 비밀번호를 입력해주세요");
        }
    </script>
</body>
</html>