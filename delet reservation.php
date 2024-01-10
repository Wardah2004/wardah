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
  
  <div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form action="delet reservation.php" id="reservation-form" method="POST" role="search" >
            <div class="row">
              <div class="col-lg-12">
                <h4><em>قم   بالغاء الحجز   من   خلال   هذا   النموذج</em></h4>
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
                    <input type="Number" name="Number" class="Number" placeholder="+966 5x xxx xxxx : مثال " autocomplete="on" required>
                </fieldset>
              </div>
                  <div class="col-lg-12">                        
                  <fieldset>
                      <button name="delete" onclick="delete1()" class="main-button">الغاء الحجز</button>
                  </fieldset>
                 </div>
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
              
  //delete   
  if(isset($_POST['delete'])){   
     $username= $_POST['Number'];   
     $query="delete from reservation where phonenumber= '$username'"; 
    $result = mysqli_query ($conn,$query);   
    if ($result){   
     echo "تم حذف الحجز"; 
    }else {die('error');   
    } 
   }
  ?>