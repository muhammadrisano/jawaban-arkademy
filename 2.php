<?php



function betweenDays($tgl1, $tgl2)
{
    for ($i = date($tgl1); $i <= date($tgl2); $i++) {
        echo "'$i',";
    }
}

betweenDays("2019-11-01", "2019-11-05");
