<?php
    require_once('../database/config.php');
    require_once('../database/dbhelper.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="plugin/fontawesome/css/all.css">

    <link rel="stylesheet" href="header.css">
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Đăng nhập</title>
</head>

<body>
    <div id="wrapper" style="padding-bottom: 4rem;">
        <header>
            <div class="container">
                <section class="logo">
                    <a href="../index.php"><img src="../img/logo.png" alt=""></a>
                </section>
                <nav>
                    <ul>
                        <li><a href="../index.php">Trang Chủ</a></li>
                        <li class="nav-cha">
                            <a href="../sanpham.php?page=sanpham">Sản Phẩm</a>
                            <ul class="nav-con">
                                <?php
                                $sql = "SELECT * FROM category";
                                $result = executeResult($sql);
                                foreach ($result as $item) {
                                    echo '<li><a href="../sanpham.php?id_category=' . $item['id'] . '">' . $item['name'] . '</a></li>';
                                }
                                ?>
                                
                            </ul>
                        </li>
                        <li><a href="../about.php">Blog</a></li>
                        <li><a href="../sendMail.php">Hỗ Trợ Khách Hàng<i class="bx bx-support"></i></a></li>
                    </ul>
                </nav>
                <section class="menu-right">
                    <div class="cart">
                        <a href="../cart.php"><i class="bx bxs-cart header__nav-cart-icon"></i></a>
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
                    </div>
                    <div class="login">
                        <?php
                        if (isset($_COOKIE['username'])) {
                            echo '<a style="color:black;" href="">' . $_COOKIE['username'] . '</a>
                            <div class="logout">
                                <a href="changePass.php"><i class="fas fa-exchange-alt"></i>Đổi mật khẩu</a> <br>
                                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                            </div>
                            ';
                        } else {
                            echo '<a href="login.php"">Đăng nhập</a>';
                        }

                        ?>


                    </div>
                </section>
            </div>
        </header>
        <div class="container">
            <form action="login.php" method="POST">
                <h1 style="text-align: center;">Đăng nhập hệ thống</h1>
                <div class="form-group">
                    <label for="">Tài khoản:</label>
                    <input type="text" name="username" class="form-control" placeholder="Tài khoản">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu:</label>
                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                </div>
                <a href="forget.php">Quên mật khẩu</a>
                <div style="padding-top: 5px;" class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Đăng nhập">
                    <p style="padding-top: 1rem;">Bạn chưa có tài khoản? <a href="reg.php">Đăng ký</a></p>
                </div>
            </form>
        </div>
    </div>
    <?php
    require_once('../database/config.php');
    require_once('../database/dbhelper.php');
    if (isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != '') {
        $username = $_POST["username"];
        $password = $_POST["password"];
        // $password = md5($password);
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
        execute($sql);
        $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
        $user = mysqli_query($con, $sql);
        if ($role == 1) {
            echo '<script language="javascript">
                alert("Đăng nhập Admin thành công!"); 
                window.location = "../admin/index.php";
            </script>';
            $username = trim(strip_tags($_POST['username']));
            $password = trim(strip_tags($_POST['password']));
            session_start();
            setcookie("username", $username, time() + 30 * 24 * 60 * 60, '/');
            setcookie("password", $password, time() + 30 * 24 * 60 * 60, '/');
        } else if (mysqli_num_rows($user) > 0) {
            echo '<script language="javascript">
                alert("Xin chào, "); 
                window.location = "../index.php";
            </script>';
            $username = trim(strip_tags($_POST['username']));
            $password = trim(strip_tags($_POST['password']));
            session_start();
            setcookie("username", $username, time() + 30 * 24 * 60 * 60, '/');
            setcookie("password", $password, time() + 30 * 24 * 60 * 60, '/');
        } else {
            echo '<script language="javascript">
                alert("Tài khoản và mật khẩu không chính xác !");
                window.location = "login.php";
             </script>';
        }


        // setcookie("username", "", time() - 3600);
        // setcookie("password", "", time() - 3600);
    }
    ?>
</body>

</html>