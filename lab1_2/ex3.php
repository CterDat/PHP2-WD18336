<?php
function tinhTongVaTrungBinh($mang) {

    
    $tong = array_sum($mang);

    
    $trung_binh = $tong / count($mang);

    return array('Tong' => $tong, 'TrungBinh' => $trung_binh);
}


$array = array(4,2,5,7,8);
$ket_qua = tinhTongVaTrungBinh($array);

echo "Tổng: " . $ket_qua['Tong'] . "<br>";
echo "Trung bình: " . $ket_qua['TrungBinh'] . "<br>";
?>