<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Green공지사항</h1>
        <ul>
            <li>글쓰기</li>
            <li>글보기</li>
        </ul>
    </header>
    <div>
        <table>
        <form action="process/write_process.php" method="post">
            <tr>
                <td>
                    제목
                </td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>
                    작성자
                </td>
                <td><input type="text" name="writer"></td>
            </tr>
            <tr>
                <td>
                    내용
                </td>
                <td>
                    <textarea name="desc">내용을 입력하세요</textarea>
                </td>
            </tr>
            <tr>
                <input type="submit" value="전송">
                <input type="reset" value="취소">
            </tr>   
        </form>
        </table>
    </div>
    <footer>
        <address>copyright (c) 2021 green All rights reserved.</address>
        <h1>Green</h1>
    </footer> 
</body>
</html>