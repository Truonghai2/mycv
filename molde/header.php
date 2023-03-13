<?php
require_once('database/config.php');
require_once('database/dbhelper.php');
?>  

                <header class="header_top">
            <div class="logo" >
                <a href="index.php" ><img width="200px" src="img/logo.png" alt=""></a>
            </div>
            <ul class="nav-menu " id="header">
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="">Sản Phẩm</a></li>
                <?php
                                            $sql="SELECT * FROM category";
                                            $result=executeResult($sql);
                                            foreach($result as $item){
                                                echo '<li style="backgruod-color:rgb(66, 197, 237);"><a  href="sanpham.php?id_category=' . $item['id'] . '">'.$item['name'].'</a></li>';
                                            }
                                        ?>
                <li><a href="">Blog</a></li>
                <li><a href="">Hỗ trợ khách hàng<i class='bx bx-support'></i></a></li>
            </ul>
            <!-- <div class="nav-menu" id="header">
                
                <div class="nav-item">
                    <a href="index.php">
                        <li>Trang Chủ</li>
                    </a>
                </div>
                <div class="nav-item">
                    
                    <a href=""><li>
                        Sản Phẩm
                    </li></a>
                </div>
                <div class="nav-item">
                    <a href="">
                        <li>Blog</li>
                    </a>
                </div>
                <div class="nav-item">
                    <a href=""><li>Hỗ Trợ Khách Hàng<i class='bx bx-support'></i></li></a>
                </div>
                
                </div> -->
                <div class="user">
                    <div class="item login">
                        <a href=""><i class='bx bx-user'></i></a>
                        <div class="hover-user">
                                        <?php
                                            if (isset($_COOKIE['username'])) {
                                                $username=$_COOKIE['username'];
                                                if ( $username == 'B21DVCN065') {
                                                    echo '<a style="color:black;" href="#">' . $_COOKIE['username'] . '</a>
                                                    <div class="logout">
                                                        <a href="admin/"><i class="fas fa-user-edit"></i>Admin</a> <br>
                                                        <a href="login/logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                                    </div>';
                                                }
                                                else{
                                                    echo '<a style="color:black;" href="">' . $_COOKIE['username'] . '</a>
                                                    <div class="logout">
                                                        <a href="login/changePass.php"><i style=" font-size:13px;" class="fas fa-exchange-alt"></i>Đổi mật khẩu</a> <br>
                                                        <a href="login/logout.php"><i style=" font-size:13px;" class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                                    </div>
                                                    ';
                                                }
                                            } 
                                            else {
                                                echo '<a href="login/login.php"">Đăng nhập</a>';
                                            }

                                        ?>
                                        </div>
                    </div>
                    <div class="item cart" >
                        <a href="cart.php"><i class='bx bx-cart'></i> </a>
                        
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
                        <span class="number"><?=$count?></span>
                    </div>
                </div>
                <div class="mobile-menu-btn" id="mobile-menu" >
                    <i class='bx bx-menu'style="font-size:30px;"></i>
                </div>
                
            
        </header>
                    
            
                  