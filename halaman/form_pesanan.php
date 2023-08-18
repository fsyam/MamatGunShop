<?php
	$arr_senjata = ['Revolver Rev C O P', 'Senapan Serbu M16', 'Pistol Glock', 'Senapan SKS'];

	sort($arr_senjata);
?>

<div class="judul">
<h2>Form Booking Shooting Area</h2>
</div>

	<form method="GET" action="proses/proses_form.php">
		<table>
			<tr>
				<td>
					Nama
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>
					Area Number
				</td>
				<td>
					:
				</td>
				<td>
                    <?php
                        for ($i = 1; $i <= 5; $i++){
                            echo '
                            <input type ="radio" name="area" value="'.$i.'"> Area 0'.$i;                            
                        }
                    ?>
					
				</td>
			</tr>
			<tr>
				<td>
					Pilih Senjata
				</td>
				<td>
					:
				</td>
				<td>
					<select name="senjata">

						<?php 
							foreach($arr_senjata as $key => $value){
								echo '
								<option value="'.$value.'">
									'.$value.'
								</option>
								';
							}
						?>
				
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Jumlah Pesanan
				</td>
				<td>
					:
				</td>
				<td>
					<input type="number" id="jumlah" name="jumlah" onchange="return validasi_jumlah()">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" name="submit" value="Pesan Sekarang">
					<input type="reset" name="reset" value="Reset Inputan">
				</td>
			</tr>
		</table>
        
	</form>