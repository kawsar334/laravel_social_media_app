<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/navbar.css" />
    <link rel="stylesheet" type="text/css" href="/css/left.css" />
    <link rel="stylesheet" type="text/css" href="/css/right.css" />
    <link rel="stylesheet" type="text/css" href="/css/home.css" />
    <link rel="stylesheet" type="text/css" href="/css/story.css" />
    <link rel="stylesheet" type="text/css" href="/css/feed.css" />
    <link rel="stylesheet" type="text/css" href="/css/post.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @include('front.components.navbar')
    <div class="main_container">
        <div class="mainwrapper">
            @include('front.components.leftbar')
            @yield("main")
            @include('front.components.rightbar')
        </div>
    </div>
</body>
</html>