
<?php 
require_once __DIR__. "/autoload/autoload.php" ;

?>
<?php require __DIR__."/layouts/header.php" ;

?>
    
            <div class="col-md-9  "   >                
                <section id="slide" class="text-center">
                                
                    <div id="myCarousel" class="carousel slide ">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="item active">
                        <a href="tat-ca-san-pham.php">
                        <img src="images/slide1.jpg"  class="img-responsive"></a>
                        <div class="container">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        </div>
                        <div class="item">
                        <img src=" images/slide2.jpg " class="img-responsive">
                        <div class="container">
                            <div class="carousel-caption">
                            
                            </div>
                        </div>
                        </div>
                        <div class="item">
                        <img src=" images/slide3.jpg"  class="img-responsive">
                        <div class="container">
                            <div class="carousel-caption">
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </a>  
                    </div>
                </section>  

                <section class="box-main1" id="slide">
                    <?php foreach ($data as $key =>$value): ?>
                    <h3 class="title-main"><a href=""><?php echo $key ?></a></h3>
                    
                    <ul><div class="showitem navbar-collapse" style="margin-top: 10px ; margin-bottom: 10px;">
                        <?php foreach($value as $item): ?>
                            <div class="col-md-3 item-product border"> 

                                <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">
                                    <img class=" " src= " <?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" width="100%" height = "180px" >
                                </a>
                                    <div class="info-item">
                                        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"> <?php echo $item['name'] ?></a>
                                        <p><strike class="sale"><?php echo formatPrice($item['price'])?> </strike>
                                        <b class="price" ><?php echo formatpricesale($item['price'],$item['sale'])?></b></p>
                                                    
                                    </div>
                                <div class="hidenitem">

                                    <p><a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><i class="fa fa-search"></i></a></p>
                                    <p><a href=""><i class="fa fa-heart"></i></a></p>
                                    <p><a href="addcart.php?id=<?php echo $item['id'] ?>"><i class="fa fa-shopping-basket"></i></a></p>
                                </div>
                                
                            </div>
                        <?php endforeach ?>

                    </div>
                    <?php endforeach ?></ul>
                        
                </section>

            </div>
        </div>
    </div>
</div>            
<?php require_once __DIR__. "/layouts/footer.php" ;?>    