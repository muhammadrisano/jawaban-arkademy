<?php


function ganti_kata($kata, $huruf_awal, $huruf_akhir)
{
    $hasil = "";
    $arraykata = str_split($kata);
    foreach ($arraykata as $huruf) {
        if ($huruf == $huruf_awal) {
            $hasil .= $huruf_akhir;
        } else {
            $hasil .= $huruf;
        }
    }
    echo $hasil;
}

ganti_kata("purwakerta", "a", "o");
?>
