<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/auth//css/styles.css">
    <title>SignUp</title>
    <style>
        .Section {
            background-image: url("{{ asset('/') }}assets/auth//img/3.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .pt {
            padding-top: 12px;
        }

        .back {
            text-align: center;
            padding-top: 19px;
        }
    </style>
</head>

<body>
    <div class="Section">

        <div class="wrapper">
            <h4 class="text-center ">
                <?php echo isset($message) ? $message : ''; ?>
            </h4>

            <div class="title">
                SignUp Here
            </div>

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

            <form class="form pt" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="input_field">
                    <input type="text" placeholder="    Enter Your Name" name="name" class="input" id=""
                        value="{{ old('name') }}" onkeyup="validateName()">
                    @error('name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <i class="fas fa-user"></i>
                    <samp id="name-error"></samp>
                </div>
                <div class="input_field">
                    <input type="text" placeholder="    Enter Your Email" name="email" value="{{ old('email') }}"
                        class="input" id="" onkeyup="validateEmail()">
                    @error('email')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="input_field">
                    <div class="row" style="padding-left: 38px; padding-top:10px">
                        <div class="col-12">
                            <input class="form-check-input" type="radio" name="role" id="user" value="4">
                            <label class="form-check-label" for="user">User</label>
                            <input class="form-check-input" type="radio" name="role" id="nursery" value="2">
                            <label class="form-check-label" for="nursery">Nursery</label>
                            <input class="form-check-input" type="radio" name="role" id="consultant"
                                value="3">
                            <label class="form-check-label" for="consultant">Consultant</label>
                        </div>
                    </div>
                    @error('role')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <i class="fas fa-users"></i>
                </div>
                <div class="input_field">
                    <input type="password" placeholder="    Enter Your Password" name="password"
                        value="{{ old('password') }}" class="input" id="" onkeyup="validatePass()">
                    @error('password')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <i class="fas fa-lock"></i>
                    <samp id="Pass-error"></samp>
                </div>
                <div class="input_field">
                    <input type="password" placeholder="    Enter Your Confm Password" name="password_confirmation"
                        value="{{ old('password_confirmation') }}" class="input" id=""
                        onkeyup="validateConPass()">
                    @error('password_confirmation')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <i class="fas fa-lock"></i>
                    <samp id="conPass-error"></samp>
                </div>
                <div class="border-0">
                    <button type="submit" class="btn" name="signBtn">SignUp</button>
                </div>
                <div class="back"><a href="{{ route('home') }}">Go To Home</a></div>
            </form>
        </div>
    </div>

    <script src="{{ asset('/') }}assets/auth//js/scripts.js"></script>
</body>

</html>
