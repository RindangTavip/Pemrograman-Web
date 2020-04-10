<html>
<style>
	*{
		font-family: verdana;
	}
</style>

<form action="faktorialfor.php" method="POST">
  Masukkan Bilangan : <input name="bilangan" type="text" placeholder="0" required style="width: 50px">
  <input name="faktorial" type="submit" value="Hitung">
</form>

<?php
  $bilangan = @$_POST["bilangan"];
  if($bilangan>=1){
    echo "Hasil Faktorial :";
    echo "</br>";
           
    for($i=1; $i <= $bilangan; $i++){
      $faktorial = 1;

      echo $i. "! = ";     
      for($j=$i; $j > 0; $j--){
        if($j == 1){
          echo " 1 = " .$faktorial;
        }
        else{
          echo $j ." x ";
        }
        $faktorial*=$j;
      }
      echo "</br>";
    }
  }

  else if($bilangan == 0){
    echo "Hasil Faktorial :";
    echo "</br>";
    echo "0! = 1";
  }

  else{
    echo "Anda salah memasukkan bilangan.";
  }
?>
</html>