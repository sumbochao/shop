

<?php 
$open= "transaction";
require_once __DIR__. "/../../autoload/autoload.php" ;


if(isset($_GET['page']))
{
  $p = $_GET['page'];
}
else
{
  $p = 1;
}

$sql = "SELECT transaction.* , users.name as nameuser , phone as phoneuser, address as addressuser  FROM transaction LEFT JOIN users ON users.id = transaction.users_id  ORDER BY ID DESC ";


$transaction= $db->fetchJone('transaction',$sql,$p,5,true);
if (isset($transaction['page']))
 {
  $sotrang = $transaction['page'];
  unset($transaction['page']);
  # code...
}



?>
<?php require_once __DIR__. "/../../layouts/header.php"; ?>
                    <!-- CONTENT-->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="color: #194b84; font-weight: bold; class="page-header">
                               Cart List
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
                         <th>Phone</th>
                         <th>Address</th>
                          <th>Note</th>
                            <th>Status</th>
                           <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; foreach ($transaction as $item) :
                    ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $item['nameuser'] ?></td>
                         <td><?php echo $item['phoneuser'] ?></td>
                            <td><?php echo $item['addressuser'] ?></td>
                            <td><?php echo $item['note'] ?></td>
                             <td>
                            <a href="status.php?id=<?php echo $item['id'] ?>" class="btn btn-xs  <?php echo $item['status'] == 0 ? 'btn-danger' : 'btn-info' ?>" ><?php echo $item['status'] == 0 ? 'Chưa xử lý' : 'Đã xử lý' ?></a>
                           
                                
                            </td>
                        
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