<?php 
require_once __DIR__. "/autoload/autoload.php" ;

$id = intval(getInput('id'));

$product = $db->fetchID("product",$id);

$cateid = intval($product['category_id']);
$sql = "SELECT * FROM product WHERE category_id = $cateid ORDER BY ID DESC LIMIT 4";
$sanphamkemtheo = $db->fetchsql($sql);

?>
<?php require_once __DIR__. "/layouts/header.php" ;?>
<div class="col-md-9 bor ">                
    <section class="box-main1" >
        <div class="col-md-6 text-center">
            <img src=" <?php echo uploads() ?>product/<?php echo $product['thunbar'] ?>" class="img-responsive bor" id="imgmain" width="100%" height="370" data-zoom-image="" >
        </div>
        <div class="col-md-6 bor" style="margin-top: 20px;padding: 30px;">
            <ul id="right">
                <li><h3>  <?php echo $product['name'] ?></h3></li>
                
                <?php if($product['sale'] > 0): ?>
                <li> <p><strike class="sale"><?php echo formatPrice($product['price'])?> </strike><b class="price" ><?php echo formatpricesale($product['price'],$product['sale'])?></b></p></li>
                        <?php else: ?>

                            <li> <p><b><?php echo formatPrice($product['price'])?></b></p></li> 

                        <?php endif ?>
                <li><a href="addcart.php?id=<?php echo $item['id'] ?>" class="btn btn-default"> <i class="fa fa-shopping-basket"></i>Add TO Cart</a></li>
            </ul>
        </div>
    </section>
    <div class="col-md-12" id="tabdetail">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Mô tả sản phẩm </a></li>
                
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active" style = "border-bottom: 1px solid #ccc; margin-bottom: 30px;">
                    <h3 style= "margin-bottom: 30px">Nội dung</h3>
                    <p><?php echo $product['content'] ?></p>
                </div>                                 
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="showitem" style="margin-top: 10px ; margin-bottom: 10px;">
            <?php foreach($sanphamkemtheo as $item): ?>
                <div class="col-md-4 item-product bor ">
                    <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">
                        <img src= " <?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" width="100%" height = "180px" >
                    </a>
                    <div class="info-item">
                        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"> <?php echo $item['name'] ?></a>
                        <p><strike class="sale"><?php echo formatPrice($item['price'])?> </strike>
                        <b class="price" ><?php echo formatpricesale($item['price'],$item['sale'])?></b></p>
                    </div>
                    <div class="hidenitem">
                        <p><a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><i class="fa fa-search"></i></a></p>
                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                        <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<?php require_once __DIR__. "/layouts/footer.php" ;?>    