<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
</head>

<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>

	<form action="kalkulator.php" method="POST">
	     <label>Bilangan 1 :</label>
	     <input type="number" name="bil1">
	     <br>
	     <br>
	     <label>Bilangan 2 :</label>
	     <input type="number" name="bil2">
	     <br>
	     <br>
	     <label>Hasil</label>
	     <label style="margin-left: 37px">:</label>
	     	<?php if(isset($_POST['hitung'])){ ?>
				<input type="text" value="<?php echo $hasil; ?>" class="bil" disabled>
			<?php }else{ ?>
				<input type="text" value="" class="bil" disabled>
			<?php } ?>
	     <br>
	     <br>
	     <label style="margin-left: 15px">Operator :</label>
	     <select multiple class="opt" name="operasi">
			<option value="tambah">+(tambah)</option>
			<option value="kurang">-(kurang)</option>
			<option value="kali">x(kali)</option>
			<option value="bagi">/(bagi)</option>
		</select>
	    <input type="submit" name="hitung" value="=">
	</form>
</body>
</html>