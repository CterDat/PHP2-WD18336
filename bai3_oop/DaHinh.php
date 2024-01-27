<?php

// interface không phải là class cho nên nó sẽ không có thuộc tính và phương thức
// như class bình thường
// nhưng nó sẽ có phương thức trừu tượng

interface DiChuyen{
    function di();
    // tự động hiểu đây là phương thức trừu tượng vì có interface


}

//bình thương thì dùng extends nhưng interface thì dùng implements
class ConNguoi implements DiChuyen{
    public function di(){
        echo "đi bằng 2 chân </br>";
    }
}
class Ôt implements DiChuyen{
    public function di(){
        echo "Đi bằng 4 bánh </br>";
    }
}

//interface và abstract đều là bản thiết kế cho các dự án phần mềm
// interface là bản thiết kế cho các class có chung hành động nhưng khác bản chất
// abstract là bản thiết kế cho các class có chung hành động và chung bản chất
// mực độ sử dụng: interface nó sẽ rộng hơn so với abstracts

