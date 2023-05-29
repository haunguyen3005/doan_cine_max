<?php 

    //Kết nối databse
    $con = mysqli_connect('localhost', 'root', '', 'cine_max_db');
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql="SELECT * FROM `movies` ORDER BY `id`";
    //Chạy câu SQL
    $result=mysqli_query($con,$sql);
    //Gắn dữ liệu lấy được vào mảng $data
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
?>
<style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
            }
            tr {
                border: 1px solid;
            }
            th {
                border: 1px solid;
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
                color: red;
            }
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
         <table id="datatable" style="border: 1px solid">
            <h1>Quản lý phim</h1>
            <thead>
                <tr role="row">
                    <th>ID</th>
                    <th>Title</th>
                    <th>genre</th>
                    <th>derecter</th>
                    <th>actor</th>
                    <th>reldate</th>
                    <th>img</th>
                    <th style="width: 7%;">Edit</th>
                    <th style="width: 10%;">>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $html = '';
                foreach ($data as $value) {
                    $html .= '
                    <tr role="row">
                        <td>'.$value['id'].'</td>
                        <td>'.$value['title'].'</td>
                        <td>'.$value['genre'].'</td>
                        <td>'.$value['director'].'</td>
                        <td>'.$value['actor'].'</td>
                        <td>'.$value['relDate'].' </td>
                        <td><img src='.$value['image'].' ></td>
                        <td><a href="editmovies.php?id='.$value['id'].'">Edit</a></td>
                        <td><a href="deletemovies.php?id='.$value['id'].'"> Delete</a></td>
                    </tr>';
                }
                
                ?>
               
                    <?php  
                        echo $html;
                    ?>
                
                </tbody>
            <tfoot>
                <tr>
                    <td colspan="8">
                        <a href="addmovies.php"><button id="button">Thêm phim</button></a>
                    </td>
                </tr>
            </tfoot>
        </table>