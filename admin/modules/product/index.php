

<?php 
$open= "product";
require_once __DIR__. "/../../autoload/autoload.php" ;


if(isset($_GET['page']))
{
  $p = $_GET['page'];
}
else
{
  $p = 1;
}

$sql = "SELECT product.*,category.name as namecate FROM product
 LEFT JOIN category on category.id = product.category_id";


$product = $db->fetchJone('product',$sql,$p,3,true);
if (isset($product['page']))
 {
  $sotrang = $product['page'];
  unset($product['page']);
  # code...
}



?>
<?php require_once __DIR__. "/../../layouts/header.php"; ?>
                    <!-- CONTENT -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="color: #194b84; font-weight: bold; class="page-header">
                               Product List
</h1>
                                <a href="add.php" class="btn btn-success">New Product</a>
                           
                            <div class="clearfix"></div>
                            
                                <?php require_once __DIR__. "/../../../partials/notification.php"; ?>      
                                   
                        </div>
                    </div>
                    <br>
                    <!-- /.row -->
 <div class="row">
  <div class="pull-0">                      
<div class="col-md-12">
    <div class=" table-responsive">
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Slug</th>
                        <th>Thunbar</th>
                        <th>Infor</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; foreach ($product as $item) :
                    ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['name'] ?></td>
                         <td><?php echo $item['namecate'] ?></td>
                        <td><?php echo $item['slug'] ?>
                         </td>
                        <td>
                          <img src= " <?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" width="80px" height = "80px " >
                        </td>
                        

                          <td>
                            <ul>
                              <li>Price: <?php echo $item['price']?></li>
                              <li>Number: <?php echo $item['number']?></li>
                            </ul>

                          </td>
                        <td>
                            <a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $item['id'] ?>">
                                <i class="fa fa-edit"></i>Edit</a>
                            <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>">
                            <i class="fa fa-times"></i>Delete</a>
                        </td>
                    </tr>
                <?php $stt++ ;endforeach ?> 
                </tbody>
            </table>
                    <div class="pull-right">
                    <nav aria-label="Page navigation ">
                       <ul class="pagination">
                          <li class="page-item">
                             <a href="" aria-label="Previous">
                             <span aria-hidden="true">&laquo;</span>
                             <span class="sr-only">Previous</span>
                             </a>
                          </li>
                          <?php for ($i=1; $i <= $sotrang ; $i++ ) : ?>
                            <?php
                            if (isset($_GET['page'])) {
                              # code...
                              $p = $_GET['page'];
                            }
                            else
                            {

                              $p=1;
                            }


                            ?>
                            <li class="<?php echo ($i == $p) ? 'active': '' ?>">
                              <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                          <?php endfor ;?>
                             <a href="" aria-label="Next">
                             <span aria-hidden="true">&raquo;</span>
                             <span class="sr-only">Next</span>
                             </a>
                          </li>
                       </ul>
                    </nav>

                    </div>
                </div>
                    </div>

                  </div>


                   
                
                    <!-- /.row -->
          <?php require_once __DIR__. "/../../layouts/footer.php"; ?>        