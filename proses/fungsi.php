<?php 

    function rupiah($angka){
        $hasil_rupiah = 'RP '.number_format($angka,0,',','.');
        return $hasil_rupiah;
    }

    function hitung_diskon($harga, $jumlah_beli){
        $total_beli = $harga * $jumlah_beli;

        if($total_beli >= 500000) {
            $diskon = $total_beli * 0.05;
        } else {
            $diskon = 0;
        }
        return $diskon;
    }


    function getDataJSON($path){
        $jsonString = file_get_contents($path);
        $jsonData = json_decode($jsonString, true);

        if(!is_array($jsonData)){
            $jsonData = [];
        }
        return $jsonData;
    }

    function writeJSON($array_data, $path ='../data/pemesanan.json'){
        $jsonString = json_encode($array_data, JSON_PRETTY_PRINT);

        $fp = fopen($path, 'w');
        fwrite($fp, $jsonString);
        fclose($fp);
    }

?>