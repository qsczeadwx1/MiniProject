<?php
$this->logout();
echo("
    <script>
        alert(`성공적으로 로그아웃 했습니다.
메인 화면으로 돌아갑니다.`);
        location.href = '/shop/main';
    </script>
    ");
?>