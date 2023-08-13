<!DOCTYPE html>
<html>
<body>
	<div class="container">
		<center>
            <h4  class="display-7 fst-italic"> INVOICE </h4>
        </center>
		<?php
			foreach($tb_transaksi as $t): ?>
		<table class="table table-striped ">
			<thead>
				<tr align=center >
					<th colspan="3">
						<center>
							<h5  class="display-6"> Data Pembeli </h5>
						</center>
					</th>
				</tr>
			</thead>
			<tbody align=left >
                <tr >
					<td>Kode Transaksi</td>
					<td><?= $t['no_transaksi']; ?></td>
				</tr>
                <tr >
					<td>Tanggal</td>
					<td><?= $t['tgl_transaksi']; ?></td>
				</tr>
				<tr >
					<td>Nama Pelanggan</td>
					<td><?= $t['nama']; ?></td>
				</tr>
                <tr>
					<td>Nomor HP</td>
					<td><?= $t['no_hp']; ?></td>
				</tr>
				<tr>
					<td>Kecamatan</td>
					<td><?= $t['kecamatan']; ?></td>
				</tr>
                <tr>
					<td>Kota</td>
					<td><?= $t['kota']; ?></td>
				</tr>
                <tr>
					<td>Alamat</td>
					<td><?= $t['alamat']; ?></td>
				</tr>
			</tbody>
		</table>
		
		<table class="table table-striped ">
			<thead align=center>
				<tr>
					<th colspan="3">
						<center>
							<h5  class="display-6"> Data Keranjang </h5>
						</center>
					</th>
				</tr>
				<!-- <tr>
					<th>Kode Barang</th>
					<th>Kuantitas</th>
					<th>Harga</th>
				</tr> -->
			</thead>
			<tbody>
			<?php
			foreach($tb_jual as $o): ?>
						<tr align=center >
							<td align=left><?= $o['kode_transaksi'] ?></td>
							<th><?= $o['jumlah_jual'] ?></th>
							<td><?= ($o['harga_penjualan']) ?></td>
						</tr>
				<?php 
					endforeach; 
				?>	
						<tr align=center>
							<th colspan="2">TOTAL HARGA</th>
							<th><?= $t['total_transaksi']?></th>
						</tr>
			<?php 
				endforeach;
                session()->destroy();
			?>
			</tbody>
		</table>
		<input type='button' value='Home' class='btn btn-dark' onClick="location.href='/barang'">	
	</div>
</body>
</html>