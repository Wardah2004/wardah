<?php 
session_start(); 
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>REEf AL-MRASY</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.jpg" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="Sign-in.php">تسجيل الدخول</a></li>
                        <li><a href="index.php">الرئيسة</a></li>
                        <li><a href="deals.php">المراسي</a></li>
                        <li><a href="about.php">اليخوت</a></li>
                        <li><a href="reservation.php" class="active">حجز</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>حجز رحلة</h2>
          <h4>أهلاً وسهلاً ومرحباً بكم في خدمة ريف المراسي للطلبات الخاصة للرحلات المؤجرة بالقارب كامل حيث نسر بتلقي طلبات رحلاتكم البحرية وتوجيهكم الى أصحاب القوارب وبحسب رغبتكم مع توفير آلية لتوثيق الحجز ونسعد بخدمتكم من خلال ارسال نموذج الطلب التالي</h4>
          <div class="main-button"><a href="about.php">استكشف اكثر</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info reservation-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>اتصل بنا</h4>
            <a href="#">+966 559 225 715</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>تواصل معنا عبر البربد الإلكتروني</h4>
            <a href="#">wardah_shobak@icloud.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-map-marker"></i>
            <h4>تفضل بزيارتنا</h4>
            <a href="#">مكة المكرمة ،حي بطحاء قريش 3969 ،يحيي الانصاري 6500</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d17591.14000970832!2d39.106196557060386!3d21.7367839085583!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c163d1532ca885%3A0xcb60ea3bf500358e!2sAlahlam%20Marina!5e1!3m2!1sen!2sth!4v1701961911594!5m2!1sen!2sth" width="100%" height="450px" frameborder="0" style="border:0; border-top-left-radius: 23px; border-top-right-radius: 23px;" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="col-lg-12">
          <form action="reservation.php" id="reservation-form" method="POST" role="search" >
            <div class="row">
              <div class="col-lg-12">
                <h4><em>قم   بالحجز   من   خلال   هذا   النموذج</em></h4>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="Name" class="form-label">الاسم</label>
                      <input type="text" name="Name" class="Name" placeholder="مثال : احمد علي " autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">رقم الجوال</label>
                    <input type="text" name="Number" class="Number" placeholder="+966 5x xxx xxxx : مثال " autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="chooseGuests" class="form-label">عدد الزئرين</label>
                      <input type="text" name="unumber" class="Number" placeholder="مثال : 3 ,4 ,5" autocomplete="on" required>
                      <!--<select name="Guests" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                          <option selected>Ex. 5 or 6</option>
                          <option type="checkbox" name="option1" value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4+">4+</option>
                      </select>-->
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">تحديد موعد الحجز</label>
                    <input type="date" name="date4" class="date" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
              <fieldset>
                      <label for="chooseGuests" class="form-label">تحديد المرسى</label>
                      <input type="text" name="activity" class="Number" placeholder="مثال : جدة, مرسى الأحلام" autocomplete="on" required>
                      <!--<select name="Guests" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                          <option selected>Ex. 5 or 6</option>
                          <option type="checkbox" name="option1" value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4+">4+</option>
                      </select>-->
                  </fieldset>
            </div>
              <!--<div class="col-lg-12">
                  <fieldset>
                      <label for="chooseDestination" class="form-label">اختر وجهتك</label>
                      <select name="Destination2" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                          <option selected>مثال : جدة, مرسى الأحلام</option>
                          <option value="Italy, Roma">جدة, مرسى الأمانة</option>
                          <option value="France, Paris">جدة, مرسى القطان</option>
                          <option value="Engaland, London">جدة, مرسى البحر الأحمر</option>
                          <option value="Switzerland, Lausanne">جدة, مرسى درة العروس</option>
                          <option value="Switzerland, Lausanne">جدة, مرسى الطفية</option>
                          <option value="Switzerland, Lausanne">جدة, مرسى كنز ابحر</option>
                      </select>
                  </fieldset>
              </div>-->
              <div class="col-lg-12">
              <fieldset>
                      <label for="chooseGuests" class="form-label">النشاط المطلوب</label>
                      <input type="text" name="activity1" class="Number" placeholder="مثال : صيد , غوص , نزهة , سباحة" autocomplete="on" required>
                      <!--<select name="Guests" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                          <option selected>Ex. 5 or 6</option>
                          <option type="checkbox" name="option1" value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4+">4+</option>
                      </select>-->
                  </fieldset>
            </div>
              <div class="col-lg-12">                        
                  <fieldset>
                      <button  name="add" onclick="add()" class="main-button">تأكيد الحجز</button><br><br>
                      <a href="delet reservation.php" class="main-button">حذف الحجز</a>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
     <div class="row">
        <!--<div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">WoOx Travel</a> Company. All rights reserved. 
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>-->
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
<?php 
$conn = mysqli_connect ('localhost','root','','reef al-mrasy');  
//insert   
if(isset($_POST['add'])){   
     
  $u= $_POST['Name'];   
  $r= $_POST['Number'];  
  $o= $_POST['unumber'];   
  $m= $_POST['date4'];  
  $k= $_POST['activity'];  
  $j= $_POST['activity1'];    
 
$query="INSERT INTO reservation (uname,phonenumber,numberofvisitors,reservationdate,choicenamemrasy,typeofactivity)
      VALUES ('$u','$r','$o','$m','$k','$j')";
$result = mysqli_query ($conn,$query);   
if ($result){   
echo "تم الحجز بنجاح";   
}else {die('error');   
}   }
//add  
//$conn = mysqli_connect ('localhost','root','','reef al-mrasy');   
//if(isset($_POST['add'])) 
//{	    
    //   $om= $_POST['Name']; 
    //  $ok= $_POST['Number'];  
    //  $op= $_POST['unumber'];    
    //  $on= $_POST['date4']; 
    //  $oy= $_POST['activity'];
    //  $ow= $_POST['activity1'];
      
//if($om !=='' && $ok !=='' && $op !=='' && $oy !=='' )  
//{  
  //$query="INSERT INTO reservation (uname,phonenumber,numberofvisitors,reservationdate,choicenamemrasy,typeofactivity)
          //   VALUES ('$om','$ok','$op','$on','$oy',$ow)";
// $result = mysqli_query ($conn,$query); 
 //if ($result){   
 // echo "تم تاكيد حجزك بنجاح";}
  // else {die('error');}   }    }
//insert   
//if(isset($_POST['add'])){   
     //$username= $_POST['id'];   
  //$passwordu= $_POST['comment'];     
 
//$query="INSERT INTO users (id, comment)
    //  VALUES ('$username','$passwordu')";
//$result = mysqli_query ($conn,$query);   
//if ($result){   echo "تمت اضافة التعليق";   }else {die('error');   }   }  

 ?>
