<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/login.css" />
    <title>Document</title>
</head>

<body>
    <div class="login">


        <div class="loginwrapper">
            <div class="loginleft">
                <img src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" alt="" class="loginimg">
                <h3 class="logintext">Connect with friends and the world around you on Facebook.</h3>
            </div>
            <div class="loginright">
                <form action="{{route('account.loginuser')}}" method="POST" class="loginform">
                    @if(session('success'))
                    <div class="loginformitem" style="font-size: 20px;color:green;">{{session('success')}}</div>
                    @endif

                    @csrf
                    <div class="loginformitem">
                        <input type="text"  name="email" placeholder="Email or phone number" class="logininput">
                        @if($errors->has('email'))
                        <div style="color: crimson; text-align:left; display:block;width:100%;">{{$errors->first('email')}}</div>
                        @endif
                      
                    </div>
                    <div class="loginformitem">
                        <input type="password" name="password"  placeholder="Enter your password" class="logininput">
                        @if($errors->has('password'))
                            <div style="color: crimson; text-align:left; display:block;width:100%;">{{$errors->first('email')}}</div>
                        @endif
                    </div>
                    <div class="loginformitem">
                        <input type="submit" name="submit" value="Log In" class="loginbtn">
                    </div>
                    <div class="loginformitem">
                        <a href="/" class="forgopassword">Forgot password?</a>
                    </div>
                    <div class="loginformitem">
                        <hr class="hr" />
                    </div>
                    <div class="loginformitem">
                        <a href="{{route('account.register')}}" class="createnewaccount">create account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>