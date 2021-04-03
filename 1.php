<?php

function cetak_uang_zilong($bulan){
    
    $saldoAwal = 3000000; // Saldo Awal
    $bunga_pertama = 75000; // bunga 2.5%
    $bunga_kedua = 76875; // bunga 2.5% + 1875
    $bulan_pertama = $saldoAwal + $bunga_pertama;
    $tot_bulan = $bulan_pertama + $bunga_kedua;
    $saldoAkhir = $tot_bulan * $bulan; 

    echo "Saldo akhir setelah ".$bulan." bulan adalah: Rp.".number_format($saldoAkhir ,0).",-";
}

cetak_uang_zilong(12); // cetak $saldoAkhir

