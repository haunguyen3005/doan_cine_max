<?php
    $data = $_POST;
    $errors = [];
    
    //Validate title
    if (!is_string($data['booking_room']) || strlen($data['booking_room']) < 0
        || strlen($data['booking_room']) > 3) {
         $errors['booking_room'] = $data['booking_room'] . "Room không hợp lệ!";
    }
    //Validate genre
    if (!is_string($data['type']) || strlen($data['type']) < 1 
    || strlen($data['type']) > 55) {
     $errors['type'] = $data['type'] . "Type không hợp lệ!";
    }
    
    //Validate director
    if (!is_string($data['firstName']) || strlen($data['firstName']) < 1 
        || strlen($data['firstName']) > 255) {
        $errors['firstName'] = $data['firstName']. "Firstname vào không hợp lệ!";
    }
    //Validate actor
    if (!is_string($data['lastName']) || strlen($data['lastName']) < 1
        || strlen($data['lastName']) > 255) {
        $errors['lastName'] = "Lastname vào không hợp lệ!";
    }
    //fullname
    if (!is_string($data['fullName']) || strlen($data['fullName']) < 2 
        || strlen($data['fullName']) > 255) {
        $errors['fullName'] = "Fullname vào không hợp lệ!";
    }
    //email
    if (!is_string($data['email']) || strlen($data['email']) < 2 
        || strlen($data['email']) > 255) {
        $errors['email'] = "Email vào không hợp lệ!";
    }
    //seat
    if (!is_string($data['booking_seat']) || strlen($data['booking_seat']) < 1 
        || strlen($data['booking_seat']) > 3) {
         $errors['booking_seat'] = $data['booking_seat'] . "seat không hợp lệ!";
    }
    //
    if (count($errors) > 0) {
        $err_str = '<ul>';
        foreach ($errors as $err) {
            $err_str .= '<li>'.$err.'</li>';
        }   
        $err_str .= '</ul>';
        echo  $err_str;
    }else{

        if (isset($_GET['id'])) {
            //Chỉnh sửa thông tin
            //Kết nối databse
            $con = mysqli_connect('localhost', 'root', '', 'cine_max_db');
            //Viết câu SQL lấy tất cả dữ liệu trong bảng movies
            $sql = " UPDATE `booking` SET `booking_room`='".$data['booking_room']."',`type`='".$data['type']."',
            `movie_date`='".$data['movie_date']."',`movie_time`='".$data['movie_time']."',`firstName`='".$data['firstName']."',`lastName`='".$data['lastName']."'
            ,`fullName`='".$data['fullName']."',`email`='".$data['email']."',`booking_DateTime`='".$data['booking_DateTime']."',`booking_seat`='".$data['booking_seat']."',
            `amout`='".$data['amout']."' WHERE `id` = ".$_GET['id'];
            // Chạy câu SQL
            if ($result = mysqli_query($con,$sql)) {
                echo "<h1>Chỉnh sửa thông tin booking thành công Click vào <a href='../admin/index.php'>đây</a> để về trang danh sách</h1>";
            }else{
                echo "<h1>Có lỗi xảy ra Click vào <a href='../admin/index.php'>đây</a> để về trang danh sách</h1>";
            }
        }else{
            //Thêm mới booking
            //Kết nối databse
            include"../model/connectDB.php";
            $con = mysqli_connect('localhost', 'root', '', 'cine_max_db');
            //Viết câu SQL lấy tất cả dữ liệu trong bảng movies
            $sql = " INSERT INTO `booking` 
            (`booking_room`, `type`, `movie_date`, `movie_time`, `firstName`,`lastName`,`fullName`,`email`,`booking_DateTime`,`booking_seat`, `amout`
            ) 
            VALUES ('".$data['booking_room']."', '".$data['type']."',
            '".$data['movie_date']."', '".$data['movie_time']."', '".$data['firstName']."','".$data['lastName']."', '".$data['fullName']."',
             '".$data['email']."', '".$data['booking_DateTime']."', '".$data['booking_seat']."', '".$data['amout']."');";
            //Chạy câu SQL
            if ($result = mysqli_query($con,$sql)) {
                echo "<h1>Thêm mới phim thành công Click vào <a href='../admin/index.php'>đây</a> để về trang danh sách</h1>";
            }else{
                echo "<h1>Có lỗi xảy ra Click vào <a href='../admin/index.php'>đây</a> để về trang danh sách</h1>";
            }
        }
  
    }
    
?>
