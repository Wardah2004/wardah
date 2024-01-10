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
    <title>انشاء حساب مستخدم جديد</title>

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
                    <form action="Sign-up.php" method="POST" class="register-form" id="register-form">
                        <h1>انشاء حساب مستخدم جديد</h1><br>
                        <div class="form-group">
                            <label for="name">الاسم</label>
                            <input type="text" name="name" id="name" required/>
                        </div>
                        <div class="form-group">
                            <label for="id">رقم الهوية</label>
                            <input type="text" name="id" id="id" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">العنوان</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="phone number">رقم الجوال</label>
                            <input type="number" name="phonenumber" id="number" required/>
                        </div>
                        <div class="form-group">
                        <label for="chooseGuests">نوع المستخدم</label>
                        <input type="text" name="ab" class="Number" placeholder="مثال : زائر , مسؤول" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">انشاء كلمة المرور</label>
                            <input type="password" name="password4" id="password"  required/>
                        </div>
                        <div class="form-group">
                            <label for="pass">تأكيد كلمة المرور</label>
                            <input type="password" name="password2" id="password"  required/>
                        </div>
                        <div class="form-submit">
                            <input type="submit"  name="add" onclick="add()" value="انشاء حساب" class="submit" id="submit"  />
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
//add  
$conn = mysqli_connect ('localhost','root','','reef al-mrasy');   
if(isset($_POST['add'])) 
{	    
      $om= $_POST['name']; 
      $ok= $_POST['id'];  
      $op= $_POST['phonenumber'];    
      $on= $_POST['password4']; 
      $ow= $_POST['password2'];
      $oy= $_POST['address'];
      $pwo= $_POST['ab'];
      
if($om !=='' && $ok !=='' && $op !=='' && $oy !=='' && $pwo !=='' && $on==$ow)  
{  
  $query="INSERT INTO users (name,id,phonenumber,password,address,sex)
             VALUES ('$om','$ok','$op','$on','$oy','$pwo')";
 $result = mysqli_query ($conn,$query); 
 if ($result){   
  echo "تم انشاء حسابك بنجاح";}
  else {die('error');}   
}    
}
//insert   
//if(isset($_POST['add'])){   
     //$username= $_POST['id'];   
  //$passwordu= $_POST['comment'];     
 
//$query="INSERT INTO users (id, comment)
    //  VALUES ('$username','$passwordu')";
//$result = mysqli_query ($conn,$query);   
//if ($result){   echo "تمت اضافة التعليق";   }else {die('error');   }   }    

 ?>