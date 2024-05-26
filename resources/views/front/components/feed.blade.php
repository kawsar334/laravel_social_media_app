<div class="feed">
    <div class="feedwrapper">
        <div class="feedtop">
            <img src="https://images.pexels.com/photos/1139613/pexels-photo-1139613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="feedavatar">
            <div class="feedtext">whats's on your mind, kawsar?</div>
        </div>
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
    <div class="createpostwrapper">
        <div class="createpostitem createpost_top">
            <h3>Create post</h3>
            <span><i class="fa-solid fa-xmark" id="close"></i></span>
        </div>
        <div class="createpostitem createpostaudiance">
            <img src="https://images.pexels.com/photos/3225517/pexels-photo-3225517.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="createpost_avatar">
            <div class="createpostavatarcontainer">
                <h4 class="createposname">kawsar</h4>
                <span class="createpost_aud_text">friends <i class="fa-solid fa-caret-down"></i></span>
            </div>
        </div>
        <div class="createpostitem">
            <input type="text" placeholder="whats's on your mind, kawsar?" class="postinput">
        </div>
        <div class="createpostitem"><input type="text" placeholder="Enter description " class="postinput"></div>
        <div class="createpostitem"><input type="file" placeholder="Enter description " class="postinput"></div>
        <div class="createpostitem"><input type="button" value="post" class="createpostbtn"></div>
    </div>
</div>




<script>
    
    const createpost = document.getElementById("createpost");
    const close = document.getElementById("close");
    const openpost = document.getElementById("openpost");

    close.addEventListener('click', (e) => {
        e.preventDefault();
        createpost.style.display = "none";
    });

    openpost.addEventListener("click", (e) => {
        e.preventDefault();
        createpost.style.display = "flex";
    });
</script>