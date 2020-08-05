<?php
require_once __DIR__. "/autoload/autoload.php" ;
$sqlHomecate = "SELECT * FROM category WHERE home = 1 ORDER BY updated_at ";
$CategoryHome = $db->fetchsql($sqlHomecate);
$data = [];
foreach($CategoryHome as $item){
    $CateId = intval($item['id']);
    
    $sql = "SELECT * FROM product WHERE category_id = $CateId";
    $ProductHome = $db->fetchsql($sql);
    $data[$item['name']] = $ProductHome;
}
?>
<?php require_once __DIR__. "/layouts/header.php" ;?>
     <div class="col-md-9 bor ">   
     	<section class="box-main1" id="slide">
            <?php foreach ($data as $key =>$value): ?>
            
            
            <div class="showitem" style="margin-top: 10px ; margin-bottom: 10px;">
                <?php foreach($value as $item): ?>
                    <div class="col-md-4 item-product ">
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
            <?php endforeach ?>
            
        </section>
    </div>
</div>           
<?php require_once __DIR__. "/layouts/footer.php" ;?>  
