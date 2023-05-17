<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    회원정보
    <?php var_dump($_GET); var_dump($_POST); var_dump($_SESSION); ?>
    <form action="update" method="post">
    <button type="submit">정보 수정</button>
    <input type="hidden" name="name" value="">
    </form>
</body>
</html>