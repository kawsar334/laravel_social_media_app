<div class="feed">
    <div class="feedwrapper">
        <div class="feedtop" id="create">
            <img src="https://images.pexels.com/photos/20873207/pexels-photo-20873207/free-photo-of-a-sign-saying-welcome-to-colorful-colorado-standing-in-a-desert.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="" class="feedavatar">
            <div class="feedtext">whats's on your mind,
                @auth
                <b>{{Auth::user()->username}}</b>
                @endauth
                ?
            </div>
        </div>
        @if($errors->has('image'))
        <div style="color: crimson; text-align:left; display:block;width:100%;">{{$errors->first('image')}}</div>
        @endif

     
        <div class="feedbottom" id="openpost">
            <div class="feedbottomitems">
                <div class="feedbottomitem">
                    <i class="fa-solid fa-video" style="color: crimson;"></i>
                    <span>Live video</span>
                </div>
                <div class="feedbottomitem">
                    <i class="fa-solid fa-photo-film" style="color: crimson;"></i>
                    <span>photo/video</span>
                </div>
                <div class="feedbottomitem">
                    <i class="fa-regular fa-face-smile" style="color: #ccff00;"></i>
                    <span>feelling/activity</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- create post section  -->
<div id="createpost">
    <form action="{{route('post.create')}}" method="POST" class="createpostwrapper">
        @csrf
        <div class="createpostitem createpost_top">
            <h3>Create post</h3>
            <span><i class="fa-solid fa-xmark" id="close"></i></span>
        </div>
        <div class="createpostitem createpostaudiance">
            <img src="https://images.pexels.com/photos/20873207/pexels-photo-20873207/free-photo-of-a-sign-saying-welcome-to-colorful-colorado-standing-in-a-desert.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="" class="createpost_avatar">
            <div class="createpostavatarcontainer">
                <h4 class="createposname"> @auth
                    <b>{{Auth::user()->username}}</b>
                    @endauth
                </h4>
                <span class="createpost_aud_text">friends <i class="fa-solid fa-caret-down"></i></span>
            </div>
        </div>
        <div class="createpostitem">
            <input type="text" placeholder="whats's on your mind, {{Auth::user()->username}}?" class="postinput" name="title">
        </div>
        <div class="createpostitem"><input type="text" placeholder="Enter description " name="desc" class="postinput"></div>
        <div class="createpostitem"><input type="file" placeholder="Enter description " name="image" class="postinput"></div>
        <div class="createpostitem"><input type="submit" value="post" class="createpostbtn"></div>
    </form>
</div>




<script>
    const createpost = document.getElementById("createpost");
    const create = document.getElementById("create");

    const close = document.getElementById("close");
    const openpost = document.getElementById("openpost");


    close.addEventListener('click', (e) => {
        e.preventDefault();
        console.log(e)
        createpost.style.display = "none";
    });

    create.addEventListener("click", (e) => {
        e.preventDefault();
        createpost.style.display = "flex";
    });

    openpost.addEventListener("click", (e) => {
        e.preventDefault();
        createpost.style.display = "flex";
    });
</script>