<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Admin Page </title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url()?>public/admin/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url()?>public/admin/css/sb-admin.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="<?php echo base_url()?>public/admin/css/plugins/morris.css" rel="stylesheet">
        <link href="<?php echo base_url()?>public/admin/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom Fonts -->
       <script src="<?php echo base_url()?>public/admin/js/tinymce/js/tinymce/tinymce.min.js"></script>
       <script src="<?php echo base_url()?>public/admin/js/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
       <script>tinymce.init({ selector:'textarea' });</script>
       

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Welcome, <?php echo $_SESSION['admin_name'] ?> </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <strong><?php echo $_SESSION['admin_name'] ?></strong> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        
                        <li>
                            <a href="/shoes-shop/dang-xuat.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">

                        <li class="<?php echo isset($open) && $open == 'category' ? 'active' : '' ?>">
                            <a href="<?php echo modules("category/") ?>" ><i class="fa fa-list"></i> Categories </a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'product' ? 'active' : '' ?>">
                            <a href="<?php echo modules("product/") ?>" ><i class = "fa fa-list"></i>Products </a>
                        </li>
                           
                               
                            <li class="<?php echo isset($open) && $open == 'transaction' ? 'active' : '' ?>">
                            <a href="<?php echo modules("transaction/") ?>" ><i class = "fa fa-database"></i>Manage Oders</a>
                        </li>
                        <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-user"></i>Manage Members</a>
                        <ul id="demo" class="collapse">
                             <li class="<?php echo isset($open) && $open == 'admin' ? 'active' : '' ?>">
                            <a href="<?php echo modules("admin/") ?>" >Admins</a>
                            </li>
                            <li class="<?php echo isset($open) && $open == 'user' ? 'active' : '' ?>">
                            <a href="<?php echo modules("user/") ?>" >Members</a>
                        </li>
                            
                        </ul>
                    </li>
                        
                    </li>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
   