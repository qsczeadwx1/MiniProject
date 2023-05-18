<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="application/view/css/common.css">
    <title>Document</title>
</head>
<body>
<h1>회원 수정</h1>
    <br>
    <br>
<form action="/user/update" method="post">
    <label for="id">아이디</label>
        <input type="text" id="id" name="id" maxlength="12" minlength="1" value="<?php $sessinfo = [ "id" => $_SESSION["u_id"] ]; echo $sessinfo["id"];  ?>" readonly>
        <br>
        <label for="pw">비밀번호</label>
        <input type="password" id="pw" name="pw">
        <span> 
            <?php if(isset($this->arrError["pw"])) { 
                    echo $this->arrError["pw"];
            } ?>
        </span>
        <br>
        <label for="pwChk">비밀번호 확인</label>
        <input type="password" id="pwChk" name="pwChk">
        <span> 
            <?php if(isset($this->arrError["pwChk"])) {
                    echo $this->arrError["pwChk"];
            } ?>
        </span>
        <br>
        <label for="name">이름</label>
        <input type="text" id="name" name="name" maxlength="30" minlength="1" value="<?php ?>">
        <span> 
        <?php if(isset($this->arrError["name"])) {
                echo $this->arrError["name"];
        } ?>
        </span>
        <br>
        <br>
        <a href="/user/detail"><button type="button" class="btn btn-outline-secondary">취소</button></a>
        <button type="submit" class="btn btn-outline-dark">회원 정보 수정</button>
</form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/application/view/js/common.js"></script>
</body>
</html>