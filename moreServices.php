<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات بیشتر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./CSS/moreServices.css">
    <link rel="icon" href="./img/3.webp">
</head>
<body class="bg-light">
        <header class="bg-white border">
        <h1 class="h4">پرداخت قبوض</h1>
        <ul id="ul1">
            <li><a href="./index.php" class="text-primary">خانه<img src="./img/home.svg" alt="" width="20px"></a></lia>
            <li><a href="" class="text-primary">پرداخت قبض ها<img src="./img/card.svg" alt="" width="20px"></a></li>
            <li><a href="./moreServices.php" class="text-primary">خدمات بیشتر<img src="./img/more.svg" alt="" width="20px"></a></li>
            <li><a href="" class="text-primary">درباره ما<img src="./img/info.svg" alt="" width="20px"></a></li>
        </ul>
        <ul class="ul2" id="ul2">
            <li><a href="./login.html" class="login">ورود</a></li>
            <li><a href="./signin.html" class="signin">ثبت نام</a></li>
        </ul>
        <div id="profile" class="">
        <img src="./img/user.png" width="80px" id="username">
        <div id="info" class="p-3 rounded-2 border border-2">
            نام کاربری:<div id="user-user" class="text-primary"></div>
            نام:<div id="user-firstname" class="text-primary"></div>
            نام خانوادگی:<div id="user-lastname" class="text-primary"></div>
            نقش:<div id="user-role" class="text-primary"></div>
            <br>
            <a href="" class="logout btn btn-outline-warning" id="logout">خروج</a>
        </div>
        </div>
        <div class="text-danger display-6 message d-none text-center" id="message">لطفا ابتدا وارد شوید</div>
        <a href="./login.html" class="d-none text-center btn btn-warning" id="btnMessage">ورود</a>
    </header>
    <main>
<div class="menu-grid mt-5">
  <div class="menu-card">
    <i class="bi bi-person-plus text-primary"></i>
    <span>اضافه کردن ساکنین</span>
  </div>
  <div class="menu-card">
    <i class="bi bi-file-plus text-primary"></i>
    <span>اضافه کردن قبض</span>
  </div>
  <div class="menu-card">
    <i class="bi bi-credit-card text-primary"></i>
    <span>پرداخت قبض</span>
  </div>
  <div class="menu-card">
    <i class="bi bi-clock-history text-primary"></i>
    <span>تاریخچه پرداخت</span>
  </div>
</div>
    </main>
    <script src="./JS/moreServices.js"></script>
</body>
</html>