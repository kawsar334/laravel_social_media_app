@extends('front.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    @section("main")
    <div class="home">
        <div class="story">
            @include('front.components.story')
        </div>
        <!-- <div class="feed"> -->
            @include('front.components.feed')
        <!-- </div> -->
        <!-- <div class="posts"> -->
            @include('front.components.posts')
            
        <!-- </div> -->
    </div>
    @endsection
</body>

</html>