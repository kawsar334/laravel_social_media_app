<div class="navbar">
    <div class="navwrapper">
        <div class="navleft">
            <a href="/">
                <i class="fa-brands fa-facebook  facebookicon"></i>
            </a>
            <a href="/"><i class="fa-solid fa-magnifying-glass navicon"></i></a>
            @if(Auth::user())
            <div>{{Auth::user()->username}}</div>
            @endif
        </div>
        <div class="navmiddle">
            <a href="/">

                <i class="fa-solid fa-house navicon"></i>
            </a>
            <a href="/">

                <i class="fa-solid fa-user-group navicon"></i>
            </a>
            <a href="/">

                <i class="fa-solid fa-radio navicon"></i>
            </a>
            <a href="/">

                <i class="fa-solid fa-shop navicon"></i>
            </a>
            <a href="/">
                <i class="fa-solid fa-people-group navicon"></i>
            </a>
        </div>
        <div class="navright">
            <i class="fa-solid fa-bars navicon" id="menubar"></i>
            <a href="/">
                <i class="fa-brands fa-facebook-messenger navicon"></i>
            </a>
            <a href="/">
                <i class="fa-solid fa-bell navicon"></i>
            </a>
            <a href="/">

                <img src="https://scontent.fjed4-5.fna.fbcdn.net/v/t39.30808-1/418830853_414039494503890_7130123417897678456_n.jpg?stp=c0.0.200.200a_dst-jpg_p200x200&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=2DyYEiFyz64Q7kNvgGmZcjP&_nc_oc=AdgDSMAy-Go0NrkE1iQsTxlq0vmVsSkKdlgUYji6d1yDjXHqbBnNftd-nhV-Q3sMMTPLvrpmI7ZloSDSyCUiLto1&_nc_ht=scontent.fjed4-5.fna&oh=00_AYBum7NZNPlAgF0SuunXi-6U5PYZgAgHy8f8PeWgKq9joA&oe=664BA55C" class="navimg" />

            </a>
            <form action="{{route('account.logout')}}" method="POST">
                @csrf
                <button>Logout</button>
            </form>
        </div>
        <!-- menu start here ====================== -->
        <div id="menu" class="menu">
            <div class="menuitems">
                <a href="/" class="item" id="item">
                    <img src="https://scontent.fjed4-5.fna.fbcdn.net/v/t39.30808-1/418830853_414039494503890_7130123417897678456_n.jpg?stp=c0.0.200.200a_dst-jpg_p200x200&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=2DyYEiFyz64Q7kNvgGmZcjP&_nc_oc=AdgDSMAy-Go0NrkE1iQsTxlq0vmVsSkKdlgUYji6d1yDjXHqbBnNftd-nhV-Q3sMMTPLvrpmI7ZloSDSyCUiLto1&_nc_ht=scontent.fjed4-5.fna&oh=00_AYBum7NZNPlAgF0SuunXi-6U5PYZgAgHy8f8PeWgKq9joA&oe=664BA55C" class="navimg" />
                    <span class="menutext">kawsar firoz</span>
                </a>
                <a href="/" class="item" id="item">
                    <i class="fa-solid fa-bell "></i>
                    <span class="menutext">Home</span>
                </a>
                <div class="item" id="item">
                    <i class="fa-solid fa-bell "></i>
                    <span class="menutext">Home</span>
                </div>
                <a href="/" class="item" id="item">
                    <i class="fa-solid fa-bell "></i>
                    <span class="menutext">Home</span>
                </a>
                <a href="/" class="item" id="item">
                    <i class="fa-solid fa-bell "></i>
                    <span class="menutext">Home</span>
                </a>
                <a href="/" class="item" id="item">
                    <i class="fa-solid fa-bell "></i>
                    <span class="menutext">Home</span>
                </a>
                <a href="/" class="item" id="item">
                    <i class="fa-solid fa-bell "></i>
                    <span class="menutext">Home</span>
                </a>
            </div>
        </div>
        <!-- menu end here ====================== -->

    </div>
</div>



<script>
    const menubar = document.getElementById("menubar");
    const menu = document.getElementById("menu");
    const item = document.getElementById("item");
    menubar.addEventListener('click', (e) => {
        e.preventDefault();
        menu.classList.toggle("togglemenu");
    })



    item.addEventListener("click", (e) => {
        e.preventDefault();
        menu.classList.toggle("togglemenu");
    })
</script>