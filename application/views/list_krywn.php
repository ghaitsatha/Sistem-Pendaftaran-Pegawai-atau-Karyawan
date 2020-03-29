<table>
	<tr style="border:none">
		<td style="border: none" colspan="4">
			<a href="formkrywn/tambah"><button>Tambah</button></a>
		</td>
	</tr>
	<tr bgcolor="FEE22"><th>NIK</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Tempat Lahir</th>
	<th>Provinsi</th>
	<th>Tanggal Lahir</th>
	<th>Warga Negara</th>
	<th>Agama</th>
	<th>Alamat</th>
	<th>Pendidikan</th>
	<th>No Telp</th>
	<th>ACTON</th>
	</tr>
	<?php 
		$this->load->model("Formkrywn_model","formkrywn_model");
		$result = $this->formkrywn_model->get_all_karyawan();
		$x=$result->result_array();
		foreach ($x as $row) {
			# code...
			echo "<tr>
			<td>$row[nik]</td>
			<td>$row[nama]</td>
			<td>$row[jenis_kelamin]</td>
			<td>$row[tempat_lahir]</td>
			<td>$row[provinsi]</td>
			<td>$row[tanggal_lahir]</td>
			<td>$row[warga_negara]</td>
			<td>$row[agama]</td>
			<td>$row[alamat]</td>
			<td>$row[pendidikan]</td>
			<td>$row[no_telp]</td>
			<td><a href='update/$row[nik]'>Update | <a href='proses/hapus/$row[nik]'>Hapus</a></td>
			</tr>
			";

		}
	 ?>
</table>