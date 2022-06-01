<?php

function  table()
{

    $data = "<table border=1>";
    for ($i = 1; $i <= 8; $i++) {
        $data .= "<tr>";
        for ($j = 1; $j <= 8; $j++) {
            $jumlah = $i * $j;
            $num = array('1', '2', '5', '7', '10', '11', '13', '14', '17', '19', '22', '23', '25', '26', '29', '31', '34', '35', '37', '38', '41', '43', '46', '47', '49', '50', '53', '55', '58', '59', '61', '62');
            for ($x = 0; $x < count($num); $x++) {
                $cek = $num[$x];
            }
            $data .= "<td width=80 height=30 align='center' style='background-color: black;'>";
            $data .= "<font color='white'>" . $jumlah . "-" . $cek . "</font>";
            $data .= "</td>";
        }
    }
    $data .= "</table>";





    return $data;
}

echo table();

function enkripsi($in)
{
    $input = $in;
    $key = array(
        'D' => 'E',
        'F' => 'D',
        'K' => 'G',
        'N' => 'S',
        'H' => 'K',
        'Q' => 'K'
    );

    $output = str_replace(array_keys($key), $key, $input);

    return $output;
}

echo enkripsi('DFHKNQ');