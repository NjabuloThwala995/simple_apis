<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to Simple Api</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&family=Righteous&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/9ecd261fd1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset("/css/app.css")}}">
</head>
<body>
<header>
    <div>
        <img class="header-img" src={{asset("logo.png")}} width="50px" height="50px" alt="logo"/>
    </div>
    <div class="header-div-social">
        <div class="header-logo-div">
            simple_apis
        </div>
        <div class="header-social-media-div">
            <ul style="list-style-type: none">
                <li class="header-social-li">
                    <i class="fa-brands fa-xl fa-linkedin-in"></i>
                </li>
                <li class="header-social-li">
                    <i class="fa-brands fa-xl fa-youtube"></i>
                </li>
                <li class="header-social-li">
                    <i class="fa-brands fa-xl fa-instagram"></i>
                </li>
            </ul>
        </div>
    </div>
</header>
<style>

</style>
<div class="body-welcome-div">
    <div>
        <h1 class="margin-0 welcome-strong-h1">
            <strong class="body-welcome-strong">&lt;html&gt;</strong>
            Building a front end, no problemo.
            <strong class="body-welcome-strong">&lt;/html&gt;</strong>
        </h1>

        <h1 class="margin-0 welcome-strong-h1-2">
            Try our FREE apis
        </h1>
    </div>
    <div class="margin-top-100 fa-3x">
        <i class="fa-solid fa-spinner fa-xl fa-spin-pulse"></i>
        <i class="fa-solid fa-spinner fa-xl fa-spin-pulse fa-spin-reverse"></i>
    </div>

</div>
</body>
</html>
