<?php
    require_once('database/config.php');
    require_once('database/dbhelper.php');
?>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
                <div class="header_top">
                    <div class="logo">
                        <a href="index.php"><img width="200px" src="img/logo.png" alt="" title="Hàng chính hãng JOTO"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <div class="nav-item">
                            <a href="index.php">
                                <li>Trang Chủ</li></a>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="#">
                                <li>
                                    Sản Phẩm
                                    <i class='bx bx-caret-down'></i>
                                    <ul class="sub-menu">
                                        <?php
                                            $sql="SELECT * FROM category";
                                            $result=executeResult($sql);
                                            foreach($result as $item){
                                                echo '<li><a href="sanpham.php?id_category=' . $item['id'] . '">'.$item['name'].'</a></li>';
                                            }
                                        ?>
                                    </ul>
                                </li>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="">
                                <li>Blog</li>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="sendMail.php">
                                <li>Hỗ Trợ Khách Hàng<i class='bx bx-support'></i></li>
                                
                            </a>
                            
                        </div>
                        
                    </div>
                    
                    <div class="user">
                        <div class="login">
                            <a href="#">
                            <i style="font-size: 25px;" class='bx bxs-user-detail'></i>
                                <div class="hover-User">
                                    <?php
                                        if (isset($_COOKIE['username'])) {
                                            $username=$_COOKIE['username'];
                                            if ($username == 'AdminThanh'|| $username == 'admin') {
                                                echo '<a style="color:black;" href="">' . $_COOKIE['username'] . '</a>
                                                <div class="logout">
                                                    <a href="admin/"><i class="fas fa-user-edit"></i>Admin</a> <br>
                                                    <a href="login/logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                                </div>';
                                            }
                                            else{
                                                echo '<a style="color:black;" href="">' . $_COOKIE['username'] . '</a>
                                            <div class="logout">
                                                <a href="login/changePass.php"><i class="fas fa-exchange-alt"></i>Đổi mật khẩu</a> <br>
                                                <a href="login/logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                            </div>
                                            ';
                                            }
                                        } 
                                        else {
                                            echo '<a href="login/login.php"">Đăng nhập</a>';
                                        }

                                    ?>
                                </div>
                            </a>
                        </div>
                        <div class="cart">
                            <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                                <a href="cart.php" class="col-lg-1 col-md-1 col-sm-0 header__cart">
                                <div class="header__cart-icon-wrap">
                                <?php
                                    $cart = [];
                                    if (isset($_COOKIE['cart'])) {
                                        $json = $_COOKIE['cart'];
                                        $cart = json_decode($json, true);
                                    }
                                    $count = 0;
                                    foreach ($cart as $item) {
                                        $count += $item['num']; // đếm tổng số item
                                    }
                                ?>
                                <span><?= $count ?></span>
                                    <i class="bx bxs-cart header__nav-cart-icon"></i>
                                    
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
    
                </div>
            </nav>
