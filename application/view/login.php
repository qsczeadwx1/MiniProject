<?php



?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include_once(_PATH_VIEW._BASE_FILENAME_HEADER._EXTENSION_PHP)?>
    <h3 style="color: red;"><?php echo isset($this->errMsg) ? $this->errMsg : ""; ?></h3>
    <form action="/user/login" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" id="id" autofocus>
        <label for="pw">PW</label>
        <input type="password" name="pw" id="pw">
        <br>
        <br>
        <button type="submit">로그인</button>
        <a href="/user/regist">회원 가입</a>
    </form>
</body>
</html>