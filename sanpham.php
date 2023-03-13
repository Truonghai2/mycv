<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    
    <link rel="stylesheet" type="text/css" href="css/news.css">
    <link rel="stylesheet" type="text/css" href="css/option2.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css"  href="css/stylemain.css">
    <link rel="stylesheet" type="text/css" href="css/zento.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="layout/header.css">
    <link rel="stylesheet" href="css/details.css">
</head>
<body>
<?php require('molde/header.php') ?>
<main>
    <div class="container">
        <div id="ant-layout">
        <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="sanpham.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm sản phẩm ">
                </form>
        </section>
        </div>
        <!-- END LAYOUT  -->
        <section class="main">
            <?php
            if (isset($_GET['page'])) {
                $page = trim(strip_tags($_GET['page']));
            } else {
                $page = "";
            }
            switch ($page) {
                case "sanpham":
                    require('menu-con/Maylocnuoc.php');
                    require('menu-con/thietbivesinh.php');
                    
                    break;
                default:
                    break;
            }
            //switch
            if (isset($_GET['id_category'])) {
                $id_category = trim(strip_tags($_GET['id_category']));
            } else {
                $id_category = 0;
            }
            ?>
            <section class="recently">
                <div class="title">
                    <?php
                    $sql = "select * from category where id=$id_category";
                    $name = executeResult($sql);
                    foreach ($name as $ten) {
                        echo '<h1>' . $ten['name'] . '</h1>';
                    }
                    ?>
                </div>
                <div class="product-recently">
                    <div class="row">
                        <?php
                        $sql = "select * from product where id_category=$id_category";
                        $productList = executeResult($sql);
                        foreach ($productList as $item) {
                            echo '
                                <div class="col">
                                    <a href="details.php?id=' . $item['id'] . '">
                                        <img class="thumbnail" src="' . $item['thumbnail'] . '" alt="">
                                        <div class="title">
                                            <p>' . $item['title'] . '</p>
                                        </div>
                                        <div class="price">
                                            <span style="    font-size: 15px;
                                            color: #ed1c24;
                                            line-height: 25px;
                                            font-weight: bold;">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                        </div>
                                        
                                    </a>
                                </div>
                                ';
                        }
                        ?>
                        <?php
                        if (isset($_GET['search'])) {
                            $search = $_GET['search'];
                            $sql = "SELECT * from product where title like '%$search%'";
                            $listSearch = executeResult($sql);
                            foreach ($listSearch as $item) {
                                echo '
                                <div class="col">
                                    <a href="details.php?id=' . $item['id'] . '">
                                        <img class="thumbnail" src="' . $item['thumbnail'] . '" alt="">
                                        <div class="title">
                                            <p>' . $item['title'] . '</p>
                                        </div>
                                        <div class="price">
                                            <span style="    font-size: 15px;
                                            color: #ed1c24 ;
                                            line-height: 25px;
                                            font-weight: bold;">' . number_format($item['price'], 0, ',', '.') . ' VNĐ</span>
                                        </div>
                                        
                                    </a>
                                </div>
                                ';
                            }
                        }
                        ?>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <style>
        section.main section.recently .title h1 {
            border-bottom: 1px solid rgb(35, 54, 30);
            margin-top: 30px;
        }

        .row{
            display: flex;
            padding: 10px 0px 10px 20px ;
        }
    </style>
    <?php require('molde/footer.php') ?>
</body>
</html>