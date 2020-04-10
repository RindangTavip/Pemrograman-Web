<html>
<style>
  *{
    font-family: verdana;
  }
</style>

<form action="faktorialwhile.php" method="POST">
  Masukkan Bilangan : <input name="bilangan" type="text" placeholder="0" required style="width: 50px">
  <input name="faktorial" type="submit" value="Hitung">
</form>

<?php
  $bilangan = @$_POST["bilangan"];
  if($bilangan>=1){
    echo "Hasil Faktorial :";
    echo "</br>";
    $i=1;

    while($i <= $bilangan){
      $j=$i;
      $faktorial = 1;

      echo $i. "! = ";      
      while($j > 0){
        if($j == 1){
          echo " 1 = " .$faktorial;
        }
        else{
          echo $j ." x ";
        }
        $j--;
        $faktorial*=$j;
      }
      echo "</br>";
      $i++;
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