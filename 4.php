<?php
function cetak_gambar($angka)
{
    $nilai = $angka;
    $nilai_tengah = ceil($angka / 2);

    for ($i = 1; $i <= $nilai; $i++) {
        if ($i == 1 or $i == $nilai) {
            for ($j = 1; $j <= $nilai; $j++) {

                echo " x ";
            }
        } else {
            for ($j = 1; $j <= $nilai; $j++) {
                if ($j == $nilai_tengah) {
                    echo " x ";
                } else {
                    echo " = ";
                }
            }
        }
        echo "<br/>";
    }
}

cetak_gambar(5);

?>
