<div class="posts">

    <!--  -->
    @foreach($posts as $post)

    <div class="post">
        <div class="posttop">
            <div class="posttopleft">
                <img src="https://images.pexels.com/photos/1547813/pexels-photo-1547813.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="postavatar">
                <div class="postnamecontainer">
                    <h2 class="postname">kawsar</h2>
                    <span class="posttime">1 day ago</span>
                </div>
            </div>
            <div class="posttopright"><i class="fa-solid fa-ellipsis"></i></div>
        </div>
        <div class="postmiddle">
            <h3 class="posttitle">{{$post->title}} </h3>
            <p class="postdesc"> {{$post->desc}} <br /> <a href="#">see more</a> </p>
            <!-- @if ($post->image)
            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="postimg">
            @else
            <img src="https://images.pexels.com/photos/1547813/pexels-photo-1547813.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Default Image" class="postimg">
            @endif -->
        </div>
        <div class="postbottom">
            <div class="postbottomleft">
                <i class="fa-regular fa-thumbs-up"></i>
                <i class="fa-regular fa-heart"></i>
                <span>22 people reacted this</span>
            </div>
            <div class="postbottomright">
                <div class="postbottomrightitem">33<i class="fa-solid fa-comment"></i></div>
                <div class="postbottomrightitem">33<i class="fa-solid fa-share"></i></div>
            </div>
        </div>
        <div class="postreactcomment">
            <div class="commenttop">
                <span><i class="fa-regular fa-thumbs-up"></i>Like</span>
                <span><i class="fa-solid fa-comment"></i>comment</span>
                <span><i class="fa-solid fa-share"></i>Share</span>

            </div>
            <div class="commentbottom">comment lists will be here</div>
        </div>
    </div>

    @endforeach
</div>