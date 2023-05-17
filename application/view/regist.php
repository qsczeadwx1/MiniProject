

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>회원 가입</h1>
    <br>
    <br>

    <?php if(isset($this->errMsg)) { ?>
        <div>
            <span> <?php echo $this->errMsg ?> </span>
        </div>
        <?php } ?>
    
    <form action="/user/regist" method="post">
        <label for="id">아이디</label>
        <input type="text" id="id" name="id" maxlength="12" minlength="1" autofocus value="<?php if(isset($_POST["id"])) {$arrPostId = $_POST["id"]; echo $arrPostId;} ?>">
        <button type="button" onclick="chkDuplicationId();">중복체크</button>
        <span id="errMsgId">
            <?php if(isset($this->arrError["id"])) {
                    echo $this->arrError["id"] ;
            } ?>
        </span>
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
        <input type="text" id="name" name="name" maxlength="30" minlength="1" value="<?php if(isset($_POST["name"])) {$arrPostName = $_POST["name"]; echo $arrPostName;} ?>">
        <span> 
        <?php if(isset($this->arrError["name"])) {
                echo $this->arrError["name"];
        } ?>
        </span>
        <br>
        <br>
        <a href="/user/login"><button type="button">취소</button></a>
        <button type="submit">회원 가입</button>
</form>
    

    <script src="/application/view/js/common.js"></script>
</body>
</html>