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
    <?php include_once(_PATH_VIEW._BASE_FILENAME_HEADER._EXTENSION_PHP); ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if(empty($_SESSION["u_id"])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="/user/login">로그인</a>
        </li>
        <?php } else { $username = $_SESSION["u_id"]; ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <?php echo $username; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/user/detail">회원정보</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/user/logout" method="get">
              <button type="submit" class="dropdown-item" class="btn">로그아웃</li></button>
              </form>
            <?php } ?>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://static.coupangcdn.com/wa/cmg_paperboy/image/1683984840742/C1-PC1.jpg" class="d-block w-100" alt="사진">
    </div>
    <div class="carousel-item">
      <img src="https://static.coupangcdn.com/ja/cmg_paperboy/image/1684400357181/%5B%EC%88%98%EC%A0%95%5D230519_C1_%EC%8B%9D%ED%92%88-%EB%82%98%EB%93%A4%EC%9D%B4-%EC%BB%A8%EC%85%89_SMD-28343_PC.jpg" class="d-block w-100" alt="사진">
    </div>
    <div class="carousel-item">
      <img src="https://static.coupangcdn.com/ma/cmg_paperboy/image/1684400421248/230519_C1_%EB%A1%9C%EC%BC%93%EB%B0%B0%EC%86%A1_SMD-28347_PC.png" class="d-block w-100" alt="사진">
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
        <div class="card border-info mb-3" style="width: 18rem;">
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
        <div class="card border-info mb-3" style="width: 18rem;">
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
        <div class="card border-info mb-3" style="width: 18rem;">
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
        <div class="card border-info mb-3" style="width: 18rem;">
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
        <div class="card border-info mb-3" style="width: 18rem;">
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
        <div class="card border-info mb-3" style="width: 18rem;">
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
        <div class="card border-info mb-3" style="width: 18rem;">
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

  <div class="footer">
        <p>2021. KOREA IT ACADEMY</p>
    </div>
    <script src="https://kit.fontawesome.com/15c1734573.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>