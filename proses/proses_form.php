<?php
    include_once 'fungsi.php';

    $nama = $_GET['nama'];
    $area = $_GET['area'];
    $jumlah = $_GET['jumlah'];
    $pesanan = $_GET['senjata'];

    $harga = 8600000;
    
    $diskon = hitung_diskon($harga, $jumlah);

    $subtotal = ($harga * $jumlah) - $diskon;
    $rp = rupiah($subtotal);

    if($jumlah > 0 ){
        // echo "$nama memesan $jumlah x $pesanan,   Booking Area Number. $area Subtotal = $rp, diskon " .rupiah($diskon);

        $arr_data_baru = [
            'ID' => $nama.'_'.$area.'_'.date("YmdHis"),
            'nama' => $nama,
            'area' => $area,
            'waktu' => date("d-m-Y H:i:s"),
            'pesanan' => $pesanan,
            'jumlah' => $jumlah,
            'subtotal' => $subtotal
        ];

        $path = '../data/pemesanan.json';
        $jsonData = getDataJSON($path);
        $jsonData[] = $arr_data_baru;
        writeJSON($jsonData);

        header('Location: http://localhost/VSGA/pesan_senjata/index.php?halaman=list_pesanan');

    } else {
        header('Location: http://localhost/VSGA/pesan_senjata/index.php');
    }
    

?>