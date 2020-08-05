

<?php 
$open = "category";
require_once __DIR__. "/../../autoload/autoload.php" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

                $data = 
                [
                "name" => postInput('name'),
                 "slug" => slug(postInput("name"))

                ];

                $error = [];
                if (postInput('name') == '') {
                    # code...
                    $error['name'] = " Mời bạn nhập đầy đủ tên danh mục ";
                }
                
                if (empty($error))
                 {
                    $isset= $db->fetchOne("category","name = '".$data['name']."' ");
                    if (count($isset)>0) {
                        $_SESSION['error']="Tên danh mục đã tồn tại! ";
                        # code...
                    }
                    else {


                    $id_insert = $db ->insert("category",$data);
                   if ($id_insert > 0)
                   {
                    $_SESSION['success'] = " Thêm mới thành công " ;
                    redirectAdmin("category");
                       
                   }
                   else{

                    $_SESSION['error'] = " Thêm mới thất bại ";
                   }
                   
                    }
                }

}

?>
<?php require_once __DIR__. "/../../layouts/header.php"; ?>
                    <!-- CONTENT -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="color: #194b84; font-weight: bold; class="page-header">
                                New Category 
                            </h1>

                            <div class="clearfix"></div>
                            <?php require_once __DIR__. "/../../../partials/notification.php"; ?>   
                        </div>
                    </div>
              <br>      
<div class="row">
    <div class="col-md-12">

<!--- form dang nhap>>>>>>-->
<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Tên danh mục" name="name">
        </div>

<?php if (isset($error['name'])): ?>
<p class="text-danger"> <?php echo $error['name']; ?>  </p>
<?php  endif  ?>

        
    </div>
    
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary"> Save </button>
        </div>
    </div>
</form>
    </div>
</div>
                    <!-- /.row -->
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   
                                </div>
                               
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- /.row -->
         <?php require_once __DIR__. "/../../layouts/footer.php"; ?>