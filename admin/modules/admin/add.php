<?php 
$open = "category";
require_once __DIR__. "/../../autoload/autoload.php" ;
$data = 
                [
                    "name" => postInput('name'),
                    "email" => postInput("email"),
                    "phone" => postInput("phone"),
                    "password" => postInput("password") ,
                    "address" =>postInput("address"),
                    "level" => postInput("level")
                ];

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

                
                $error = [];
                if (postInput('name') == '') {
                    # code...
                    $error['name'] = " Mời bạn nhập họ và tên ";
                }

                if (postInput('email') == '') {
                    # code...
                    $error['email'] = " Mời bạn nhập email ";
                }else
                {
                    $is_check = $db->fetchOne("admin"," email = '".$data['email']."' ");
                    if ($is_check  != NULL) {
                        $error['email'] = " Email này đã tồn tại ";
                        # code...
                    }
                }

                if (postInput('phone') == '') {
                    # code...
                    $error['phone'] = " Mời bạn nhập số điện thoại ";
                }
                if (postInput('password') == '') {
                    # code...
                    $error['password'] = " Mời bạn nhập mật khẩu ";
                }

                if (postInput('address') == '') {
                    # code...
                    $error['address'] = " Mời bạn nhập địa chỉ của bạn ";
                }
                
                if ($data['password'] != postInput("re_password"))
                 {
                $error['password'] = " Mật khẩu không khớp " ;   # code...
                }

                    

                if (empty($error))
                 {
                    
                   $id_insert = $db->insert("admin",$data);
                   if($id_insert)
                   {
                   
                    $_SESSION['success'] = " Thêm mới thành công";
                    redirectAdmin("admin");
                   }
                   else
                   {
                    $_SESSION['error'] = "Thêm mới thất bại";
                   }
                   
                    }
                }

?>
<?php require_once __DIR__. "/../../layouts/header.php"; ?>
                    <!-- CONTENT -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="color: #194b84; font-weight: bold; class="page-header">
                               Create Admin
                            </h1>
                            
                            <div class="clearfix"></div>
                            <?php require_once __DIR__. "/../../../partials/notification.php"; ?>   
                        </div>
                    </div>
             <br>       
<div class="row">
    <div class="col-md-12">

<!--- form login -->
<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Full name</label>
        <div class="col-sm-8">
 <input type="text" class="form-control" id="inputEmail3" placeholder="duy minh manh" name="name" 
 value="<?php echo $data['name'] ?>" >
<?php if (isset($error['name'])): ?>
<p class="text-danger"> <?php echo $error['name'] ?>  </p>
<?php  endif  ?>

     </div>    
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-8">
            <input type="email" class="form-control" id="inputEmail3" placeholder="abcxyz@gmail.com" name="email" value="<?php echo $data['email'] ?>" >

<?php if (isset($error['email'])): ?>
<p class="text-danger"> <?php echo $error['email'] ?>  </p>
<?php  endif  ?>

        </div> 
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-8">
            <input type="phone" class="form-control" id="inputEmail3" placeholder="0349794999" name="phone" value="<?php echo $data['phone'] ?>" >  

<?php if (isset($error['phone'])): ?>
<p class="text-danger"> <?php echo $error['phone'] ?>  </p>
<?php  endif  ?>

        </div> 
    </div>

 <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" id="inputEmail3" placeholder="************" name="password" required="" >
       

<?php if (isset($error['password'])): ?>
<p class="text-danger"> <?php echo $error['password'] ?>  </p>
<?php  endif  ?>

        </div> 
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Config Password</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" id="inputEmail3" placeholder="************" name="re_password">
       

<?php if (isset($error['re_password'])): ?>
<p class="text-danger"> <?php echo $error['re_password'] ?>  </p>
<?php  endif  ?>

        </div> 
    </div>
    

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder=" ha noi " name="address" value="<?php echo $data['address'] ?>" >
<?php if (isset($error['address'])): ?>
<p class="text-danger"> <?php echo $error['address'] ?>  </p>
<?php  endif  ?>

        </div>
         </div>

        <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Level</label>
        <div class="col-sm-8">
         <select class="form-control" name="level">
             <option value="1" <?php echo isset($data['level']) && $data['level'] == 1 ? "selected = 'selected'" : '' ?>> CTV </option>
               <option value="2" <?php echo isset($data['level']) && $data['level'] == 2? "selected = 'selected'" : '' ?> >Admin </option>
         </select>

<?php if (isset($error['level'])): ?>
<p class="text-danger"> <?php echo $error['level'] ?>  </p>
<?php  endif  ?>

        </div>
    </div>

                                 <div class="form-group row">
                <div class="col-sm-10">
                     <button type="submit" class="btn btn-primary"> Save</button>
                     </div>
             </div>
        </form>
    </div>
</div>


                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   
                                </div>
                               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
         <?php require_once __DIR__. "/../../layouts/footer.php"; ?>