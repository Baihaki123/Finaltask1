    <form action="" method="POST">
      PROGRAM CEK NILAI<br>
      Nilai : <input type="number" name="nilai">
      <input type="submit" value="Hasil">
    </form>
    <?php
      if ($_POST)
      {
        $nilai = $_POST['nilai'];
        if (($nilai >= 90) AND ($nilai < 101))
        {
          $grade = "A";
          $keterangan = "TERPUJI";
        }
        elseif (($nilai >= 80) AND ($nilai < 90))
        {
          $grade = "B";
          $keterangan = "SANGAT MEMUASKAN";
        }
        elseif (($nilai >= 60) AND ($nilai < 80))
        {
          $grade = "C";
          $keterangan = "MEMUASKAN";
        }
        elseif (($nilai >= 0) AND ($nilai < 60))
        {
          $grade = "D";
          $keterangan = "TIDAK LULUS";
        }
        else
        {
          $grade = "E";
          $keterangan = "TIDAK VALID";
        }
        
        echo "Hasil Kelulusan";
        echo "<br>";
        echo "Nilai : " . $nilai;
        echo "<br>";
        echo "Keterangan : " . $keterangan;
        echo "<br>";
        echo "Indeks Prestasi : " . $grade;
      }
    ?>









 
