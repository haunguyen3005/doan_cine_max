<?php
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '', 'cine_max_db');
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql = "DELETE FROM `movies` WHERE `id`='".$id."'";
    // Chạy câu SQL
    if ($result = mysqli_query($con,$sql)) {
        echo "<h1>Xóa phim thành công Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
    }else{
        echo "<h1>Có lỗi xảy ra Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
    }
      
?>