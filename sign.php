<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Styles Personalized -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="#">
        <title>Facebook</title>
    </head>
    <body>
        <div class="header"></div>
        
        <div class="main">
            <div class="left-side">
                <img src="assets/image/facebook Signin image.png" alt="">
            </div><!-- / .left-side -->

            <div class="right-side">
                <div class="error"></div>

                <h1 style="color:#212121;">Create an account</h1>
                <div style="color:#212121; font-size:20px;">It's free and always will be</div>

                <form action="sign.php" method="post" name="user-sign-up">
                    <div class="sign-up-form">
                        <div class="sign-up-name">
                            <input type="text" name="first-name" id="first-name" class="text-field" placeholder="First Name">

                            <input type="text" name="last-name" id="last-name" class="text-field" placeholder="Last Name">
                        </div>

                        <div class="sign-up-movile">
                            <input type="text" name="email-movile" id="up-email" class="text-input" placeholder="Mobile number or email address">
                        </div>

                        <div class="sign-up-password">
                            <input type="password" name="up-password" id="up-password" class="text-input" placeholder="Password">
                        </div>

                        <div class="sign-up-birthday">
                            <div class="bday">Birthday</div>

                            <div class="form-birthday">
                                <select name="birth-day" id="days" class="select-body"></select>
                                <select name="birth-month" id="months" class="select-body"></select>
                                <select name="birth-year" id="years" class="select-body"></select>
                            </div>
                        </div>

                        <div class="gender-wrap">
                            <input type="radio" name="gen" id="fem" value="female" class="m0">
                            <label for="fem" class="gender">Female</label>
                            <input type="radio" name="gen" id="male" value="male" class="m0">
                            <label for="male" class="gender">Male</label>
                        </div>

                        <div class="term">
                            By clicking Sign Up, you agree to our terms, Data policy and Cookie policy. You may receive SMS notifications from us and can opt out at any time.
                        </div>

                        <input type="submit" value="Sign Up" class="sign-up">
                    </div><!-- / .sign-up-form -->
                </form>
            </div><!-- /.right-side -->
        </div><!-- / .main -->

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>