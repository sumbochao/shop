<?php 
require_once __DIR__. "/autoload/autoload.php" ;
$user = $db->fetchID("users",intval( $_SESSION['name_id']));
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$data = 
	[
		'amount' =>$_SESSION['total'],
		'users_id' => $_SESSION['name_id'],
		'note' => postInput("note")
	];
	$idtran = $db->insert("transaction",$data);
	if($idtran > 0){
		foreach($_SESSION['cart'] as $key => $value)
		{
				$data2 = 
				[
					'transaction_id'   => $idtran,
					'product_id'	=> $key,
					'qty' 			=> $value['qty'],
					'price' 		=> $value['price']
				];
				$id_insert = $db->insert("orders",$data2);
		}
			unset($_SESSION['cart']);
			unset($_SESSION['total']);

		$_SESSION['success'] = "Lưu đơn hàng thành công!";
		header("location: thong-bao.php");
	}
}
?>
<?php require_once __DIR__. "/layouts/header.php" ;?>
<div class="col-md-9  ">   
 <section class="box-main1" id="slide">
<h3 class="title-main"><a href="">Thanh toán đơn hàng </a></h3>

 <form action="" method="POST" role="form" class="form-horizontal formcustome" style="margin-top: 20px">
 	<div class="form-group">
 		<label class="col-md-2 col-md-offset-1">Tên thành viên:</label>
 		<div class="col-md-8">
 			<input type="text" class="form-control" id="" placeholder="Nguyen Van A" name="name" value="<?php echo $user['name'] ?>">
 			
 		</div>
 		
 	</div>
 	<div class="form-group">
 		<label class="col-md-2 col-md-offset-1">Email:</label>
 		<div class="col-md-8">
 			<input type="email" class="form-control" id="" placeholder="abc@gmail.com" name="email" value="<?php echo $user['email'] ?> ">

 		</div>
 		
 	</div>
 	
 	<div class="form-group">
 		<label class="col-md-2 col-md-offset-1">Số điện thoại:</label>
 		<div class="col-md-8">
 			<input type="number" class="form-control" id="" placeholder="0349794999" name="phone" value="<?php echo $user['phone'] ?>">

 		</div>
 		
 	</div>

 	<div class="form-group">
 		<label class="col-md-2 col-md-offset-1">Địa chỉ:</label>
 		<div class="col-md-8">
 			<input type="text" class="form-control" id="" placeholder="278 lam sơn đồng tâm vĩnh yên vĩnh phúc" name="address" value="<?php echo $user['address'] ?>">

 		</div>
 		
 	</div>

 	<div class="form-group">
 		<label class="col-md-2 col-md-offset-1">Số tiền:</label>
 		<div class="col-md-8">
 			<input type="text" class="form-control" id="" placeholder="" name="599.000" value="<?php echo formatPrice($_SESSION['total']) ?>">

 		</div>
 		
 	</div>
 	<div class="form-group">
 		<label class="col-md-2 col-md-offset-1">Ghi chú </label>
 		<div class="col-md-8">
 			<input type="text" class="form-control" id="" placeholder="Giao hàng tận nơi" name="note" >

 		</div>
 		
 	</div>
 
 	
 
 	<button type="submit" class="btn btn-success col-md-2 col-md-offset-5" style="margin-top: 20px">Xác nhận</button>
 </form>

 </section>
 </div>
<?php require_once __DIR__. "/layouts/footer.php" ;?>    