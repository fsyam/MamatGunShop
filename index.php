<?php
$arr_menu = [
    'BOOKING' => 'index.php?halaman=form_pesanan',
    'PRODUK' => [
        'Senjata' => '#',
        'Peluru' => '#',
        'Granat' => '#',
        'Aksesoris' => '#',
    ],
    'DAFTAR BOOKING' => 'index.php?halaman=list_pesanan',
    'TENTANG KAMI' => 'index.php?halaman=about',
    'TUTORIAL' => 'index.php?halaman=tutorial'
];

ksort($arr_menu);
// asort($arr_menu);
// krsort($arr_menu);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        h1 {
            font-size: 50px
        }

        img {
            width: 100%;
        }
    </style>
    <title>Proyek DTS VSGA 2023</title>
</head>

<body>
    <div class="content">
        <div class="header">
            <h1>DTS - VSGA 2023</h1>
            <h2>Kelas Junior Web Development 2023</h2>
            <h1>MAMAT GUNSHOP</h1>

        </div>
        <div class="menu">
            <ul>

                <?php
                foreach ($arr_menu as $key => $value) {

                    if (!is_array($value)) {
                        echo '
                            <li>
                                <a href="' . $value . '">
                                    <b>' . $key . '</b>
                                </a>
                            </li>
                        ';
                    } else {
                        echo '
                            <li class="dropdown">
                                <a href="#" class="dropbtn">
                                    <b>' . $key . '</b>
                                </a>

                                <div class="dropdown-content">
                        ';

                        foreach ($value as $key2 => $value2) {
                            echo '
                                <a href="' . $value2 . '">' . $key2 . '</a>
                            ';
                        }
                        echo '
                                </div>
                            </li>
                        ';
                    }
                }
                ?>

                <!-- <li class="dropdown">
                <a href="#" class="dropbtn">
                    <b>PRODUK</b>
                </a>
                <div class="dropdown-content">
                    <a href="#">Pistol</a> 
                    <a href="#">Senapan</a>
                    <a href="#">Granat</a>
                </div>
            </li> -->
            </ul>

        </div>
        <div class="badan">
            <div class="judul">

                <?php

                if (isset($_GET['halaman'])) {
                    $halaman = $_GET['halaman'];
                } else {
                    $halaman = 'form_pesanan';
                }



                include_once 'halaman/' . $halaman . '.php';
                ?>

            </div>
            <div>
            </div>
        </div>
        <script src="js/validasi.js"></script>
</body>

</html>