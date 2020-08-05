<!DOCTYPE html>
<html>
    <head>
        <title>Biti's</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/bootstrap.min.css">
        <script  src="<?php echo base_url() ?>public/frontend/js/jquery-3.2.1.min.js"></script>
        <script  src="<?php echo base_url() ?>public/frontend/js/bootstrap.min.js"></script>
        <!---->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick-theme.css"/>
        <!--slide-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style.css">
    </head>
    <body>
        <div id="wrapper">
            <!---->
            <!--HEADER-->
            <div id="header">
                <div id="header-top">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-12 col-sm-12 col-md-6" id="header-text">
                                <a>Biti's</a><b>Nâng niu bàn chân Việt </b>
                            </div>

                            <div class=" col-12 col-sm-12 col-md-6">
                                <nav id="header-nav-top">
                                    <ul class="list-inline pull-right" id="headermenu">
                                        <?php if(isset($_SESSION['name_user'])): ?>
                                        <li style="color: red;">Xin chào : <?php echo $_SESSION['name_user']  ?></li>
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i>Tài khoản <i class="fa fa-caret-down"></i></a>
                                            <ul id="header-submenu">
                                                <li><a href="gio-hang.php"> Giỏ hàng</a></li>
                                                <li><a href="thoat.php"><i class="fa fa-share-square-o"></i>Thoát</a></li>
                                            </ul>
                                        </li>
                                        <?php else: ?>
                                        <li>
                                            <a href="dang-nhap.php"><i class="fa fa-user"></i>Đăng nhập  </a>
                                        </li>
                                        <li>
                                            <a href="dang-ki.php"><i class="fa fa-user"></i>Đăng kí  </a>
                                        </li>
                                        <?php endif ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" id="header-main">
                        <div class="col-xs-12 col-sm-12 col-md-3" id="header-logo">
                            <a href="index.php">
                            <img src="/shoes-shop/images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-xs-7 col-sm-7 col-md-5">
                            <form class="form-inline">
                                

                                    
                                    <!-- <input type="text"  id="textSreach" placeholder="Tìm kiếm ....." class="form-control input-lg" autocomplete="off">
                                    <button  id="btnSearch" type="button" class="btn btn-default"><i class="fa fa-search"></i></button> -->
     
                            </form>
                        </div>
                        
                        <div class="col-xs-5 col-sm-5 col-md-4" id="header-right">
                            <div class="pull-right">
                                <div class="pull-left">
                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                </div>
                                <div class="pull-right">
                                    <p id="hotline">HOTLINE</p>
                                    <p>0338866506</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END HEADER-->
            <!--MENUNAV-->
            
            <div class="navbar-wrapper">
                <div  class="container">
                    <div  class="navbar navbar-inverse navbar-static-top ">
                        <div  class="navbar-header">
                            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Trang chủ</a></li>
                                <li><a href="tat-ca-san-pham.php">Sản phẩm</a></li>
                                <li><a href="gioi_thieu.php" target="ext">Giới thiệu</a></li>
                                <li><a href="lien_he.php">Liên hệ</a></li>
                                
                            </ul>
                            <ul class="pull-right" id="main-shopping">
                                <li>
                                    <a href="gio-hang.php"><i class="fa fa-shopping-basket"></i> Giỏ hàng </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /container -->
            </div>
            <div id="maincontent">
                <div class="container">
                    <div class="col-md-3  fixside" >
                        <div class="box-left box-menu ">
                            <h3 class="box-title" style="margin:0px;">
                                
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-list"></i> </a> Danh mục</h3>
                            <ul id="demo" class="nav side-nav" >
                                <?php foreach($category as $item) :?>
                                <li><a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>"> <?php echo $item['name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="box-left box-menu">
                            <h3 class="box-title" style="margin:0px;"><i class="fa fa-list"></i>  Sản phẩm mới </h3>
                            <ul>
                                <?php foreach($productNew as $item): ?>
                                <li class="clearfix">
                                    <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">
                                    <img src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" class="img-responsive pull-left" width="120" height="120"></a>
                                    <div class="info pull-right" >
                                        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"> <?php echo $item['name'] ?></a>
                                        <p><strike class="sale"><?php echo formatPrice($item['price'])?> </strike></p>
                                        <p> <b class="price" ><?php echo formatpricesale($item['price'],$item['sale'])?></b></p>
                                        <span class="view"><i class="fa fa-eye"></i>100000 : <i class="fa fa-heart-o"></i>10</span>
                                    </div>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div class="box-left box-menu">
                            <h3 class="box-title" style="margin:0px;"><i class="fa fa-list"></i>  Sản phẩm bán chạy </h3>
                            <ul>
                                <?php foreach($productPay as $item): ?>
                                <li class="clearfix">
                                    <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">
                                    <img src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" class="img-responsive pull-left" width="120" height="120"></a>
                                    <div class="info pull-right" >
                                        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"> <?php echo $item['name'] ?></a>
                                        <p><strike class="sale"><?php echo formatPrice($item['price'])?> </strike></p>
                                        <p> <b class="price" ><?php echo formatpricesale($item['price'],$item['sale'])?></b></p>
                                        <span class="view"><i class="fa fa-eye"></i>3450 : <i class="fa fa-heart-o"></i>28</span>
                                    </div>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                
       