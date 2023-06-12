<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Giam Sat</title>
    <link rel="stylesheet" type="text/css" href="homee.css" /> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript">
    </script>
</head>

<body>  
  
  <section class="section-heading">
    <div class="heading">

       <div class="heading-img-box">
           <img src="image/utc2.png" class="logo-utc" alt="logo utc2" />
       </div>

       <div class="heading-text-box">
          <h4 class="heading-primary">TRƯỜNG ĐẠI HỌC GIAO THÔNG VẬN TẢI</h4>
          <h1 class="heading-second">PHÂN HIỆU TẠI TP. HỒ CHÍ MINH</h1>
          <h1 class="heading-third">KHOA ĐIỆN - ĐIỆN TỬ </h1>
          
       </div>   
       <div class="heading-mm">
          <h1 class="heading-main">ĐỒ ÁN TỐT NGHIỆP </h1>
          <p class="heading-term">  Năm học 2022-2023 </p>
       </div>  
    </div>  
  </section>

  <section class = "body-pro">
    <div class="body-cl">
        <h1 class ="text-grh">Green House</h1>
      
      <div class="monitoring">
        <div class="item1" style="border: red solid 2px;">
            <div class="tieude" style="background-color: red;"> <div class="tieude_text"> <span id="dk">Nhiệt độ</span> </div></div>
                  <div style="float:left"><img src="image/nhietdo.png" class="img_ico"/></div>
                  <div id="nhietdo_v" style="float:right" class="thongso">---</div>
        </div>

        <div class="item1" style="border: #00bcd4 solid 2px;">
            <div class="tieude" style="background-color: #00bcd4;"> <div class="tieude_text"> <span id="dk">Độ ẩm</span> </div></div>
                  <div style="float:left"><img src="image/doam.png" class="img_ico"/></div>
                  <div id="doam_v" style="float:right" class="thongso">---</div>
        </div> 

        <!-- <div class="item1" style="border: #00bcd4 solid 2px;">
            <div class="tieude" style="background-color: #00bcd4;"> <div class="tieude_text"> <span id="dk">Độ ẩm đất</span> </div></div>
                <div style="float:left"><img src="image/doamdat.png" class="img_ico"/></div>
                <div id="doamdat_v" style="float:right" class="thongso">---</div>
        </div>

        <div class="item1" style="border: #00bcd4 solid 2px;">
            <div class="tieude" style="background-color: #00bcd4;"> <div class="tieude_text"> <span id="dk">Ánh sáng</span> </div></div>
                <div style="float:left"><img src="image/anhsang.png" class="img_ico"/></div>
                <div id="anhsang_v" style="float:right" class="thongso">---</div>
        </div>  -->
      </div>
      <div class="monitoring">  
        <div class="item1" style="border: #A17544 solid 2px;">
            <div class="tieude" style="background-color: #A17544;"> <div class="tieude_text"> <span id="dk">Độ ẩm đất</span> </div></div>
                <div style="float:left"><img src="image/doamdat.png" class="img_ico"/></div>
                <div id="doamdat_v" style="float:right" class="thongso">---</div>
        </div>

        <div class="item1" style="border: #c29fce solid 2px;">
            <div class="tieude" style="background-color: #c29fce;"> <div class="tieude_text"> <span id="dk">Ánh sáng</span> </div></div>
                <div style="float:left"><img src="image/anhsang.png" class="img_ico"/></div>
                <div id="anhsang_v" style="float:right" class="thongso">---</div>
        </div> 
     </div> 
      

    </div> 
  </section>

  <section class="section-footer">
    <div class="footer-cl">
          <h1 class="footer-gv">GVHD: Ths Lê Mạnh Tuấn </h1>
          <p class="footer-sv">  SVTH: Châu Thanh Hải </p>      
          <a href="logout.php">Logout</a>
    </div>  
  </section>
    
</body>
    <script src="home.js"></script>

</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>