<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/register.css" />
</head>

<body>
    <div class="regster">
        <div class="registerwrapper">
            <form action="{{ route('account.createuser') }}" method="POST" class="regstrationform">
                @csrf
                <div class="regformitem">
                    <h2 class="reg_header">Create an account </h2>
                </div>
                <div class="regformitem">
                    <label class="registerlabel" for="username">Name</label>
                    <input class="registerinput" type="text" placeholder="Enter user name " name="username">
                    @if($errors->has('username'))
                    <div style="color: crimson; text-align:left; display:block;width:100%;">{{$errors->first('username')}}</div>
                    @endif
                </div>
                <div class="regformitem">
                    <label class="registerlabel" for="email">Email</label>
                    <input class="registerinput" type="text" placeholder="Enter user email " name="email">
                    @if($errors->has('email'))
                        <div style="color: crimson; text-align:left; display:block;width:100%;">{{$errors->first('email')}}</div>
                    @endif
                </div>
                <div class="regformitem">
                    <label class="registerlabel" for="password">password</label>
                    <input class="registerinput" type="password" placeholder="Enter user password " name="password">
                    @if($errors->has('password'))
                    <div style="color: crimson; text-align:left; display:block;width:100%;">{{$errors->first('password')}}</div>
                    @endif
                </div>
                <div class="regformitem">
                    <input class="registerinput registersubmitbtn" type="submit" value="create" name="submit">
                </div>
                <div class="regformitem">
                    <a href="{{route('account.login')}}" class="registerlink"> Already have an account? <b>Login</b></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>