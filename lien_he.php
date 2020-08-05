<?php
require_once __DIR__. "/autoload/autoload.php" ;
?>
<?php require_once __DIR__. "/layouts/header.php" ;?>
     <div class="col-md-9  ">   
     	<section class="box-main1" id="slide">
            <h3 class="title-main"><a href="">Thông tin liên hệ</a></h3>
            <div class= "contact-desc">
                                <h4 style="margin-top: 15px; margin-bottom: 10px;">Một vài thông tin về công ty:</h4>
                <p>công ty TNHH 4 Thành viên

                Địa chỉ: 175 Tây Sơn - Đống Đa - Hà Nội
                </p>
                <p>Địa chỉ: 175 Tây Sơn - Đống Đa - Hà Nội
                </p>
                <p>Email : Liên hệ các vấn đề về đặt hàng online : hainv721@wru.vn </p>
                <p>Email : Liên hệ các vấn đề về kênh cửa hàng, đại lý (offline) : chamsockhachhang@bitis.com.vn</p>

                <p>Thời gian tư vấn: Thứ hai đến thứ bảy: từ 7h30 đến 16h30.</p>

                <p>Hotline : 19008198 </p>

                <p>Sđt: 0349474999 </p>
                <div class="contact">
                <form action="" class="contact__form">
                    <label class="contact__label" >Họ và tên</label> <br> 
                    <input id="username" class="contact__item" type="text" name="username" placeholder="Điền tên của bạn" value="">
                    <p class="contact__error" id="error-name"></p>
                    <br>
                    <label class="contact__label" >Email</label> <br>
                    <input id="email"  class="contact__item"  type="email" name="email" placeholder="Điền email của bạn" value="">
                    <p class="contact__error" id="error-email"></p>
                    <br>
                    <label for="">Tin nhắn</label> <br>
                    <textarea id="mess"  class="contact__item"  cols="30" rows="5" value="" placeholder="Bạn muốn nhắn gì tới Biti's ?"></textarea> 
                    <p class="contact__error" id="error-mess"></p>
                    <br>
                    <button onclick="return  testForm()" class="contact__button">send</button>
                </form>
            </div>  
            </div>
            
        </section>
    </div>
    </div>               
<?php require_once __DIR__. "/layouts/footer.php" ;?>  