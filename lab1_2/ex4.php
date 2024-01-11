<?php
function GiaiThua($n) {
    if ($n < 0) {
        return "so am khong co giai thua";
    } else if ($n == 0 || $n == 1) {
        return 1;
    } else {
        $giai_thua = 1;
        for ($i = 2; $i <= $n; $i++) {
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}

$so_nguyen = 10;
$ket_qua = GiaiThua($so_nguyen);

echo "Giai thừa của $so_nguyen là: $ket_qua";
?>