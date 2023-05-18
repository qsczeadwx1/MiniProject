<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/application/view/css/common.css">
    <title>Shop Main</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/shop/main"><?php include_once(_PATH_VIEW._BASE_FILENAME_HEADER._EXTENSION_PHP)?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <h1>Shop Main</h1>
    
  <?php if(empty($_POST)) {
  $username = "반갑습니다."; ?> <a href="/user/login">로그인</a>
  <br>
  <h3><?php echo $username; ?></h3>
  <?php
  } else {
  $username = $_POST["id"]; ?> 
  <form action="/user/logout" method="get">
    <button type="submit" class="btn" onclick="confirmLogout()">
        LOGOUT
    </button>
  </form>
    <br>
    <a href="/user/detail"><?php echo $username; ?></a>
<?php } ?>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://image.msscdn.net/images/goods_img/20190327/996178/996178_3_125.jpg" class="d-block w-100" alt="티셔츠">
    </div>
    <div class="carousel-item">
      <img src="https://image.msscdn.net/images/goods_img/20210906/2112059/2112059_1_125.jpg" class="d-block w-100" alt="바지">
    </div>
    <div class="carousel-item">
      <img src="https://image.msscdn.net/images/goods_img/20190710/1092992/1092992_1_125.jpg" class="d-block w-100" alt="신발">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container">
        <div class="row row-xxl-4 row-cols-lg-3">
          <div class="col d-flex justify-content-center" >
            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTddjq0ktEEuvdrSj3mwYpMbt_yTs9wz-sUfveQkFlRQFw00vHGpJ_UIQqtANNmqo7pDzGJL4Q-3w484suaDcBi2f93bSjzroEFEiNs_zW62lHn0ydM5Jh6V9BSWwqtTdWbP3U&usqp=CAc" class="card-img-top" alt="상품">
                <div class="card-body">
                  <h5 class="card-title">티셔츠</h5>
                  <p class="card-text">입으면 존재감이 엄청나질 것 같은 티셔츠 입니다.</p>
                  <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    구매하기
                  </button>
                </div>
              </div>
        
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTddjq0ktEEuvdrSj3mwYpMbt_yTs9wz-sUfveQkFlRQFw00vHGpJ_UIQqtANNmqo7pDzGJL4Q-3w484suaDcBi2f93bSjzroEFEiNs_zW62lHn0ydM5Jh6V9BSWwqtTdWbP3U&usqp=CAc" class="card-img-top" alt="상품">
                <div class="card-body">
                  <h5 class="card-title">티셔츠</h5>
                  <p class="card-text">입으면 존재감이 엄청나질 것 같은 티셔츠 입니다.</p>
                  <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    구매하기
                  </button>
                </div>
              </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTddjq0ktEEuvdrSj3mwYpMbt_yTs9wz-sUfveQkFlRQFw00vHGpJ_UIQqtANNmqo7pDzGJL4Q-3w484suaDcBi2f93bSjzroEFEiNs_zW62lHn0ydM5Jh6V9BSWwqtTdWbP3U&usqp=CAc" class="card-img-top" alt="상품">
                <div class="card-body">
                  <h5 class="card-title">티셔츠</h5>
                  <p class="card-text">입으면 존재감이 엄청나질 것 같은 티셔츠 입니다.</p>
                  <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    구매하기
                  </button>
                </div>
              </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTddjq0ktEEuvdrSj3mwYpMbt_yTs9wz-sUfveQkFlRQFw00vHGpJ_UIQqtANNmqo7pDzGJL4Q-3w484suaDcBi2f93bSjzroEFEiNs_zW62lHn0ydM5Jh6V9BSWwqtTdWbP3U&usqp=CAc" class="card-img-top" alt="상품">
                <div class="card-body">
                  <h5 class="card-title">티셔츠</h5>
                  <p class="card-text">입으면 존재감이 엄청나질 것 같은 티셔츠 입니다.</p>
                  <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    구매하기
                  </button>
                </div>
              </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTddjq0ktEEuvdrSj3mwYpMbt_yTs9wz-sUfveQkFlRQFw00vHGpJ_UIQqtANNmqo7pDzGJL4Q-3w484suaDcBi2f93bSjzroEFEiNs_zW62lHn0ydM5Jh6V9BSWwqtTdWbP3U&usqp=CAc" class="card-img-top" alt="상품">
                <div class="card-body">
                  <h5 class="card-title">티셔츠</h5>
                  <p class="card-text">입으면 존재감이 엄청나질 것 같은 티셔츠 입니다.</p>
                  <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    구매하기
                  </button>
                </div>
              </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTddjq0ktEEuvdrSj3mwYpMbt_yTs9wz-sUfveQkFlRQFw00vHGpJ_UIQqtANNmqo7pDzGJL4Q-3w484suaDcBi2f93bSjzroEFEiNs_zW62lHn0ydM5Jh6V9BSWwqtTdWbP3U&usqp=CAc" class="card-img-top" alt="상품">
                <div class="card-body">
                  <h5 class="card-title">티셔츠</h5>
                  <p class="card-text">입으면 존재감이 엄청나질 것 같은 티셔츠 입니다.</p>
                  <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    구매하기
                  </button>
                </div>
              </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTddjq0ktEEuvdrSj3mwYpMbt_yTs9wz-sUfveQkFlRQFw00vHGpJ_UIQqtANNmqo7pDzGJL4Q-3w484suaDcBi2f93bSjzroEFEiNs_zW62lHn0ydM5Jh6V9BSWwqtTdWbP3U&usqp=CAc" class="card-img-top" alt="상품">
                <div class="card-body">
                  <h5 class="card-title">티셔츠</h5>
                  <p class="card-text">입으면 존재감이 엄청나질 것 같은 티셔츠 입니다.</p>
                  <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    구매하기
                  </button>
                </div>
              </div>
          </div>
        </div>
      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>