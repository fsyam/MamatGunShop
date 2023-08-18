<?php
include_once 'proses/fungsi.php';

$path = 'data/pemesanan.json';
$arr_data = getDataJSON($path);

?>
<div class="judul">
    <h2>List Booking Shooting Range Area</h2>
</div>
<div class="konten">
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Pelanggan</th>
                <th>Area</th>
                <th>Waktu</th>
                <th>Senjata di Sewa</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
			$no = 1;
			foreach ($arr_data as $key => $value) {
				echo '
						<tr>
							<td>' . $no . '</td>
							<td>' . $value['nama'] . '</td>
							<td>' . $value['area'] . '</td>
							<td>' . $value['waktu'] . '</td>
							<td>' . $value['pesanan'] . '</td>
							<td>' . $value['jumlah'] . '</td>
							<td>
								' . rupiah($value['subtotal']) . '
							</td>
							<td>
								<a href = "proses/hapus.php?id=' . $value['ID'] . '">
									Hapus
								</a>
							</td>
						</tr>
					';
				$no++;
			}

			?>
        </tbody>
        <tfoot></tfoot>
    </table>
</div>