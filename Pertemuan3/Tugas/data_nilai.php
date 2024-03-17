<?php
        include_once 'header.php';
?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>
            <?php
                require_once 'libfungsi.php';

            if (isset($_POST['proses'])) {
                $nama_siswa = $_POST['nama_lengkap'];
                $mata_kuliah = $_POST['matkul'];
                $nilai_uts = $_POST['nilai_uts'];
                $nilai_uas = $_POST['nilai_uas'];
                $nilai_tugas = $_POST['nilai_tugas'];
               
                $total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
                $grade = grade($total_nilai);
                $keterangan = kelulusan($nilai_uts, $nilai_uas, $nilai_tugas);
                
                

                echo "<tr>";
                echo "<td>3.</td>";
                echo "<td>$nama_siswa</td>";
                echo "<td>$mata_kuliah</td>";
                echo "<td>$nilai_uts</td>";
                echo "<td>$nilai_uas</td>";
                echo "<td>$nilai_tugas</td>";
                echo "<td>$total_nilai</td>";
                echo "<td>$grade</td>";
                echo "<td>$keterangan</td>";
                echo "</tr>";
            }
          ?>
      </tbody>
  </table>
</div>
<?php 
        include_once 'footer.php'
?>