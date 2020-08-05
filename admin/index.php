<?php 
require_once __DIR__. "/autoload/autoload.php" ;
$category = $db->fetchAll("category");
?>
<?php require_once __DIR__. "/layouts/header.php"; ?>
                    <!-- CONTENT -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="color: #194b84; font-weight: bold;"class="page-header">
                                WELCOME TO ADMIN PAGE 
                            </h1>

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
          <?php require_once __DIR__. "/layouts/footer.php"; ?>      