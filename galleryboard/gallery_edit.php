<?php 
    echo $_POST['no'];
    //데이터베이스 접근할수 있도록 선을 만듬
    $conn = mysqli_connect('localhost','root','1234','nms');
    //select쿼리문 작성
    $sqlstr = "select * from galleryboard where no={$_POST['no']}";
   
    //데이터베이스에 연결된 선으로 쿼리문을 실행 -> 결과는 result에 할당
    $result = mysqli_query($conn, $sqlstr);
    //결과값을 php에서 사용가능한 배열타입으로 변환
    $row = mysqli_fetch_array($result);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
             h1 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 0 auto;
        }
        table, td {
            border: 1px solid #ccc;
        }
        td {
            padding: 16px;
        }
        p { text-align: center;}
    </style>
</head>
<body>
  
    <h1>gallery 게시글 보기</h1>
    <form action="../process/gallery_edit_process.php" method="post" 
    enctype="multipart/form-data">
    <input type="hidden" name="no" value="<?=$_POST['no']?>">
    <table>
        <tr>
            <td>제목</td>
            <td><input  type="text" value="<?=$row['title']?>" name="title">
            </td>
        </tr>
        <tr>
            <td>글쓴이</td>
            <td><input  type="text" value="<?=$row['writer']?>" name="writer">
            </td>
        </tr>
        <tr>
            <td>내용</td>
            <td>
                <input type="file" value="<?=$row['imgsrc']?>" name="imgsrc">
                <br>
                <textarea name="desc" id="desc" cols="30" rows="10">
                <?=$row['description']?>
                </textarea>
               
            </td>
        </tr>
    </table>
    <button onclick="location.href='gallery_list.php'">갤러리게시판</button>
    <button type="submit">수정하기</button>
    </form>
    <form action="../process/gallery_delete_process.php" method="post">
    <input type="hidden" name="no" value="<?=$_POST['no']?>">
    <button type="submit">삭제하기</button>
    </form>
</body>
</html>