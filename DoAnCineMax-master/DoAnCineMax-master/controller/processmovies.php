<?php
    $data = $_POST;
    $errors = [];
  
    //Validate title
    if (!is_string($data['title']) || strlen($data['title']) < 5 
        || strlen($data['title']) > 55) {
         $errors['title'] = $data['title'] . "Tên phim không hợp lệ!";
    }
    //Validate genre
    if (!is_string($data['genre']) || strlen($data['genre']) < 5 
    || strlen($data['genre']) > 55) {
     $errors['genre'] = $data['genre'] . "Thể loại phim không hợp lệ!";
    }
    //Validate director
    if (!is_string($data['director']) || strlen($data['director']) < 2 
        || strlen($data['director']) > 255) {
        $errors['director'] = "Trường nhập vào không hợp lệ!";
    }
    //Validate actor
    if (!is_string($data['actor']) || strlen($data['actor']) < 5 
    || strlen($data['actor']) > 55) {
     $errors['actor'] = $data['actor'] . "Tác giả phim không hợp lệ!";
    }

  
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
            $sql = " UPDATE `movies` SET `title`='".$data['title']."',`genre`='".$data['genre']."',
            `director`='".$data['director']."',`actor`='".$data['actor']."',`relDate`='".$data['relDate']."',
            `image`='".$data['image']."' WHERE `id` = ".$_GET['id'];
            // Chạy câu SQL
            if ($result = mysqli_query($con,$sql)) {
                echo "<h1>Chỉnh sửa thông tin phim thành công Click vào <a href='../admin/index.php'>đây</a> để về trang danh sách</h1>";
            }else{
                echo "<h1>Có lỗi xảy ra Click vào <a href='../admin/index.php'>đây</a> để về trang danh sách</h1>";
            }
        }else{
            //Thêm mới phim
            //Kết nối databse
            $con = mysqli_connect('localhost', 'root', '', 'cine_max_db');
            //Viết câu SQL lấy tất cả dữ liệu trong bảng movies
            $sql = "INSERT INTO `movies` 
            (`title`, `genre`, `director`, `actor`, `reldate`,`image`) 
            VALUES ('".$data['title']."', '".$data['genre']."',
            '".$data['director']."', '".$data['actor']."', '".$data['relDate']."','".$data['image']."');";
            //Chạy câu SQL
            if ($result = mysqli_query($con,$sql)) {
                echo "<h1>Thêm mới phim thành công Click vào <a href='../admin/index.php'>đây</a> để về trang danh sách</h1>";
            }else{
                echo "<h1>Có lỗi xảy ra Click vào <a href='../admin/index.php'>đây</a> để về trang danh sách</h1>";
            }
        }
  
    }
    
?>
