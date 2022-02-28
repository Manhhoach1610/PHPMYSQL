<?php
// chứa class gồm function database 
include('connect.php');
class Data {
    // tạo 1 function để thực hiện câu lệnh sql trong bảng contact
    public function in_contact($name,$email,$subject,$message,$term,$subcribe){
        global $con; 
        $sql="insert into contact(name, email, subject, message, term, subcribe) 
              values('$name','$email','$subject','$message','$term','$subcribe')";
        $run = mysqli_query($con, $sql);
        return $run;
    }

    public function login($users, $password) {
        global $con; 
        try {
            $sql = "select * from login where users='$users' and password='$password'";
            $query = mysqli_query($con, $sql); 
            $row = mysqli_num_rows($query); 
            return $row;
        } catch(Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function register($name,$password,$password_enter,$quequan,$ngaysinh,$file,$gioitinh,$sothich) {
        global $con; 
        $sql = "insert into register(name,password,password_enter,quequan,ngaysinh,file,gioitinh,sothich) 
                values('$name','$password','$password_enter','$quequan','$ngaysinh','$file','$gioitinh','$sothich') ";
        $query = mysqli_query($con, $sql);
        return $query;
    }

    public function select_blog() {
        global $con; 
        $sql = "select * from blog";
        $query = mysqli_query($con, $sql);
        return $query;
    }

    public function select_blog_id($id_blog) {
        global $con; 
        $sql = "select * from blog where ID = '$id_blog' ";
        $query = mysqli_query($con, $sql);
        return $query;
    }
}

?>