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
    </style>
</head>
<body>
    <h1>갤러리 게시판 글쓰기</h1>
    <form action="../process/gallery_write_process.php" method="post" enctype="multipart/form-data" id="imgForm">
        <table>
            <tr>
                <td>글쓴이</td>
                <td><input type="text" name="writer" id="writer" ></td>
            </tr>
            <tr>
                <td>제목</td>
                <td><input type="text" name="title" id="title"></td>
            </tr>
            <tr>
                <td>이미지등록</td>
                <td><input type="file" name="fileimg" id="fileimg"></td>
            </tr>
            <tr>
                <td>내용</td>
                <td>
                    <textarea name="desc" cols="50" rows="10" id="desc">

                    </textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" value="글적기" id="writebtn">
                    <input type="reset" value="취소">
                    <input type="button" onclick="location.href='gallery_list.php'" value="글보기">
                </td>
            </tr>
        </table>
    </form>
    <script>
        const form = document.querySelector('#imgForm');
        const btn = document.querySelector('#writebtn');
        const title = document.querySelector('#title');
        const writer = document.querySelector('#writer');
        const desc = document.querySelector('#desc');
        const fileimg = document.querySelector('#fileimg');
        btn.addEventListener('click',function(){
            if(fileimg.value != "" && title.value != "" && writer.value != "" && desc.value != ""){
                form.submit();
            }else {
                alert("모든항목을 다 입력하셔야 합니다.");
            }
                
        })
        
    </script>
</body>
</html>