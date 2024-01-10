<?php 
session_start(); 
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تغير كلمة المرور</title>

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
                    <form action="change-pass.php" method="POST" class="register-form" id="register-form">
                        <h1>تغيير كلمة المرور</h1><br>
                        
                            <div class="form-group">
                                <label for="usrn">رقم الهوية</label>
                                <input type="text" name="id1" id="usrn" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass">كلمة المرور الجديدة</label>
                                <input type="password" name="pass2" id="password5"  required/>
                            </div>
                            <div class="form-group">
                                <label for="pass">تأكيد كلمة المرور</label>
                                <input type="password" name="pass3" id="password6"  required/>
                            </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="تغيير كلمة المرور" class="submit" id="submit"
                            name ="modefy" onclick="modefy()"
                            />
                        </div>
                        <div class="w-50 text-md-right">
                            <h4><a href="Sign-in.php">تسجيل الدخول</a></h4>
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
<?php
     //update   
if(isset($_POST['modefy'])){   
       $id= $_POST['id1'];   
     $username1= $_POST['pass2'];   
     $passwordu= $_POST['pass3'];   
  
    
  $query="update users set id = '$id', password= '$passwordu' where id= '$id'";   
 $result = mysqli_query ($conn,$query);   
 if ($result){   
  echo "تم تعديل كلمة المرور بنجاح";   
     
}else {die('error');   
 }   
}    
 ?>