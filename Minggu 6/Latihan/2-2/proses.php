<!DOCTYPE html>
<head>
    <title>Output</title>
</head>

<style>
    .output{
        width: 800px;
        border-collapse: collapse;
    }
    .output th{
        background-color: black;
        color: white;
        border: 1px solid black;
    }
    .output td{
        background-color: #CCCCCC;
        text-align: center;
        border: 1px solid;
    }
</style>

<body>
    <?php
    if (isset($_POST['kirim'])) {
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        switch ($prodi) {
            case "A11.":
                $prodi2 = "Teknik Informatika S1";
                break;
            case "A22.":
                $prodi2 = "Teknik Informatika D3";
                break;
            case "A12.":
                $prodi2 = "Sistem Informasi S1";
                break;
            default:
                $prodi2 = "NULL";
        }

        $nilai_akhir = (0.4 * $nilai_tugas) + (0.3 * $nilai_uts) + (0.3 * $nilai_uas);

        if ($nilai_akhir > 84) {
            $statusnilai = 'A';
        } elseif ($nilai_akhir > 70) {
            $statusnilai = 'B';
        } elseif ($nilai_akhir > 60) {
            $statusnilai = 'C';
        } elseif ($nilai_akhir > 50) {
            $statusnilai = 'D';
        } else {
            $statusnilai = 'E';
        }

        if ($nilai_akhir > 84) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 70) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 60) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 50) {
            $status = 'Tidak Lulus';
        } else {
            $status = 'Tidak Lulus';
        }

        $data_catatan=$_POST ['catatan'];
        $selected_catatan=array();
        foreach($data_catatan as $catatan){
            array_push($selected_catatan, $catatan);
        }
    ?>

    <table class = 'output'>
        <tr>
            <th>Program Studi</th>
            <th>NIM</th>
            <th>Nilai Akhir</th>
            <th>Status</th>
            <th>Catatan Khusus</th>
        </tr>
        <tr>
            <td align="center"><?php echo$prodi2;?></td>
            <td align="center"><?php echo$nim;?></td>
            <td align="center"><?php echo$statusnilai; ?></td>
            <td align="center"><?php echo$status;?></td>
            <td align="center"><?php
                foreach($selected_catatan as $catatan){ 
                echo$catatan ."<br>";
            }?>
            </td>
        </tr>
    </table>
    <?php
    }
    ?>
</body>

</html>