<?php 
require_once __DIR__. "/autoload/autoload.php" ;
if ( isset($_SESSION['name_id'])) {
	echo "<script>alert(' Bạn đã có tài khoản nên không thể vào đây ');location.href='index.php'</script>";
	# code...
}
// xu li

$data = [
	'name' => postInput("name"),
	'email'=>postInput("email"),
	'password' => postInput("password"),
	'phone' => postInput("phone"),
	'address' => postInput("address")
];

$error = [];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	if ($data['name'] == '') {
		$error['name'] = "Tên không được để trống !";
	
	}
	if ($data['email'] == '') 
	{
		$error['email'] = "Email không được để trống !";
	
	}
	else{
		$is_check = $db->fetchOne("users","email = '".$data['email']."' ");
		if ($is_check !=NUll) {
			# code...
			$error['email'] = " Email này đã tồn tại !!!";
		}
	}


	if ($data['password'] == '') {
		$error['password'] = "Mật khẩu không được để trống !";
		# code...
	}else{
		$data['password'] = postInput('password');
	}
	



	
	if ($data['phone'] == '') {
		$error['phone'] = "Số điện thoại không được để trống !";
		# code...
	}

	if ($data['address'] == '') {
		$error['address'] = "Địa chỉ không được để trống !";
		
	}


	if (empty($error)) {
		$idinsert = $db ->insert("users",$data);
		if ($idinsert >0) {
			# code...
			$_SESSION['success'] = " Đăng kí thành công ! Mời bạn đăng nhập !!! ";
			header("location: dang-nhap.php ");
		}
		else{
			echo "Đăng kí thất bại ! ";
		}
		
	}
}


?>
<?php require_once __DIR__. "/layouts/header.php" ;?>
<div class="col-md-9 bor ">   
 <section class="box-main1" id="slide">
<h3 class="title-main"><a href="">Đăng kí thành viên</a></h3>

 <form action="" method="POST" role="form" class="form-horizontal formcustome" style="margin-top: 20px">
 	<div class="form-group">
 		<label class="col-md-2 col-md-offset-1">Tên thành viên:</label>
 		<div class="col-md-8">
 			<input type="text" class="form-control" id="" placeholder="Nguyen Van A" name="name" value="<?php echo $data['name'] ?>">
 			<?php if (isset($error['name'])) : ?>
 				<p class="text-danger"><?php echo $error['name']?></p>
 			<?php endif ?>
 		</div>
 		
 	</div>
 	<div class="form-group">
 		<label class="col-md-2 col-md-offset-1">Email:</label>
 		<div class="col-md-8">
 			<input type="email" class="form-control" id="" placeholder="email@gmail.com" name="email" value="<?php echo $data['email'] ?> ">

 			<?php if (isset($error['email'])): ?>
 				<p class="text-danger"><?php echo $error['email'] ?></p>
 			<?php endif ?>
 		</div>
 		
 	</div>
 	<div class="form-group">
 		<label class="col-md-2 col-md-offset-1">Mật khẩu:</label>
 		<div class="col-md-8">
 			<input type="password" class="form-control" id="" placeholder="*********" name="password" value="<?php echo $data['password'] ?>" >

 			<?php if (isset($error['password'])): ?>
 				<p class="text-danger"><?php echo $error['password'] ?></p>
 			<?php endif ?>
 		</div>
 		
 	</div>
 	<div class="form-group">
 		<label class="col-md-2 col-md-offset-1">Số điện thoại:</label>
 		<div class="col-md-8">
 			<input type="number" class="form-control" id="" placeholder="0963225658" name="phone" value="<?php echo $data['phone'] ?>">

 			<?php if (isset($error['phone'])): ?>
 				<p class="text-danger"><?php echo $error['phone']?></p>
 			<?php endif ?>
 		</div>
 		
 	</div>

 	<div class="form-group">
 		<label class="col-md-2 col-md-offset-1">Địa chỉ:</label>
 		<div class="col-md-8">
 			<input type="text" class="form-control" id="" placeholder="Ha Noi, Viet Nam" name="address" value="<?php echo $data['address'] ?>">

 			<?php if (isset($error['address'])): ?>
 				<p class="text-danger"><?php echo $error['address']?></p>
 			<?php endif ?>
 		</div>
 		
 	</div>
 
 	
 
 	<button type="submit" class="btn btn-success col-md-2 col-md-offset-5" style="margin-top: 20px">Đăng kí</button>
 </form>


 </section>
 </div>
<?php require_once __DIR__. "/layouts/footer.php" ;?>    