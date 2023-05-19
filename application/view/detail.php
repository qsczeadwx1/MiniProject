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
    <h1><?php echo "'".$_SESSION["u_id"]."'님의 "?> 회원정보</h1>
    <h2>배송 정보 상태</h2>
    <h2>장바구니 등등..(미구현)</h2>

    </div>
        <form action="update" method="get">
        <button type="submit" class="btn btn-outline-dark button_2">정보 수정</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>