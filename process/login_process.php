<?php
    echo "로긴프로세스페이지";
    $conn = mysqli_connect('localhost','root','1234','nms');
    //입력받은 id와 password
    $id = $_POST['userId'];
    $pw = $_POST['userPw'];

    //아이디와 패스워드가 맞는지 검사
    $sqlstr = "select * from member where id='{$id}' AND pw='{$pw}'";
    $result = mysqli_query($conn, $sqlstr);
    $row = mysqli_fetch_array($result);
    if($row){
        //세션생성하기 
        session_start();
        $_SESSION['username'] = $row['name'];
        if(isset($_SESSION['username'])){
?>
        <script>
                alert('로그인 되었습니다.');
                location.href = '../index.php';
        </script>
<?php
        }
    }else {
?>
        <script>
                alert("아이디와 비밀번호가 맞지 않습니다.");
                location.href = '../index.php';
        </script>
<?php
    }
?>