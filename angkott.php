<?php

$nama = "<h1>=== Program Kerja ===</h1><br/> <br/>";
echo $nama;

function tersediaAngkot($noAngkot) {
    $angkotTersedia = [1, 3, 10, 11];
    $angkotSerfis = [2, 9, 12, 17];

    if (in_array($noAngkot, $angkotTersedia)) {
        return "tersedia <br>";
    } elseif (in_array($noAngkot, $angkotSerfis)) {
        return "sedang diperbaiki <br>";
    } else {
        return "tidak tersedia <br>";
    }
}


function tampilanAngkot($noAngkot) {
    $status = tersediaAngkot($noAngkot);
    echo "Angkot no - $noAngkot $status <br>";
}


for ($nomor = 1; $nomor <= 20; $nomor++) {
    tampilanAngkot($nomor);
}

?>