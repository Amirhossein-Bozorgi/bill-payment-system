<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پرداخت قبوض</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="icon" href="./img/3.webp">
    <style>
    .username{

    justify-self: center;
    color: white;
    padding: 20px;
    border-radius: 10%;
    background:linear-gradient(45deg,#321484,#10228f);
    cursor: pointer;
}
#profile{
    grid-column-start: 11 !important;
    grid-column-end:12 !important;
    justify-self: center;
    grid-row-start: 1;
    grid-row-end: 2;
}
#info{
    position: absolute;
    justify-self: center;
    top:10vh;
    display: none;
    z-index: 999;
    backdrop-filter: blur(10px);
}
#user-user{
}
.active{
    display: inline-block !important;
}

    </style>
</head>
<body class="bg-light">
    <header class="bg-white border">
        <h1 class="h4">پرداخت قبوض</h1>
        <ul>
            <li><a href="./index.php" class="text-primary">خانه</a></lia>
            <li><a href="" class="text-primary">پرداخت قبض ها</a></li>
            <li><a href="" class="text-primary">خدمات بیشتر</a></li>
            <li><a href="" class="text-primary">درباره ما</a></li>
        </ul>
        <ul class="ul2" id="ul2">
            <li><a href="./login.html" class="login">ورود</a></li>
            <li><a href="./signin.html" class="signin">ثبت نام</a></li>
        </ul>
        <div id="profile" class="">
        <div id="username" class="username"></div>
        <div id="info" class="p-3 rounded-2 border border-2">
            نام کاربری:<div id="user-user" class="text-primary"></div>
            نام:<div id="user-firstname" class="text-primary"></div>
            نام خانوادگی:<div id="user-lastname" class="text-primary"></div>
            نقش:<div id="user-role" class="text-primary"></div>
        </div>
        </div>
        <!-- <div class="dropper" id="dropper">
            <a href="" class="logout">مشاهده پروفایل</a>
            <a href="" class="logout">خروج</a>
        </div> -->
    </header>
    <main>
        <div class="txt">
        <h2 class="h3"> پرداخت قبض های آپارتمان به صورت آنی و آنلاین</h2>
        <p class="display-7"> قبض ها تو به صورت اینترنتی پرداخت کن بدون مراجعه به مدیر ساختمان!!!</p>
        <p class="display-7"> اگه مدیری ساکنین را اضافه کن و قبض های هرکدام را در اینجا ثبت کن <br> با استفاده از قسمت افزودن ساکنین میتونی ساکنین رو اضافه کنی</p>
        </div>
        
        <div class="img">
            <img src="./img/3.webp" alt="">
        </div>
    </main>
    <script src="./JS/index2.js"></script>
</body>
</html>