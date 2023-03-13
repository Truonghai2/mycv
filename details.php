
<?php
require_once('database/config.php');
require_once('database/dbhelper.php');
require_once('utils/utility.php');
// Lấy id từ trang index.php truyền sang rồi hiển thị nó
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = 'select * from product where id=' . $id;
        $product = executeSingleResult($sql);
        // Kiểm tra nếu ko có id sp đó thì trả về index.php
        if ($product == null) {
            header('Location: index.php');
            die();
        }
    }
    
?>
<?php
    $sql = "SELECT * from content where id_products = $id";
    $content = executeSingleResult($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Sản Phẩm</title>
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
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<div id="fb-root"></div>
<?php require "molde/header.php"; ?>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=264339598396676&autoLogAppEvents=1" nonce="8sTfFiF4"></script>

<!-- END HEADR -->
<main>
    <div class="container">
        <div id="ant-layout">
        <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="sanpham.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm sản phẩm">
                    <i style="font-size: 18px; " class='bx bx-search-alt-2'></i>
                </form>
            </section>
        </div>
        <!-- <div class="bg-grey">

        </div> -->
        <!-- END LAYOUT  -->
        <section class="main">
            <section class="oder-product">
                <div class="title">
                    <section class="main-order">
                        <h1><?= $product['title'] ?></h1>
                        <div class="box">
                            <img style="border-radius: 30px;" src="<?=''.$product['thumbnail'] ?>" alt="">
                            <div class="about"style="margin-left:15px;">
                            <p><?= $product['content'] ?></p>
                                
                            <div class="number">
                                    <span class="number-buy">Số lượng</span>
                                    <input id="num" type="number" value="1" min="1" onchange="updatePrice()">
                                </div>

                                <p class="price">Giá: <span id="price"><?= number_format($product['price'], 0, ',', '.') ?></span><span> VNĐ</span><span class="gia none"><?= $product['price'] ?></span></p>
                                <!-- <a class="add-cart" href="" onclick="addToCart(<?= $id ?>)"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</a> -->
                                <button class="add-cart" onclick="addToCart(<?= $id ?>)"><i class="fas fa-cart-plus"></i>Thêm vào giỏ hàng</button>
                                <!-- <a class="buy-now" href="checkout.php" >Mua ngay</a> -->
                                <button class="buy-now" onclick="buyNow(<?= $id ?>)">Mua ngay</button>
                                <script>
                                    function updatePrice() {
                                        var price = document.getElementById('price').innerText; // giá tiền
                                        var num = document.querySelector('#num').value; // số lượng
                                        var gia1 = document.querySelector('.gia').innerText;
                                        var gia = price.match(/\d/g);
                                        gia = gia.join("");
                                        var tong = gia1 * num;
                                        document.getElementById('price').innerHTML = tong.toLocaleString();
                                    }
                                </script>
                                

                            </div>
                        </div>
                        <div class="fb-comments" data-href="http://localhost/PROJECT/details.php" data-width="750" data-numposts="5"></div>

                    </section>
                    
                </div>
                <aside>
                    <h1>Gợi ý cho bạn</h1>
                    <div class="row">
                        <?php
                        $sql = 'select * from product limit 5';
                        $productList = executeResult($sql);
                        $index = 1;
                        foreach ($productList as $item) {
                            echo '
                                    <div class="col">
                                    <a href="details.php?id=' . $item['id'] . '">
                                        <img src="'.$item['thumbnail'] . '" alt="">
                                        <div class="about">
                                            <div class="title">
                                                <p>' . $item['title'] . '</p>
                                                <span style="color:red;">Giá: ' . number_format($item['price'], 0, ',', '.') . ' đ' . '</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                ';
                        }
                        ?>
                    </div>
                </aside>
            </section>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 40px;">
                    <div class="tab" id="svtab">
                        <ul>
                            <li class="tab-item atcive"><a  data-toggle="tab" aria-expanded="true">Thông tin sản phẩm</a></li>
                            <li class="tab-item"><a data-toggle="tab" aria-expanded="false">Thông tin kỹ thuật</a></li>
                        </ul>
                        <ul style="height:38px; border-bottom:#afafaf solid"> 
                            &nbsp;
                        </ul>
						<div style="clear: both;"></div>
                        <div class="tab-content">
                            <div class="tab-pane bottom20 active">
                                <div>&nbsp;</div>
                                    <?=$content['content']?>
                                <div>&nbsp;</div>
                                
                                
                               
                                
                                <div><img style="width:350px; margin-left:100px; " src="<?=$product['thumbnail']?>" alt="" align="" border="0px"></div>
                                <div>&nbsp;</div> 
                                <?php
                                    $sql = "SELECT * from tab where id_product = $id and product =0 ";
                                    $tabList = executeResult($sql);
                                    $index = 0;
                                    foreach ($tabList as $item) {
                                        
                                        echo '
                                        <div>&nbsp;</div>
                                            <div>
                                                <img  src="'.$item['images'].'"/>
                                            </div>
                                        <div>&nbsp;</div>
                                            ';  
                                    }
                                    ?>
                                    <?php
                                        $sql ="SELECT * from content where id_products =$id and roles =2";
                                        $content = executeResult($sql);
                                        foreach($content as $item){
                                            echo'
                                            '.$item['content'].'
                                            ';

                                        }
                                    ?>
                                    <?php
                                    $sql = "SELECT * from tab where id_product = $id and product =1";
                                    $tabList = executeResult($sql);
                                    $index = 0;
                                    foreach ($tabList as $item) {
                                        
                                        echo '
                                        <div>&nbsp;</div>
                                            <div>
                                                <img  src="'.$item['images'].'"/>
                                            </div>
                                        <div>&nbsp;</div>
                                            ';  
                                    }
                                    ?>
                                    
                                    
                     
							</div>
                            
                            <div class="tab-pane bottom20" id="tab-tech">
                               <?php
                               $sql ="SELECT * from content_tech where id_producttech =$id";
                               $contenttech= executeResult($sql);
                               foreach($contenttech as $item){
                                echo'
                                    '.$item['content'].'
                                ';
                               }
                               ?>
                            </div>
                            <p style="border-top:dotted 1px #333333; margin-top:20px; padding-top:10px;"><strong>Tags : </strong> 
							<span><a style="color: #056bac;" href="https://thietbivesinh.com.vn/search.html?qsearch=Bộ+6+phụ+kiện+phòng+tắm+inox+Zento+HA4613+gồm" target="_blank">Bộ 6 phụ kiện phòng tắm inox Zento HA4613 gồm,&nbsp;&nbsp;</a></span>
							<span><a style="color: #056bac;" href="https://thietbivesinh.com.vn/search.html?qsearch=Giá+treo+khăn+3+thanh+Rotating+towel+bar+HA030-3" target="_blank">Giá treo khăn 3 thanh Rotating towel bar HA030-3,&nbsp;&nbsp;</a></span>
							<span><a style="color: #056bac;" href="https://thietbivesinh.com.vn/search.html?qsearch=Kệ+đựng+xà+bông+Soap+holder+HA4604" target="_blank">Kệ đựng xà bông Soap holder HA4604,&nbsp;&nbsp;</a></span>
							<span><a style="color: #056bac;" href="https://thietbivesinh.com.vn/search.html?qsearch=Cốc+thủy+tinh+kèm+kệ+đơn+inox+HA4603" target="_blank">Cốc thủy tinh kèm kệ đơn inox HA4603,&nbsp;&nbsp;</a></span>
							<span><a style="color: #056bac;" href="https://thietbivesinh.com.vn/search.html?qsearch=Giá+để+đồ+kết+hợp+treo+khăn+inox+HA4650" target="_blank">Giá để đồ kết hợp treo khăn inox HA4650,&nbsp;&nbsp;</a></span>
							<span><a style="color: #056bac;" href="https://thietbivesinh.com.vn/search.html?qsearch=Lô+giấy+vệ+sinh+inox+HA4641" target="_blank">Lô giấy vệ sinh inox HA4641,&nbsp;&nbsp;</a></span>
							<span><a style="color: #056bac;" href="https://thietbivesinh.com.vn/search.html?qsearch=Giá+góc+2+tầng" target="_blank">Giá góc 2 tầng,&nbsp;&nbsp;</a></span>
							</p>
									                                                            
						</div>
                        
                    </div>
                        
                        
                </div>
            <section  class="restaurants" >
                <div class="title">
                    <h1>Sản phẩm có liên quan</h1>
                </div>
                <div class="product-restaurants">
                    <div class="row">
                        <?php
                        $sql = 'select * from product';
                        $productList = executeResult($sql);
                        $index = 1;
                        foreach ($productList as $item) {
                            echo '
                                <div class="col">
                                    <a href="details.php?id=' . $item['id'] . '">
                                        <img class="thumbnail" src="' . $item['thumbnail'] . '" alt="">
                                        <div class="title">
                                            <p>' . $item['title'] . '</p>
                                        </div>
                                        <div class="price">
                                            <span>' . number_format($item['price'], 0, ',', '.') . ' đ</span>
                                        </div>
                                        
                                    </a>
                                </div>
                                ';
                        }
                        ?>
                    </div>
                </div>
            </section>
        </section>
    </div>
</main>
<?php require_once('layout/footer.php'); ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    function addToCart(id) {
        var num = document.querySelector('#num').value; // số lượng
        $.post('api/cookie.php', {
            'action': 'add',
            'id': id,
            'num': num
        }, function(data) {
            location.reload()
        })
        
    }

    function buyNow(id) {
            $.post('api/cookie.php', {
                'action': 'add',
                'id': id,
                'num': 1
            }, function(data) {
                location.assign("checkout.php");
            })
    }
</script>
<script type="text/javascript">
    const  search = document.querySelector.bind(document)
    const searchAll = document.querySelectorAll.bind(document)
    const tabs=searchAll('.tab-item')
    const pane =searchAll('.tab-pane')
    
   tabs.forEach((tab, index) => {
        const panes= pane[index]
        tab.onclick=function(){
            
            search('.tab-item.active').classList.remove('active')
            search('.tab-pane.active').classList.remove('active')
            this.classList.add('active')
            panes.classList.add('active')
        
            
        }
    });
</script>


</body>
</html>