

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/auth/css/styles.css">
    <title>Login</title>
    <style>
        .Section{
            background-image: url("{{asset('/')}}assets/auth/img/1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="Section">
        <h2 class="text-center text-success py-2">
            <?php echo isset($message) ? $message : '';  ?>
        </h2>
    <div class="wrapper">
        <div class="title">
            Login
        </div>


        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input_field">
                <input type="text" placeholder="Email" class="input" name="email" id="email" onkeyup="validateEmail()">
                @error('email')
                    <span style="color: red" >{{$message}}</span>
                @enderror
                <i class="fas fa-envelope"></i>
                <samp id="email-error"></samp>
            </div>
            <div class="input_field">
                <input type="password" placeholder="Password" class="input" name="password" id="password" onkeyup="validatePass()" >
                @error('password')
                    <span style="color: red" >{{$message}}</span>
                @enderror
                <i class="fas fa-lock"></i>
                <samp id="Pass-error"></samp>
            </div>
            <div class="forget">
                <a href="#">Forgot your password?</a>
            </div>
            <div class="">
                <!-- <a href="#" onclick="return validation()">Login</a> -->
                <input type="submit" name="loginBtn" class="btn " value="Login"/>
            </div>
        </form>

        <div class="or">-- or connect with --</div>

        <div class="social_media">
            <div class="item">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="item">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="item">
                <i class="fab fa-google-plus-g"></i>
            </div>
        </div>
        <div class="newAccount"><p>Create a <a href="{{ route('register') }}"> New Account</a> </p>
        </div>
    </div>
</div>

<script src="{{asset('/')}}assets/auth/js/scripts.js"></script>
</body>


</html>
