

<?php 
$open= "user";
require_once __DIR__. "/../../autoload/autoload.php" ;


if(isset($_GET['page']))
{
  $p = $_GET['page'];
}
else
{
  $p = 1;
}

$sql = "SELECT users.* FROM users ORDER BY ID DESC ";


$admin= $db->fetchJone('users',$sql,$p,5,true);
if (isset($admin['page']))
 {
  $sotrang = $admin['page'];
  unset($admin['page']);
  # code...
}



?>
<?php require_once __DIR__. "/../../layouts/header.php"; ?>
                    <!-- NOI DUNG>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="color: #194b84; font-weight: bold; class="page-header">
                               Member List
</h1>

                            <div class="clearfix"></div>
                            
                                <?php require_once __DIR__. "/../../../partials/notification.php"; ?>      
                                   
                        </div>
                    </div>
                    
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
                         <th>Email</th>
                          <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; foreach ($admin as $item) :
                    ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['phone'] ?></td>
                          <td>
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