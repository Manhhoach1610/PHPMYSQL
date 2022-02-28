<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_bt.css">
    <title>Form đăng ký thông tin</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>Đăng ký thông tin</h1>
        </div>
        <div class="dusk">
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="text" name="hoten" placeholder="Nhập họ tên"> 
                </div>
                <div>
                    <input type="password" name="password" placeholder="Nhập mật khẩu">
                </div>
                <div>
                    <input type="password" name="password_enter" placeholder="Nhập lại mật khẩu">
                </div>
                <div class="form-group">
                    <select name="quequan">
                        <option value="0">--Chọn quê quán--</option>
                        <option value="1">Hà Nam</option>
                        <option value="2">Hà Nội</option>
                        <option value="3">Nam Định</option>
                    </select> 
                </div>
                <div>
                    <input type="date" name="ngaysinh" placeholder="mm/dd/yyyy"> 
                </div>
                <div class="form-actions">
                    <input type="file" name="file" placeholder="Chọn file">
                    
                </div>
                <div class="des">
                    <label for="" class="control-label">Giới tính</label>
                    <input type="radio" name="gioitinh" value="1"> Nam 
                    <input type="radio" name="gioitinh" value="2"> Nữ 
                    <input type="radio" name="gioitinh" value="3"> Khác 
                </div>
                <div class="pes">
                    <label for="" class="control-pull">Sở thích</label>
                    <input type="checkbox" name="sothich[]" value="Xem phim"> Xem phim
                    <input type="checkbox" name="sothich[]" value="Chơi game"> Chơi game
                    <input type="checkbox" name="sothich[]" value="Nghe nhạc"> Nghe nhạc
                </div>
                <div>
                    <input type="submit" name="btn" value="Đăng ký">
                </div>
            </form>
        </div>
    </div>
    
    <?php 
    session_start();
    require('control.php'); 
    $getdata = new Data(); 
    if(isset($_POST['btn'])) { 
        $upload = move_uploaded_file($_FILES['file']['tmp_name'], "images/".$_FILES['file']['name']);
        $sothich = "";
        foreach ($_POST['sothich'] as $key) {
            // duyệt mảng sở thích của cái biến key
            $sothich.=$key. ", ";
        }

        if(empty($_POST['hoten']) && empty($_POST['password']) && empty($_POST['password_enter']) ) {
            echo "<script>alert('Khong được để trống dữ liệu');</script>";
        } else { 
            // khai báo 1 biến register với lớp data chỉ đến function register  
            $register = $getdata->register($_POST['hoten'], $_POST['password'], $_POST['password_enter'], 
            $_POST['quequan'], $_POST['ngaysinh'], $_FILES['file']['name'], $_POST['gioitinh'], $sothich);  

            if($register) { 
                 echo "<script>alert('Your message has been sent successfully');</script>";
            } else {
                echo "<script>alert('Your message has not been sent successfully');</script>";
            }
        }

    }
    
    ?>
</body>
</html>