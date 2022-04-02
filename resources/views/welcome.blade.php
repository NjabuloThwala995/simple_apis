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
    <!-- Styles -->
    <style>
        html {

        }

        body {
            padding: 50px;
            background-image: url('http://localhost:8000/back.jpeg');
        }

        header {
            border-bottom: solid whitesmoke 5px;
            padding-bottom: 15px;
            display: flex;
        }

        .header-logo-div, .header-social-media-div {
            display: inline-block;
        }

        .header-img {
            border-radius: 200px;
        }

        .header-div-social {
            margin-left: 10px;
            width: 100%
        }

        .header-logo-div {
            font-family: 'Righteous', cursive;
            font-size: 2rem;
            color: #f9a602;
        }

        .header-social-media-div {
            float: right;
        }

        .header-social-li {
            color: white;
            display: inline-block;
        }

        li:not(:first-of-type) {
            margin-left: 30px;
        }

        .body-welcome-strong {
            color: #f9a602;
        }

    </style>
</head>
<body>
<header>
    <div>
        <img class="header-img" src="http://localhost:8000/logo.png" width="50px" height="50px" alt="logo"/>
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

<div style="color:white;text-align: center; margin-top: 100px; padding: 20px;">
    <h1 style="margin: 0px; font-family: 'Montserrat', sans-serif; font-size: 2rem">
        <strong class="body-welcome-strong">&lt;html&gt;</strong>
        Building a front end, no problemo.
        <strong class="body-welcome-strong">&lt;/html&gt;</strong>
    </h1>

    <h1 style="margin: 0px; font-family: 'Montserrat', sans-serif; font-size: 5rem">
        Try our FREE apis
    </h1>
</div>
</body>
</html>
