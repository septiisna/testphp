<?php
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$array = explode(' ', $nilai);
$rata = array_sum($array) / count($array);
rsort($array);
echo "\n--------------------------------------------------------\n\n";
echo "Rata-rata : " . $rata . "\n";

$top = 7;
echo "7 Nilai tertinggi : ";
for ($x = 0; $x < $top; $x++) {
    echo $array[$x];
    echo  " ";
}

echo "\n";

$bottom = 7;
sort($array);
echo "7 Nilai terendah : ";
for ($x = 0; $x < $bottom; $x++) {
    echo $array[$x];
    echo  " ";
}

echo "\n--------------------------------------------------------\n\n";

$kalimat = "TranSISI";
$cek = preg_replace('/[A-Z]/', '', $kalimat);
echo "'" . $kalimat . "' mengandung " . strlen($cek) . " buah huruf kecil";

echo "\n--------------------------------------------------------\n\n";

function generateUBT($input)
{
    $arr_input = explode(' ', $input);

    $unigram = '';
    foreach ($arr_input as $item) {
        $unigram .= $item . ', ';
    }
    $unigram = substr($unigram, 0, -2);

    $x = 0;
    $bigram = '';
    foreach ($arr_input as $item) {
        if ($x < 1) {
            $bigram .= $item . ' ';
            $x++;
        } else {
            $bigram .= $item . ', ';
            $x = 0;
        }
    }
    $bigram = substr($bigram, 0, -2);

    $y = 0;
    $trigram = '';
    foreach ($arr_input as $item) {
        if ($y < 2) {
            $trigram .= $item . ' ';
            $y++;
        } else {
            $trigram .= $item . ', ';
            $y = 0;
        }
    }
    $trigram = substr($trigram, 0, -2);


    $result = 'Unigram : ' . $unigram;
    $result .= "\n" . 'Bigram : ' . $bigram;
    $result .= "\n" . 'Trigram : ' . $trigram;

    return $result;
}

echo generateUBT('Jakarta adalah ibukota negara Republik Indonesia');
echo "\n--------------------------------------------------------\n\n";