<style>
	th{
		font-family: BauerBodni BT;
		background-color: rgbs(222,232,243,0,0);
	}
	td{
		font-family: BauerBodni BT;
	}
	body{
		background-color: rgbs(222,232,243,0,0);
	}
</style>
<body>
</body>
<h1 align="center" style="font-family: BauerBodni BT";>Informasi Data Diri</h1>
<table class="style-table" cellpadding="3" cellspacing="0">
	<thead>
		<tr>
			<td width="1400" height="25" bgcolor="#ddd"><h2 style="font-family: BauerBodni BT";>Data Calon Karyawan</h2></td>
		</tr>
	</thead>
</table>
<table border="2" align="center">
	<tr>
		<th width="100" height="60">Nik</th>
		<th width="450" height="60">Nama</th>
		<th width="80" height="60">Jenis Kelamin</th>
		<th width="100" height="60">Tempat Lahir, Provinsi</th>
		<th width="80" height="60">Tanggal Lahir</th>
		<th width="80" height="60">Warga Negara</th>
		<th width="80" height="60">Agama</th>
		<th width="80" height="60">Alamat</th>
		<th width="80" height="60">Pendidikan Terakhir</th>
		<th width="80" height="60">No Telp / Hp</th>
	</tr>
	<?php 
		$nik = $this->input->post('nik',true);
		$nama = $this->input->post('nama',true);
		$jk = $this->input->post('jk',true);
		$TL = $this->input->post('TL',true);
		$pvs = $this->input->post('pvs',true);
		$tgl = $this->input->post('tgl',true);
		$wn = $this->input->post('wn',true);
		$agm = $this->input->post('agm',true);
		$almt = $this->input->post('almt',true);
		$pndkk = $this->input->post('pndkk',true);
		$nohp = $this->input->post('nohp',true);
		echo "<tr>
			<td align=center width=80 bgcolor=#eee>$nik</td>
			<td align=center width=100 bgcolor=#eee>$nama</td>
			<td align=center width=500 bgcolor=#eee>$jk</td>
			<td align=center width=100 bgcolor=#eee>$TL, $pvs</td>
			<td align=center width=80 bgcolor=#eee>$tgl</td>
			<td align=center width=80 bgcolor=#eee>$wn</td>
			<td align=center width=80 bgcolor=#eee>$agm</td>
			<td align=center width=80 bgcolor=#eee>$almt</td>
			<td align=center width=80 bgcolor=#eee>$pndkk</td>
			<td align=center width=80 bgcolor=#eee>$nohp</td>
		</tr>";
	 ?>
</table>