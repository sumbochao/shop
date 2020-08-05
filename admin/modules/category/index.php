

<?php 
$open= "category";
require_once __DIR__. "/../../autoload/autoload.php" ;
$category = $db->fetchAll("category");

?>
<?php require_once __DIR__. "/../../layouts/header.php"; ?>
                    <!-- CONTENT -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="color: #194b84; font-weight: bold; class="page-header">
                               Category List
                            </h1>
                                <a href="add.php" class="btn btn-success">New Category</a>
                           
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
                        <th>Id</th>
                        <th>Slug</th>
                        <th>Home</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; foreach ($category as $item) :
                    ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['slug'] ?></td>
                        <td>
                          <a href="home.php?id=<?php echo $item['id']?>" class="btn btn-xs <?php echo $item['home'] == 1 ? 'btn-info' : 'btn-default' ?>" >
                           <?php echo $item['home'] ==1 ? 'Active' : 'Inactive' ?></a>
                        </td>
                        <td><?php echo $item['created_at'] ?></td>
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
                             <a class="page-link" href="#" aria-label="Previous">
                             <span aria-hidden="true">&laquo;</span>
                             <span class="sr-only">Previous</span>
                             </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                             <a class="page-link" href="#" aria-label="Next">
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