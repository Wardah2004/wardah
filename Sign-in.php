<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/pb.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form action="login.php" method="POST" class="register-form" id="register-form">
                        <h1>تسجيل الدخول</h1><br>

                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>       
                                      
                        <div class="form-group">
                            <label for="uname">رقم الهوية</label>
                            <input type="text" name="uname" id="uname" required/>
                        </div>
                        <div class="form-group">
                            <label for="password">كلمة المرور</label>
                            <input type="password" name="password" id="password"  required/>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="تسجيل الدخول" class="submit" name="submit" id="submit" />
                        </div>
                        <div class="w-50 text-md-right">
                            <h4><a href="Sign-up.php">هل انت مستخدم جديد؟</a><br>
                            <a href="change-pass.php">تغيير كلمة المرور</a><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>