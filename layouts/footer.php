                    <div class="container">
                    </div> 
                    <div  class="container-fluid">
                    <section id="footer">
                        <div class="container-fluid">
                            <div id="shareicon">
                                <ul>
                                    <li>
                                        <a href="http://facebook.com/luong.ngocduy2"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UC9R56SnBkFw5NXgS7y-gCXA?view_as=subscriber"><i class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                           
                        
                        </div>
                    </section>
                    <section id="footer-button">
                        <div class="container-pluid">
                            <div class="container">
                               
                               
                                <div class="col-md-3 box-footer" >
                                    <h3 class="tittle-footer"> Liên hệ</h3>
                                    <ul>
                                        <li>
                                            
                                            <p><i class="fa fa-home" style="font-size: 16px;padding-right: 5px;"></i>175 Tây Sơn - Đống Đa Hà Nội</p>
                                            <p><i class="sp-ic fa fa-mobile" style="font-size: 22px;padding-right: 5px;"></i> 0338866506</p>
                                            <p><i class="sp-ic fa fa-envelope" style="font-size: 13px;padding-right: 5px;"></i> hainv721@wru.vn</p>
                                        </li>
                                    </ul>
                                </div>
                                
                             
                        </div>
                    </section>
                    <section id="ft-bottom">
                        <p class="text-center"></p>
                    </section>
                </div>
            </div>      
        </div>
    </div>     
</div>
   <script src="<?php echo base_url() ?>public/frontend/js/slick.min.js" ></script>

    </body>
        
</html>

<script type="text/javascript">
    $(function() {
        $hidenitem = $(".hidenitem");
        $itemproduct = $(".item-product");
        $itemproduct.hover(function(){
            $(this).children(".hidenitem").show(100);
        },function(){
            $hidenitem.hide(500);
        })
    })

$(function(){
    $updatecart = $(".updatecart");
    $updatecart.click(function(e) {
        e.preventDefault();
        $qty = $(this).parents("tr").find(".qty").val();
        $key = $(this).attr("data-key");
        $.ajax({
    url: ' cap-nhat-gio-hang.php ',
    type: 'GET',
    data: {'qty':$qty ,'key':$key},
    success:function(data)
    {
        if(data == 1){
            alert(" Cập nhật giỏ hàng thành công ");
            location.href = 'gio-hang.php';
        }
    }

            });
        /* Act on the event */
    })
})

$(document).ready(function() {
    $('#btnSearch').click(function(){
        var keywork = $('#txtSearch').val();
        $.post("search.php",{
            tukhoa:keyword
        },function(data){
            $('#dataSearch').html(data);

        })
  
})
})

</script>