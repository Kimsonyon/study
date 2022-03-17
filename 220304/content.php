<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>content.php</title>
    <link rel="stylesheet" href="style_board.css">
</head>
<body>
    <br><br><br>

    <table class="table1">
        <tr>
            <td>작성자</td>
            <td>관리자A</b></td>
        </tr>
        <tr>
            <td>제목</td>
            <td>자세한 내용은 <b>검색해서....</b></td>
        </tr>
        <tr>
            <td>내용</td>
            <td>자세한 내용은 네이버에서....<br>
                <b>검색</b>바랍니다.
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="button" value="수정" onclick="location.href='edit.html'">
                <input type="button" value="삭제" onclick="del()">
                <input type="button" value="이전" onclick="location.href='board.html'">
            </td>
        </tr>   
    </table>
</body>
</html>

<script>
    function del(){
        if(confirm("정말로 삭제하시겠습니까??")){
            location.href="del.html" ;
        }
    }
</script>
