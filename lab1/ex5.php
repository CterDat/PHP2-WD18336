<?php
function LuyThua($so, $mu) {
    if ($mu < 0) {
        return "Không tính lũy thừa với số mũ âm.";
    } else if ($mu == 0) {
        return 1;
    } else {
        $luy_thua = 1;
        for ($i = 1; $i <= $mu; $i++) {
            $luy_thua *= $so;
        }
        return $luy_thua;
    }
}

$so_can_luy_thua = 2;
$mu = 3;
$ket_qua = LuyThua($so_can_luy_thua, $mu);

echo "$so_can_luy_thua^$mu = $ket_qua";
?>