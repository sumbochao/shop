

<?php 
$open = "category";
require_once __DIR__. "/../../autoload/autoload.php" ;
$category = $db->fetchAll("category");
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

                $data = 
                [
                "name" => postInput('name'),
                "slug"=> slug(postInput("name")),
                "category_id"=> postInput("category_id"),
                "price"=> postInput("price"),
                "number"=> postInput("number"),
                "content"=> postInput("content"),
               

                ];

                $error = [];
                if (postInput('name') == '') {
                    # code...
                    $error['name'] = " Mời bạn nhập đầy đủ tên danh mục ";
                }

                if (postInput('category_id') == '') {
                    # code...
                    $error['category_id'] = " Mời bạn chọn tên danh mục ";
                }

                if (postInput('price') == '') {
                    # code...
                    $error['price'] = " Mời bạn nhập giá sản phẩm ";
                }
                if (postInput('content') == '') {
                    # code...
                    $error['content'] = " Mời bạn nhập nội dung ";
                }
                if (postInput('number') == '') {
                    # code...
                    $error['number'] = " Mời bạn nhập số lượng sản phẩm";
                }
                

                    if ( ! isset($_FILES['thunbar'])) {
                        $error['thunbar'] = " Mời bạn chọn hình ảnh";
                        # code...
                    }


                if (empty($error))
                 {
                    if(isset($_FILES['thunbar']))
                    {
                        $file_name = $_FILES['thunbar']['name'];
                        $file_tmp = $_FILES['thunbar']['tmp_name'];
                        $file_type = $_FILES['thunbar']['type'];
                        $file_erro = $_FILES['thunbar']['error'];

                        if($file_erro ==0)
                        {
                            $part = ROOT ."product/";
                            $data['thunbar'] = $file_name;
                        }
                    }
                   $id_insert = $db->insert("product",$data);
                   if($id_insert)
                   {
                    move_uploaded_file($file_tmp, $part.$file_name);
                    $_SESSION['success'] = " Thêm mới thành công";
                    redirectAdmin("product");
                   }else{
                    $_SESSION['error'] = "Thêm mới thất bại";
                   }
                   
                    }
                }



?>
<?php require_once __DIR__. "/../../layouts/header.php"; ?>
                    <!-- CONTENT-->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="color: #194b84; font-weight: bold; class="page-header">
                               New Product
                            </h1>
                           
                            <div class="clearfix"></div>
                            <?php require_once __DIR__. "/../../../partials/notification.php"; ?>   
                        </div>
                    </div>
                    
<div class="row">
    <div class="col-md-12">

<!--- form dang nhap>>>>>>-->
<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

     <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
        <div class="col-sm-8">
            <select class="form-control col-md-8" name="category_id">
                <option value="">Please choose category</option>
                <?php foreach ($category as $item):  ?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?> </option>
                    option
                <?php endforeach ?>
                     </select>
       

            <?php if (isset($error['category_id'])): ?>
            <p class="text-danger"> <?php echo $error['category_id'] ?>  </p>
            <?php  endif  ?>

                 </div>    
                </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Bitis Hunter" name="name" >
        </div>

<?php if (isset($error['name'])): ?>
<p class="text-danger"> <?php echo $error['name'] ?>  </p>
<?php  endif  ?>

        
    </div>



    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-8">
            <input type="number" class="form-control" id="inputEmail3" placeholder="599.000" name="price">
       

<?php if (isset($error['price'])): ?>
<p class="text-danger"> <?php echo $error['price'] ?>  </p>
<?php  endif  ?>

        </div> 
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Number</label>
        <div class="col-sm-8">
            <input type="number" class="form-control" id="inputEmail3" placeholder="100" name="number">
       

<?php if (isset($error['number'])): ?>
<p class="text-danger"> <?php echo $error['number'] ?>  </p>
<?php  endif  ?>

        </div> 
    </div>

    
<div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Sale</label>
        <div class="col-sm-3">
            <input type="number" class="form-control" id="inputEmail3" placeholder="10%" name="sale" value="0">
        </div>
         <label for="inputEmail3" class="col-sm-1 control-label">Image</label>
        <div class="col-sm-3">
            <input type="file" class="form-control" id="inputEmail3" name="thunbar" >
            <?php if(isset($error['thunbar'])): ?>
<p class="text-danger"> <?php echo $error['thunbar']?>  </p>
<?php  endif  ?>

        </div>
        
    </div>


    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Details</label>
        <div class="col-sm-8">
            
        <textarea class="form-control" name="content" rows="4"></textarea>

            <?php if (isset($error['content'])): ?>
            <p class="text-danger"> <?php echo $error['content'] ?>  </p>
            <?php  endif  ?>
            </div>
                    
            </div>

                                 <div class="form-group row">
                <div class="col-sm-10">
                     <button type="submit" class="btn btn-primary">Save</button>
                     </div>
             </div>
        </form>
    </div>
</div>


                    <!-- /.row -->
                    
                        </div>
                    </div>
                    <!-- /.row -->
         <?php require_once __DIR__. "/../../layouts/footer.php"; ?>