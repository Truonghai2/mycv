<?php require('connect.php') ?>
<?php
require_once('../database/dbhelper.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugin/fontawesome/css/all.css">

    <link rel="stylesheet" href="header.css">
</head>

<body>
    <div id="wrapper">
    <?php require_once('header.php'); ?>
        <h2 style="text-align: center;">Quên mật khẩu</h2>
        <div class="container">
            <form method="POST" action="">
                <div class="form-group">
                    <label>Tên của bạn:</label>
                    <input class="form-control" type="text" name="name" required="required" />
                </div>
                <div class="form-group">
                    <label>Gmail của bạn:</label>
                    <input class="form-control" type="email" name="email" required="required" />
                </div>
                <div class="form-group">
                    <label>Số điện thoại:</label>
                    <input class="form-control" type="text" name="subject" required="required" />
                </div>
                <div class="form-group">
                    <label>Lý do:</label>
                    <textarea class="form-control" name="message" id="" cols="30" rows="4"></textarea>
                </div>
                <button name="send" class="btn btn-primary">Khôi phục</button>
                <?php
                $previous = "javascript:history.go(-1)";
                if (isset($_SERVER['HTTP_REFERER'])) {
                    $previous = $_SERVER['HTTP_REFERER'];
                }
                ?>
                <a href="<?= $previous ?>" class="btn btn-warning">Quay lại</a>
            </form>
        </div>
        <?php
        //nhúng thư viện vào để dùng
        require "../PHPMailer-master/src/PHPMailer.php";
        require "../PHPMailer-master/src/SMTP.php";
        require '../PHPMailer-master/src/Exception.php';

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_POST['name']; // lấy ra tên của bạn
            $email = $_POST['email']; // Email cần gửi đến
            $subject = $_POST['subject']; // Tiêu đề email
            $message = $_POST['message']; // Nội dung email
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: cho phép các trường hợp ngoại lệ


            $sql = "SELECT * FROM user WHERE email= '$email'";
            $kq = $conn->query($sql);
            $numrows_email = $kq->rowCount();
            if ($numrows_email == 1) {
                foreach ($kq as $item) {
                    $message = 'Xin chào ' . '<strong>' . $item['username'] . '</strong>' . '<br>Mật khẩu của bạn là: ' . '<strong>' . $item['password'] . '</strong>';
                }
            } else {
                echo '<script language="javascript">
                        alert("Tài khoản không tồn tại !");
                        window.location = "changePass.php";
                     </script>';
            }

            // TRY có thể nó sẽ xảy ra ngoại lệ
            try {
                //Server settings
                $mail->isSMTP(); // gửi mail SMTP
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  // khai báo SMTP servers
                $mail->SMTPAuth = true; // Enable authentication
                $nguoigui = 'hellook332@gmail.com'; // Tài khoản Email
                $matkhau = 'thanh1010'; // Mật khẩu Email
                $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                $mail->Port = 465;  // Port kết nối: khai báo 465 hoặc 587                


                // Recipients - Người nhận
                $tennguoigui = 'Nguyễn Đăng Thành'; // Tên người gửi lấy từ form nhập
                $mail->Username = $nguoigui; // SMTP username
                $mail->Password = $matkhau;   // SMTP password
                $mail->setFrom($nguoigui, $tennguoigui); //mail và tên người nhận 
                $to = $email; // Email cần gửi đến lấy từ form nhập
                $to_name = "Nguyễn Đăng Thành"; // Tên người cần gửi đến

                // Content 
                $mail->addAddress($to, $to_name); //mail và tên người nhận  
                $mail->isHTML(true);  // Khai báo nội dung email hiển thị định dạng html
                $mail->Subject = 'Khôi phục mật khẩu'; // Tiêu đề email
                $mail->Body = $message; // Nội dung email

                $mail->send(); // Tiến hành gửi thư
                echo '<script language="javascript">
                        alert("Mật khẩu của bạn đã được gửi đến Email !");
                        window.location = "login.php";
                     </script>';
            }
            // nếu ở trên lỗi thì CATCH sẽ chạy
            catch (Exception $e) {
                echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
            }
        }
        ?>
    </div>
</body>

</html>