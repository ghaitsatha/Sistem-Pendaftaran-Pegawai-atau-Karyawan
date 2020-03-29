<style>
	label {
		width: 200px;
		cellspacing:20 ;
		display: inline-block;
		color: black;
		font-size: 16px;
		font-weight: bold;
		font-family: BauerBodni BT; 
	}
	fieldset{
		border-radius: 10px;
		background-color:rgba(222,232,243,0.8);
		border:10px solid #fff;
		width :60%; 
		margin:auto; 
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body bgcolor="#f0f0f0">
<fieldset>
	<span><center><img src="images.PNG"></center></span>
	<h1 style="color:black; font-family: BauerBodni BT" align="center">PENDAFTARAN ONLINE PT SUKSES</h1>
	<p style="color:black; font-family: BauerBodni BT" align="center">Jalanin Aja Dulu Siapa Tau Jodoh</p>
	<h1 style="color:black; font-family: BauerBodni BT" align="center">Form Pendaftaran Online</h1>
	<?php 
		echo form_open('formkrywn/proses/tambah');
		echo '<h2 style="font-family:BauerBodni BT;">Data Calon Karyawan</h2>';
		echo "<br>";
		echo form_label('NIK', 'nik');
		echo form_input('nik');
		echo "<br>";
	?><br>
	<script>
		function validate(evt){
			var theEvent = evt || window.event;
			var key = theEvent.keyCode || theEvent.which;
			key = String.fromCharCode(key);
			var regex = /[0-9]|\./;
			if (!regex.test(key)) {
				theEvent.returnValue =false;
				if (theEvent.preventDefault) theEvent.preventDefault();
			}
		}
	</script>
	<?php
		echo form_label('Nama', 'nama');
		echo form_input('nama');
		echo "<br>";
	 ?><br>
	 <?php 
	 	echo form_label('Jenis Kelamin', 'jk');
	 	$selectedLaki="";
	 	$selectedPerempuan="";

	 	if($ra[0]['jenis_kelamin']=="L"){
	 		$selectedLaki="checked";
	 	}
	 	if($ra[0]['jenis_kelamin']=="P"){
	 		$selectedPerempuan="checked";
	 	}
	 	echo "<input type='radio' name='jk' value='L'/>Laki-laki<input type='radio' name='jk' value='P'/>Perempuan";
	 	echo "<br>";
	  ?><br>
	  <?php 
	  	echo form_label('Tempat Lahir', 'TL');
	  	echo form_input('TL');
	  	echo '&nbsp &nbsp &nbsp';
	  	// echo form_label('Provinsi', 'pvs');
	  	// $options = array(
	  	// 		'-Pilih Porvinsi-',
	  	// 		'Jawa Timur' => 'Jawa Timur',
	  	// 		'Jawa Tengah' => 'Jawa Tengah',
	  	// 		'Jawa Barat' => 'Jawa Barat',
	  	// 		'Yogyakarta' => 'Yogyakarta',
	  	// 		'Jakarta' => 'Jakarta',
	  	// 		'Aceh' => 'Aceh',
	  	// 		'Bali' => 'Bali',
	  	// 		'Banten' => 'Banten',
	  	// 		'Bengkulu' => 'Bengkulu',
	  	// 		'Jambi' => 'Jambi',
	  	// 		'Gorontalo' => 'Gorontalo',
	  	// 		'Kalimantan Barat' => 'Kalimantan Barat',
	  	// 		'Kalimantan Selatan' => 'Kalimantan Selatan',
	  	// 		'Kalimantan Tengah' => 'Kalimantan Tengah',
	  	// 		'Kalimantan Timur' => 'Kalimantan Timur',
	  	// 		'Kalimantan Utara' => 'Kalimantan Timur',
	  	// 		'Kepulauan Bangka Belitung' => 'Kepulauan Bangka Belitung',
	  	// 		'Kepulauan Riau' => 'Kepulauan Riau',
	  	// 		'Lampung' => 'Lampung',
	  	// 		'Maluku' => 'Maluku',
	  	// 		'Maluku Utara' => 'Maluku Utara',
	  	// 		'Nusa Tenggara Barat' => 'Nusa Tenggara Barat',
	  	// 		'Nusa Tenggara Timur' => 'Nusa Tenggara Timur',
	  	// 		'Papua' => 'Papua',
	  	// 		'Riau' => 'Riau',
	  	// 		'Sulawesi Barat' => 'Sulawesi Barat',
	  	// 		'Sulawesi Selatan' => 'Sulawesi Selatan',
	  	// 		'Sulawesi Tengah' => 'Sulawesi Tengah',
	  	// 		'Sulawesi Utara' => 'Sulawesi Utara',
	  	// 		'Sulawesi Tenggara' => 'Sulawesi Tenggara',
	  	// 		'Sumatera Barat' => 'Sumatera Barat',
	  	// 		'Sumatera Selatan' => 'Sumatera Selatan',
	  	// 		'Sumatera Utara' => 'Sumatera Utara',
	  	// );
	  	// echo form_dropdown('pvs', $options, '-Pilih Provinsi-');
	  	// echo "<br>";
	   ?><br>
	   <?php 
	   	 echo form_label('Tanggal Lahir', 'tgl');
	   	 echo "<input type='date' name='tgl' class='required'>";
	   	 echo "<br>"; echo "<br>";
	   	 echo form_label('Warga Negara', 'wn');
	   	 $selectedWNA="";
	   	 $selectedWNI="";

	   	 if($ra[0]['warga_negara']=="WNI"){
	   	 	$selectedWNI="checked";
	   	 }
	   	 if($ra[0]['warga_negara']=="WNA"){
	   	 	$selectedWNA="checked";
	   	 }
	   	 echo "<input type='radio' name='wn' value='WNI'/>WNI <input type='radio' name='wn' value='WNA'/>WNA";
	   	 echo "<br>";
	    ?><br>
	    <?php 
	      echo form_label('Agama', 'agm');
	      $options = array(
        	'-Pilih Agama-',
        	'Islam' => $b='Islam',
        	'Katolik' => 'Katolik',
        	'Protestan' => 'Protestan',
        	'Budha' => 'Budha',
        	'Hindu' => 'Hindu',
        	'Lainnya' => 'Lainnya',
	      );
	      echo form_dropdown('agama', $options, '-Pilih Agama');
	      echo "<br>";
	     ?><br>
	     <?php 
	     	echo form_label('Alamat Tempat Tinggal', 'almt');
	     	echo "<br>";
	     	$seting_textarea = array(
	     		'name' => 'alamat',
	     		'id' => 'alamat',
	     		'rows' => '5',
	     		'cols' => '40',
	     	);
	     	echo form_textarea('$seting_textarea');
	     	echo "<br>";
	      ?><br>
	      <?php 
	      echo form_label('Pendidikan Terakhir', 'pndkk');
	      $options = array(
        	'-Pilih-',
        	'SMA' => $b='SMA',
        	'D1' => 'D1',
        	'D2' => 'D2',
        	'D3' => 'D3',
        	'S1' => 'S1',
        	'S2' => 'S2',
	      );
	      echo form_dropdown('pndkk', $options, '-Pilih-');
	      echo "<br>";
	     ?><br>
	     <?php 
	     	echo form_label('No Telp / HP', 'nohp');
	     	echo form_input('nohp');
	     	echo "<br>";
	      ?><br>
	      <?php 
	      	
	      	echo "<br>";
	      	echo form_submit('registrasi', 'Registrasi');
	      	echo '&nbsp';
	      	echo form_reset('reset','Reset');

	      	echo form_close()."\n";
	      	$this->load->helper('url');
	      	echo anchor('/formkrywn/view_krywn',"List Karyawan");
	       ?>
</fieldset>
</body>
</html>