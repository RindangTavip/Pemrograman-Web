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

    do{
      $j=$i;
      $faktorial = 1;

      echo $i. "! = ";      
      do{
        if($j == 1){
          echo " 1 = " .$faktorial;
        }
        else{
          echo $j ." x ";
        }
        $j--;
        $faktorial*=$j;
      }while($j > 0);
      echo "</br>";
      $i++;
    }while($i <= $bilangan);
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