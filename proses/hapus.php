<?php 

    include_once 'fungsi.php';

    $path = '../data/pemesanan.json';
    $arr_data = getDataJSON($path);

    $id = $_GET['id'];

    $key = array_search($id, array_column($arr_data, 'ID'));

    unset($arr_data[$key]);
    $reindex = array_values($arr_data);
    
    writeJSON($reindex);
    
    header('Location: http://localhost/VSGA/pesan_senjata/index.php?halaman=list_pesanan');

?>