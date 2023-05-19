

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/application/view/css/common.css">
    <title>Document</title>
</head>
<body>
    <div class="div_header">
<?php include_once(_PATH_VIEW._BASE_FILENAME_HEADER._EXTENSION_PHP); ?>
</div>
<div class="div_outside">
<div class="div_contents">
    <h1>회원 가입</h1>
    <br>
    <br>
        <div>
            <span><?php echo (isset($this->errMsg) ? $this->errMsg : "") ?></span>
        </div>
    
    <form action="/user/regist" method="post">
        <div class="div_id">
            <label for="id">아이디</label>
            <input type="text" id="id" name="id" maxlength="12" minlength="1" autofocus value="<?php if(isset($_POST["id"])) {$arrPostId = $_POST["id"]; echo $arrPostId;} ?>">
            <button type="button" class="btn btn-outline-dark button_2" id="chkDupli"onclick="chkDuplicationId();">중복체크</button>
            <span id="errMsgId">
                <?php if(isset($this->arrError["id"])) {
                        echo $this->arrError["id"] ;
                } ?>
            </span>
        </div>
        <br>
        <div class="div_pw">
            <label for="pw">비밀번호</label>
            <input type="text" id="pw" name="pw">
            <span> 
                <?php if(isset($this->arrError["pw"])) { 
                        echo $this->arrError["pw"];
                } ?>
            </span>
        </div>
        <br>
        <div class="div_pwChk">
            <label for="pwChk">비밀번호 확인</label>
            <input type="text" id="pwChk" name="pwChk">
            <span> 
                <?php if(isset($this->arrError["pwChk"])) {
                        echo $this->arrError["pwChk"];
                } ?>
            </span>
        </div>
        <br>
        <div class="div_name">
        <label for="name">이름</label>
        <input type="text" id="name" name="name" maxlength="30" minlength="1" value="<?php if(isset($_POST["name"])) {$arrPostName = $_POST["name"]; echo $arrPostName;} ?>">
        <span> 
        <?php if(isset($this->arrError["name"])) {
                echo $this->arrError["name"];
        } ?>
        </span>
        </div>
        <br>
        <br>
    </div>
    <div class="div_button">
        <a href="/user/login"><button type="button" class="btn btn-outline-secondary button_1">취소</button></a>
        <button type="submit" class="btn btn-outline-dark button_2">회원 가입</button>
    </div>
</form>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/application/view/js/common.js"></script>
</body>
</html>