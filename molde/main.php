    <div class="content-page option2" style="">
                <div class="container">
                    <div class="category-featured furniture"style="margin-top: 50px;">
                        <nav class="navbar nav-menu show-brand bg-border-furniture">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div>
                                    <h2 style="background-color:rgb(66, 197, 237)  ;" class="navbar-brand"><a href=""title="Combo thiết bị ">Combo thiết bị </a></h2>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <!--<div class="featured-text"><span>featured</span></div>-->
                                <div class="banner-img">
                                    <a href="" title="Combo thiết bị ">
                                        <img *style="float:left;" alt="Combo thiết bị " src="image_sanpham/combo.png" style="height: 576px;">
                                    </a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        <div class="tab-panel active" id="tab-4">
                                            <div class="box-right">
                                                <ul class="product-list row">
                                                   
                                                    
                                                        
                                                        <?PHP
                                                        $sql = 'SELECT * from combo where id_product_combo=1 limit 8';
                                                        $productList = executeResult($sql);
                                                        
                                                        foreach ($productList as $item) {
                                                            echo '
                                                            <li class="col-sm-3 col-xs-7">
                                                            <div class="left-block">
                                                            <div class="image banner-boder-zoom2">
                                                                <a href="details.php?id=' . $item['id'] . '" title="' . $item['title'] . '">
                                                                    <img class="img-responsive" alt="' . $item['title'] . '" src="' . $item['thumbnail'] . '">
                                                                </a>
                                                            </div>
                                                            <div  class="price-percent-reduction2">
                                                                <img src="img/price-percent-br.png"/>
                                                                <div class="text" style=" color: #fff;
                                                                position: absolute;
                                                                top: 4px"
                                                                font-size:14px;
                                                                >
                                                                '.$item['sale'].'
                                                                </div>
                                                            </div>
                                                            
                                                            </div>
                                                            <div class="right-block">                                                   
                                                            <h3 class="product-name product-name-index">
                                                                <a href="" title="' . $item['title'] . '">' . $item['title'] . '</a></h3>
                                                            <div class="content_price">
                                                                <span class="price product-price">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                                                <span class="price old-price">' . number_format($item['pricenosale'], 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            
                                                            </div>
                                                            </li>
                                                                ';
                                                        }
                                                        ?>
                                                    
                                                    
                                                 </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="category-featured furniture">
                        <nav class="navbar nav-menu show-brand bg-border-furniture" >
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div>
                                    <h2 class="navbar-brand"><a href="" title="Sen Cây">Sen Cây</a></h2>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <!--<div class="featured-text"><span>featured</span></div>-->
                                <div class="banner-img">
                                    <a href="" title="Sen Cây">
                                        <img alt="Sen Cây" src="image_sanpham/combo5.png" style="height: 576px;">
                                    </a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        <div class="tab-panel active" id="tab-4">
                                            <div class="box-right" style="float:right;">
                                                <ul class="product-list row">
                                                <?PHP
                                                        $sql = 'SELECT * from combo where id_product_combo=2 limit 8';
                                                        $productList = executeResult($sql);
                                                        
                                                        foreach ($productList as $item) {
                                                            echo '
                                                            <li class="col-sm-3 col-xs-6">
                                                            <div class="left-block">
                                                            <div class="image banner-boder-zoom2">
                                                                <a href="details.php?id=' . $item['id'] . '" title="' . $item['title'] . '">
                                                                    <img class="img-responsive" alt="' . $item['title'] . '" src="' . $item['thumbnail'] . '">
                                                                </a>
                                                            </div>
                                                            <div class="price-percent-reduction2"><img src="img/price-percent-br.png"/>
                                                                    <div class="text" style=" color: #fff;
                                                                    position: absolute;
                                                                    top: 4px"
                                                                    font-size:14px;
                                                                    >
                                                                    '.$item['sale'].'
                                                                    </div>
                                                            </div>
                                                            
                                                            
                                                            </div>
                                                            <div class="right-block">                                                   
                                                            <h3 class="product-name product-name-index">
                                                                <a href="" title="' . $item['title'] . '">' . $item['title'] . '</a></h3>
                                                            <div class="content_price">
                                                                <span class="price product-price">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                                                <span class="price old-price">' . number_format($item['pricenosale'], 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            
                                                            </div>
                                                            </li>
                                                                ';
                                                        }
                                                        ?>
                                                    
                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="category-featured furniture">
                        <nav class="navbar nav-menu show-brand bg-border-furniture">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div>
                                    <h2 class="navbar-brand"><a href="" title="Sen Tắm">Sen Tắm</a></h2>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <!--<div class="featured-text"><span>featured</span></div>-->
                                <div class="banner-img">
                                    <a href="" title="Sen Tắm">
                                        <img  alt="Sen Tắm" src="image_sanpham/combo3.png" style="height: 576px; ">
                                    </a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        <div class="tab-panel active" id="tab-4">
                                            <div class="box-right">
                                                <ul class="product-list row">
                                                <?PHP
                                                        $sql = 'SELECT * from combo where id_product_combo=3 limit 8';
                                                        $productList = executeResult($sql);
                                                        
                                                        foreach ($productList as $item) {
                                                            echo '
                                                            <li class="col-sm-3 col-xs-6">
                                                            <div class="left-block">
                                                            <div class="image banner-boder-zoom2">
                                                                <a href="details.php?id=' . $item['id'] . '" title="' . $item['title'] . '">
                                                                    <img class="img-responsive" alt="' . $item['title'] . '" src="' . $item['thumbnail'] . '">
                                                                </a>
                                                            </div>
                                                            <div class="price-percent-reduction2"><img src="img/price-percent-br.png"/>
                                                            <div class="text" style=" color: #fff;
                                                            position: absolute;
                                                            top: 4px"
                                                            font-size:14px;
                                                            >
                                                            '.$item['sale'].'
                                                            </div></div>
                                                            
                                                            </div>
                                                            <div class="right-block">                                                   
                                                            <h3 class="product-name product-name-index">
                                                                <a href="" title="' . $item['title'] . '">' . $item['title'] . '</a></h3>
                                                            <div class="content_price">
                                                                <span class="price product-price">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                                                <span class="price old-price">' . number_format($item['pricenosale'], 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            
                                                            </div>
                                                            </li>
                                                                ';
                                                        }
                                                        ?>
                                                    
                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="category-featured furniture">
                        <nav class="navbar nav-menu show-brand bg-border-furniture">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div>
                                    <h2 class="navbar-brand"><a href="" title="Vòi Chậu">Vòi Chậu</a></h2>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <!--<div class="featured-text"><span>featured</span></div>-->
                                <div class="banner-img">
                                    <a href="" title="Vòi Chậu">
                                        <img alt="Vòi Chậu" src="image_sanpham/combo1.png" style="height: 576px;">
                                    </a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        <div class="tab-panel active" id="tab-4">
                                            <div class="box-right">
                                                <ul class="product-list row">
                                                <?PHP
                                                        $sql = 'SELECT * from combo where id_product_combo=4 limit 8';
                                                        $productList = executeResult($sql);
                                                        
                                                        foreach ($productList as $item) {
                                                            echo '
                                                            <li class="col-sm-3 col-xs-6">
                                                            <div class="left-block">
                                                            <div class="image banner-boder-zoom2">
                                                                <a href="details.php?id=' . $item['id'] . '" title="' . $item['title'] . '">
                                                                    <img class="img-responsive" alt="' . $item['title'] . '" src="' . $item['thumbnail'] . '">
                                                                </a>
                                                            </div>
                                                            <div class="price-percent-reduction2"><img src="img/price-percent-br.png"/>
                                                            <div class="text" style=" color: #fff;
                                                            position: absolute;
                                                            top: 4px"
                                                            font-size:14px;
                                                            >
                                                            '.$item['sale'].'
                                                            </div></div>
                                                            
                                                            </div>
                                                            <div class="right-block">                                                   
                                                            <h3 class="product-name product-name-index">
                                                                <a href="" title="' . $item['title'] . '">' . $item['title'] . '</a></h3>
                                                            <div class="content_price">
                                                                <span class="price product-price">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                                                <span class="price old-price">' . number_format($item['pricenosale'], 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            
                                                            </div>
                                                            </li>
                                                                ';
                                                        }
                                                        ?>
                                                    
                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="category-featured furniture">
                        <nav class="navbar nav-menu show-brand bg-border-furniture">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div>
                                    <h2 class="navbar-brand"><a href="" title="Vòi Rửa Bát">Vòi Rửa Bát</a></h2>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <!--<div class="featured-text"><span>featured</span></div>-->
                                <div class="banner-img">
                                    <a href="" title="Vòi Rửa Bát">
                                        <img *style="float:left;" alt="Vòi Rửa Bát" src="image_sanpham/combo6.jpg" style="height: 576px;">
                                    </a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        <div class="tab-panel active" id="tab-4">
                                            <div class="box-right">
                                                <ul class="product-list row">
                                                <?PHP
                                                        $sql = 'SELECT * from combo where id_product_combo=5 limit 8';
                                                        $productList = executeResult($sql);
                                                        
                                                        foreach ($productList as $item) {
                                                            echo '
                                                            <li class="col-sm-3 col-xs-6">
                                                            <div class="left-block">
                                                            <div class="image banner-boder-zoom2">
                                                                <a href="details.php?id=' . $item['id'] . '" title="' . $item['title'] . '">
                                                                    <img class="img-responsive" alt="' . $item['title'] . '" src="' . $item['thumbnail'] . '">
                                                                </a>
                                                            </div>
                                                            <div class="price-percent-reduction2"><img src="img/price-percent-br.png"/>
                                                            <div class="text" style=" color: #fff;
                                                            position: absolute;
                                                            top: 4px"
                                                            font-size:14px;
                                                            >
                                                            '.$item['sale'].'
                                                            </div></div>
                                                            
                                                            </div>
                                                            <div class="right-block">                                                   
                                                            <h3 class="product-name product-name-index">
                                                                <a href="" title="' . $item['title'] . '">' . $item['title'] . '</a></h3>
                                                            <div class="content_price">
                                                                <span class="price product-price">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                                                <span class="price old-price">' . number_format($item['pricenosale'], 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            
                                                            </div>
                                                            </li>
                                                                ';
                                                        }
                                                        ?>
                                                    
                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="category-featured furniture">
                        <nav class="navbar nav-menu show-brand bg-border-furniture">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div>
                                    <h2 class="navbar-brand"><a href="" title="Giá Kệ">Giá Kệ</a></h2>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <!--<div class="featured-text"><span>featured</span></div>-->
                                <div class="banner-img">
                                    <a href="" title="Giá Kệ">
                                        <img alt="Giá Kệ" src="https://thietbivesinh.com.vn/public/home/images/banner_cate.png" style="height: 576px;">
                                    </a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        <div class="tab-panel active" id="tab-4">
                                            <div class="box-right">
                                                <ul class="product-list row">
                                                <?PHP
                                                        $sql = 'SELECT * from combo where id_product_combo=6 limit 8';
                                                        $productList = executeResult($sql);
                                                        
                                                        foreach ($productList as $item) {
                                                            echo '
                                                            <li class="col-sm-3 col-xs-6">
                                                            <div class="left-block">
                                                            <div class="image banner-boder-zoom2">
                                                                <a href="details.php?id=' . $item['id'] . '" title="' . $item['title'] . '">
                                                                    <img class="img-responsive" alt="' . $item['title'] . '" src="' . $item['thumbnail'] . '">
                                                                </a>
                                                            </div>
                                                            <div class="price-percent-reduction2"><img src="img/price-percent-br.png"/>
                                                            <div class="text" style=" color: #fff;
                                                            position: absolute;
                                                            top: 4px"
                                                            font-size:14px;
                                                            >
                                                            '.$item['sale'].'
                                                            </div></div>
                                                            
                                                            </div>
                                                            <div class="right-block">                                                   
                                                            <h3 class="product-name product-name-index">
                                                                <a href="" title="' . $item['title'] . '">' . $item['title'] . '</a></h3>
                                                            <div class="content_price">
                                                                <span class="price product-price">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                                                <span class="price old-price">' . number_format($item['pricenosale'], 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            
                                                            </div>
                                                            </li>
                                                                ';
                                                        }
                                                        ?>
                                                    
                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="category-featured furniture">
                        <nav class="navbar nav-menu show-brand bg-border-furniture">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div>
                                    <h2 class="navbar-brand"><a href="" title="Bàn Cầu">Bàn Cầu</a></h2>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <!--<div class="featured-text"><span>featured</span></div>-->
                                <div class="banner-img">
                                    <a href="" title="Bàn Cầu">
                                        <img *style="float:left;" alt="Bàn Cầu" src="image_sanpham/combo7.png" style="height: 576px;">
                                    </a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        <div class="tab-panel active" id="tab-4">
                                            <div class="box-right">
                                                <ul class="product-list row">
                                                     <?PHP
                                                        $sql = 'SELECT * from combo where id_product_combo=7 limit 8';
                                                        $productList = executeResult($sql);
                                                        
                                                        foreach ($productList as $item) {
                                                            echo '
                                                            <li class="col-sm-3 col-xs-6">
                                                            <div class="left-block">
                                                            <div class="image banner-boder-zoom2">
                                                                <a href="details.php?id=' . $item['id'] . '" title="' . $item['title'] . '">
                                                                    <img class="img-responsive" alt="' . $item['title'] . '"src="' . $item['thumbnail'] . '">
                                                                </a>
                                                            </div>
                                                            <div class="price-percent-reduction2"><img src="img/price-percent-br.png"/>
                                                            <div class="text" style=" color: #fff;
                                                            position: absolute;
                                                            top: 4px"
                                                            font-size:14px;
                                                            >
                                                            '.$item['sale'].'
                                                            </div></div>
                                                            
                                                            </div>
                                                            <div class="right-block">                                                   
                                                            <h3 class="product-name product-name-index">
                                                                <a href="" title="' . $item['title'] . '">' . $item['title'] . '</a></h3>
                                                            <div class="content_price">
                                                                <span class="price product-price">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                                                <span class="price old-price">' . number_format($item['pricenosale'], 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            
                                                            </div>
                                                            </li>
                                                                ';
                                                        }
                                                        ?>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="category-featured furniture">
                        <nav class="navbar nav-menu show-brand bg-border-furniture">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div>
                                    <h2 class="navbar-brand"><a href="https://thietbivesinh.com.vn/tu-chau.html" title="Tủ Chậu ">Tủ Chậu </a></h2>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <!--<div class="featured-text"><span>featured</span></div>-->
                                <div class="banner-img">
                                    <a href="https://thietbivesinh.com.vn/tu-chau.html" title="Tủ Chậu ">
                                        <img alt="Tủ Chậu " src="image_sanpham/combo2.jpg" style="height: 576px;">
                                    </a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        <div class="tab-panel active" id="tab-4">
                                            <div class="box-right">
                                                <ul class="product-list row">
                                                <?PHP
                                                        $sql = 'SELECT * from combo where id_product_combo=8 limit 8';
                                                        $productList = executeResult($sql);
                                                        
                                                        foreach ($productList as $item) {
                                                            echo '
                                                            <li class="col-sm-3 col-xs-6">
                                                            <div class="left-block">
                                                            <div class="image banner-boder-zoom2">
                                                                <a href="details.php?id=' . $item['id'] . '" title="' . $item['title'] . '">
                                                                    <img class="img-responsive" alt="' . $item['title'] . '"src="' . $item['thumbnail'] . '">
                                                                </a>
                                                            </div>
                                                            <div class="price-percent-reduction2"><img src="img/price-percent-br.png"/>
                                                            <div class="text" style=" color: #fff;
                                                            position: absolute;
                                                            top: 4px"
                                                            font-size:14px;
                                                            >
                                                            '.$item['sale'].'
                                                            </div></div>
                                                            
                                                            </div>
                                                            <div class="right-block">                                                   
                                                            <h3 class="product-name product-name-index">
                                                                <a href="" title="' . $item['title'] . '">' . $item['title'] . '</a></h3>
                                                            <div class="content_price">
                                                                <span class="price product-price">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                                                <span class="price old-price">' . number_format($item['pricenosale'], 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            
                                                            </div>
                                                            </li>
                                                                ';
                                                        }
                                                        ?>
                                                    
                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="category-featured furniture">
                        <nav class="navbar nav-menu show-brand bg-border-furniture">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div>
                                    <h2 class="navbar-brand"><a href="" title="Chậu rửa bát">Chậu rửa bát</a></h2>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <!--<div class="featured-text"><span>featured</span></div>-->
                                <div class="banner-img">
                                    <a href="" title="Chậu rửa bát">
                                        <img *style="float:left;" alt="Chậu rửa bát" src="image_sanpham/combo4.png" style="height: 576px;">
                                    </a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        <div class="tab-panel active" id="tab-4">
                                            <div class="box-right">
                                                <ul class="product-list row">
                                                <?PHP
                                                        $sql = 'SELECT * from combo where id_product_combo=9 limit 8';
                                                        $productList = executeResult($sql);
                                                        
                                                        foreach ($productList as $item) {
                                                            echo '
                                                            <li class="col-sm-5 col-xs-6">
                                                            <div class="left-block">
                                                            <div class="image banner-boder-zoom2">
                                                                <a href="details.php?id=' . $item['id'] . '" title="' . $item['title'] . '">
                                                                    <img class="img-responsive" alt="' . $item['title'] . '"src="' . $item['thumbnail'] . '">
                                                                </a>
                                                            </div>
                                                            <div class="price-percent-reduction2"><img src="img/price-percent-br.png"/>
                                                            <div class="text" style=" color: #fff;
                                                            position: absolute;
                                                            top: 4px"
                                                            font-size:14px;
                                                            >
                                                            '.$item['sale'].'
                                                            </div></div>
                                                            
                                                            </div>
                                                            <div class="right-block">                                                   
                                                            <h3 class="product-name product-name-index">
                                                                <a href="" title="' . $item['title'] . '">' . $item['title'] . '</a></h3>
                                                            <div class="content_price">
                                                                <span class="price product-price">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                                                <span class="price old-price">' . number_format($item['pricenosale'], 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            
                                                            </div>
                                                            </li>
                                                                ';
                                                        }
                                                        ?>
                                                    
                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="category-featured furniture">
                        <nav class="navbar nav-menu show-brand bg-border-furniture">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div>
                                    <h2 class="navbar-brand"><a href="" title="Thoát Sàn">Thoát Sàn</a></h2>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <!--<div class="featured-text"><span>featured</span></div>-->
                                <div class="banner-img">
                                    <a href="" title="Thoát Sàn">
                                        <img alt="Thoát Sàn" src="https://thietbivesinh.com.vn/public/home/images/banner_cate.png" style="height: 576px;">
                                    </a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        <div class="tab-panel active" id="tab-4">
                                            <div class="box-right">
                                                <ul class="product-list row">
                                                <?PHP
                                                        $sql = 'SELECT * from combo where id_product_combo=10 limit 8';
                                                        $productList = executeResult($sql);
                                                        
                                                        foreach ($productList as $item) {
                                                            echo '
                                                            <li class="col-sm-3 col-xs-6">
                                                            <div class="left-block">
                                                            <div class="image banner-boder-zoom2">
                                                                <a href="details.php?id=' . $item['id'] . '" title="' . $item['title'] . '">
                                                                    <img class="img-responsive" alt="' . $item['title'] . '"src="' . $item['thumbnail'] . '">
                                                                </a>
                                                            </div>
                                                            <div class="price-percent-reduction2"><img src="img/price-percent-br.png"/>
                                                            <div class="text" style=" color: #fff;
                                                            position: absolute;
                                                            top: 4px"
                                                            font-size:14px;
                                                            >
                                                            '.$item['sale'].'
                                                            </div></div>
                                                            
                                                            </div>
                                                            <div class="right-block">                                                   
                                                            <h3 class="product-name product-name-index">
                                                                <a href="" title="' . $item['title'] . '">' . $item['title'] . '</a></h3>
                                                            <div class="content_price">
                                                                <span class="price product-price">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                                                <span class="price old-price">' . number_format($item['pricenosale'], 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            
                                                            </div>
                                                            </li>
                                                                ';
                                                        }
                                                        ?>
                                                    
                                                                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="category-featured furniture">
                        <nav class="navbar nav-menu show-brand bg-border-furniture">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div>
                                    <h2 class="navbar-brand"><a href="" title="Phụ Kiện">Phụ Kiện</a></h2>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                        <div class="product-featured clearfix">
                            <div class="banner-featured">
                                <!--<div class="featured-text"><span>featured</span></div>-->
                                <div class="banner-img">
                                    <a href="" title="Phụ Kiện">
                                        <img *style="float:left;" alt="Phụ Kiện" src="https://thietbivesinh.com.vn/public/home/images/banner_cate.png" style="height: 576px;">
                                    </a>
                                </div>
                            </div>
                            <div class="product-featured-content">
                                <div class="product-featured-list">
                                    <div class="tab-container">
                                        <!-- tab product -->
                                        <div class="tab-panel active" id="tab-4">
                                            <div class="box-right">
                                                <ul class="product-list row">
                                                <?PHP
                                                        $sql = 'SELECT * from combo where id_product_combo=11 limit 8';
                                                        $productList = executeResult($sql);
                                                        
                                                        foreach ($productList as $item) {
                                                            echo '
                                                            <li class="col-sm-3 col-xs-6">
                                                            <div class="left-block">
                                                            <div class="image banner-boder-zoom2">
                                                                <a href="details.php?id=' . $item['id'] . '" title="' . $item['title'] . '">
                                                                    <img class="img-responsive" alt="' . $item['title'] . '"src="' . $item['thumbnail'] . '">
                                                                </a>
                                                            </div>
                                                            <div class="price-percent-reduction2"><img src="img/price-percent-br.png"/>
                                                            <div class="text" style=" color: #fff;
                                                            position: absolute;
                                                            top: 4px"
                                                            font-size:14px;
                                                            >
                                                            '.$item['sale'].'
                                                            </div></div>
                                                            
                                                            </div>
                                                            <div class="right-block">                                                   
                                                            <h3 class="product-name product-name-index">
                                                                <a href="" title="' . $item['title'] . '">' . $item['title'] . '</a></h3>
                                                            <div class="content_price">
                                                                <span class="price product-price">' . number_format($item['price'], 0, ',', '.') . 'đ</span>
                                                                <span class="price old-price">' . number_format($item['pricenosale'], 0, ',', '.') . 'đ</span>
                                                            </div>
                                                            
                                                            </div>
                                                            </li>
                                                                ';
                                                        }
                                                        ?>                                    
                                               </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                </div>
            </div>
        