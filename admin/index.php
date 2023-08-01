<?php

// Check if the user is already logged in
// if (isset($_SESSION['email'])) {
//     // Redirect the user to the home page or any other authorized page
//     header("Location: index.php");
//     exit();
// }
include_once '../action/config.php' ;

?>

<!DOCTYPE .html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap'); */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    html,
    body {
        display: grid;
        height: 100%;
        width: 100%;
        place-items: center;
        background-color: #006565;
    }

    ::selection {
        color: #fff;
    }

    .wrapper {
        overflow: hidden;
        max-width: 390px;
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
    }

    .wrapper .title-text {
        display: flex;
        width: 200%;
    }

    .wrapper .title {
        width: 50%;
        font-size: 35px;
        font-weight: 600;
        text-align: center;
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .slide-controls {
        position: relative;
        display: flex;
        height: 50px;
        width: 100%;
        overflow: hidden;
        margin: 30px 0 10px 0;
        justify-content: space-between;
        border: 1px solid lightgrey;
        border-radius: 15px;
    }

    .slide-controls .slide {
        height: 100%;
        width: 100%;
        color: #bf925c;
        font-size: 18px;
        font-weight: 500;
        text-align: center;
        line-height: 48px;
        cursor: pointer;
        z-index: 1;
        transition: all 0.6s ease;

    }

    .slide-controls label.signup {
        color: #000;
    }

    .slide-controls .slider-tab {
        position: absolute;
        height: 100%;
        width: 50%;
        left: 0;
        z-index: 0;
        border-radius: 15px;
        background: #02292C;
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    input[type="radio"] {
        display: none;
    }

    #signup:checked~.slider-tab {
        left: 50%;
    }

    #signup:checked~label.signup {
        color: #bf925c;
        cursor: default;
        user-select: none;
    }

    #signup:checked~label.login {
        color: #000;
    }

    #login:checked~label.signup {
        color: #000;
    }

    #login:checked~label.login {
        cursor: default;
        user-select: none;
    }

    .wrapper .form-container {
        width: 100%;
        overflow: hidden;
    }

    .form-container .form-inner {
        display: flex;
        width: 200%;
    }

    .form-container .form-inner form {
        width: 50%;
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .form-inner form .field {
        height: 50px;
        width: 100%;
        margin-top: 20px;
    }

    .form-inner form .field input {
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 15px;
        border: none;
        border-bottom: 1px solid black;
        font-size: 17px;
        transition: all 0.3s ease;
    }

    .form-inner form .field input:focus {
        border-color: #1a75ff;
        /* box-shadow: inset 0 0 3px #fb6aae; */
    }

    .form-inner form .field input::placeholder {
        color: #999;
        transition: all 0.3s ease;
    }

    form .field input:focus::placeholder {
        color: #1a75ff;
    }

    .form-inner form .pass-link {
        margin-top: 5px;
    }

    .form-inner form .signup-link {
        text-align: center;
        margin-top: 30px;
    }

    .form-inner form .pass-link a,
    .form-inner form .signup-link a {
        color: #1a75ff;
        text-decoration: none;
    }

    .form-inner form .pass-link a:hover,
    .form-inner form .signup-link a:hover {
        text-decoration: underline;
    }

    form .btn {
        height: 50px;
        width: 100%;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
    }

    form .btn .btn-layer {
        height: 100%;
        width: 300%;
        position: absolute;
        left: -100%;
        background: -webkit-linear-gradient(right, #003366, #004080, #0059b3, #0073e6);
        border-radius: 15px;
        transition: all 0.4s ease;
        background-color: red !important;
    }

    form .btn:hover .btn-layer {
        left: 0;
    }

    form .btn input[type="submit"] {
        height: 100%;
        width: 100%;
        z-index: 1;
        position: relative;
        background: none;
        border: none;
        color: #bf925c !important;
        padding-left: 0;
        border-radius: 15px;
        font-size: 20px;
        font-weight: 500;
        cursor: pointer;
        background: #02292C;
    }
</style>

<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login Form</div>
            <div class="title signup">Signup Form</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form  class="login" method="POST" action=../action/config.php>
                    <div class="field">
                        <input type="email" placeholder="Email Address" name="email1" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="password1" required>
                    </div>
                    <div class="pass-link"><a href="#">Forgot password?</a></div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login" name="submit">
                    </div>
                    <div class="signup-link">Not a member? <a href="">Signup now</a></div>
                </form>




                <form  class="signup" method="POST" action=../action/config.php>
                    <div class="field">
                        <input type="text" placeholder="First Name" name="first" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Last Name" name="last" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Confirm password" name="confirm" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup" name="save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });
    </script>
</body>

</html>