<?php
    //Khai báo biến
    // $a=6;
    // $b="Chào các cậu";
    // echo $a;
    // echo $b;

    //Mảng gồm 2 loại:
    //Tuần tự
    // $mang = [1,2,3,4,5,6];
    // // echo $mang[2];
    // //Duyệt mảng
    // for ($i=0; $i < count($mang); $i++) { 
    //      echo $mang[$i];
    //     //  echo $i;
    // }

    //Liên hợp
    $manglh = ["red"=>"màu đỏ","green"=>"màu xanh","blue"=>"xanh dương"];
    // echo $manglh["red"];
    // foreach ($manglh as $key=>$value) {
    //     echo "Vị trí: ".$key."_"."Giá trị: ".$value."<br>";
    // }
?>
<!-- <table border="1">
    <tr>
        <td>Vị trí</td>
        <td>Giá trị</td>
    </tr>
    <?php //foreach ($manglh as $key => $value) {?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value ?></td>
        </tr>
    <?php
    //}
    ?>
</table> -->

<?php
//Hàm là gì
//Hàm dùng để đóng gói các chức năng trong 1 đoạn chương trình
//Giúp làm gọn code và tái sử dụng được code

//kiểm tra số chẵn lẻ
//Hàm ko trả về
// $n = 10;
// function kt($n) {
//     //những gì trong khe ngoặc thì được gọi là tham số
//     //có thể nhập nhiều tham số và phân cách bằng dấu phẩy
//     if ($n % 2 == 0) {
//         echo "Số chẵn";
//     }else {
//         echo "Số lẻ";
//     }
// }
// //Gọi hàm
//     kt($n);

//Hàm có trả về
//Tính diện tích hcn
    // function S($a,$b) {
    //     return $a * $b;
    // }
    // echo S(6, 8);