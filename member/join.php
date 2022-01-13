<?php
    $islogin = "여러분";
    echo $islogin;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            width: 300px;
        }
    </style>
</head>
<body>
    <div>
        <h1>회원가입</h1>
        <form action="../process/join_process.php" method="post" id="joinForm">
            <table>
                <tr>
                    <td>이름</td>
                    <td><input type="text" name="userName" id="userName"></td>
                </tr>
                <tr>
                    <td>아이디</td>
                    <td><input type="text" name="userId" id="userId" ></td>
                </tr>
                <tr>
                    <td>비밀번호</td>
                    <td><input type="password" name="userPw" id="userPw" placeholder="비밀번호는 8자리로 입력해주세요"></td>
                </tr>
                <tr>
                    <td>비밀번호체크</td>
                    <td><input type="password" name="userPwch" id="userPwch" placeholder="비밀번호와 일치하게 입력해주세요"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="button" id="joinButton">회원가입</button>
                        <button type="reset">취소</button>
                    </td>
                </tr>
            </table>
        </form>
        <script>
            const joinForm = document.querySelector('#joinForm');
            const joinBtn = document.querySelector('#joinButton');
            const pw = document.querySelector('#userPw');
            const pwch = document.querySelector('#userPwch');
            const id = document.querySelector('#userId');
            const name = document.querySelector('#userName');
        
            joinBtn.addEventListener('click',function(){
                //아이디,네임,패스워드,패스워드 체크의 값이 입력되었는지
                if(id.value != "" && name.value != "" && pw.value != "" && pwch.value != ""){
                        console.log(pw.value.length);
                        if(pw.value.length == 8){
                            if(pw.value == pwch.value){
                            joinForm.submit();
                            }else {
                            alert('비밀번호와 비밀번호체크가 일치하지 않습니다.');
                            return false;
                            }
                        }else {
                            alert('비밀번호는 8자리로 해주세요');
                            return false;
                        }
                    } 
                else {
                    alert("입력칸을 다 입력해주세요.");
                    return false;
                }
               
            })
        </script>
    </div>
</body>
</html>