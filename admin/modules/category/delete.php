

<?php 
$open = "category";
require_once __DIR__. "/../../autoload/autoload.php" ;

$id = intval(getInput('id'));

$EditCategory = $db->fetchID("category",$id);
if (empty($EditCategory)) {
    # code...
    $_SESSION['error'] = "Du lieu khong ton tai";
    redirectAdmin("category");

}
$is_product = $db->fetchOne("product"," category_id = $id ");
if($is_product == NULL) {
	# code...
	$num = $db->delete("category",$id);
if($num > 0){
    $_SESSION['success'] = "Xóa thanh công";
    redirectAdmin("category");
} else
{
    $_SESSION['error'] = "Xóa that bai";
    redirectAdmin("category");
}

}
else{
	 $_SESSION['error'] = "Danh mục có sản phẩm ! bạn không thể xóa";
    redirectAdmin("category");
}




?>