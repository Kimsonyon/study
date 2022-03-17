<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>write.html</title>
    <link rel="stylesheet" href="style_notice.css">

</head>
<body>
    <br><br><br>

    <table class="table1">
        <tr>
            <td>제목</td>
            <td>??바닷가를 한번 돌아보고 싶어요.</td>
        </tr>
        <tr>
            <td>내용</td>
            <td>
                 우리 자랑스러운 부산<br>
                 슬리퍼 신고 바닷가 어디든 맘만 먹으면 갈수 있어 ㅎㅎㅎ<br>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="button" value="수정" onclick="location.href='edit.html'" >
                <input type="button" value="삭제" onclick="del()">
                <input type="button" value="이전" onclick="location.href='notice.html'">
            </td>
        </tr>
    </table>

</body>
</html>

<script>
    function del(){
        if(confirm("정말로 삭제하시겠습니까?")){
            location.href="del.html" ;
        }

    }
</script>