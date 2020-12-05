<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="images/icon.svg" />

    <title>Small Dermatology</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    
  </head>
  <body>
    <div class="navbar navbar-dark bg-dark boG00shadow" id="rcorners2">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>Diagnosa Penyakit</strong>
        </a>
      </div>
    </div>

    <div class="text-center">
      <div class="card hasil-diagnosa-card">
        <div class="hasil-diagnosa-title">Hasil Diagnosa</div>

        <?php
                include ('koneksi.php');
                if(!empty($_GET)){
                  $gejala_sebelum		= $_GET['gejala_sebelum'];
                  $pilihan = $_GET['pilihan'];
          
                  if($gejala_sebelum && $pilihan){
                    
                    
                    $test = mysqli_query($connect, "INSERT INTO rule_temporary (username, pilihan, jawaban) VALUES ('kucing','$gejala_sebelum','$pilihan')");
                    /* var_dump($gejala_sebelum, $pilihan, $test); */
                    // if (!$test)     
                    // die("Adding record failed: " . mysqli_error($connect)); 
                  }
          
                  if(empty($_GET)){
                    mysqli_query("DELETE FROM rule_temporary where username='kucing'");
                  }
                  
                }
                $gejala='G001';                
                    
                    if(isset($_GET['gejala'])){
                        $gejala=$_GET['gejala'];
                    }
                    
                       
                ?>

        <div class="hasil-diagnosa-result">Gejala yang kucing anda alami adalah</div>
        <?php
                 include ('proses.php');
                 
                 hasil_diagnosa($gejala);

                 
                ?>

        
        <?php
                $sql = "SELECT * from tb_proses WHERE kode_penyakit='$gejala'";
                $data = mysqli_query($connect,$sql);
                $row = mysqli_fetch_assoc($data);

                if ($row['kode_penyakit']=="G001" || $row['kode_penyakit']=="G002" || $row['kode_penyakit']=="G003" || $row['kode_penyakit']=="G004" || $row['kode_penyakit']=="G005") {
                     
                     ?>
                                <?php 
                                include "koneksi.php";
                                $sql = "SELECT * from tb_proses";
                                $data = mysqli_query($connect,$sql);
                                while ($row = mysqli_fetch_assoc($data)) {
                                   if ($row['nama_penyakit']!="G001" && $row['nama_penyakit']!="G002" && $row['nama_penyakit']!="G003" && $row['nama_penyakit']!="G004" && $row['nama_penyakit']!="G005") {
                                    
                                 }
                                }

                                ?>    
                                            
                     <?php 
                }
                
                else{
                    echo "<p class='mrg';> Berdasarkan gejala yang telah Anda pilih, dapat disimpulkan bahwa kucing Anda terjangkit penyakit  : <strong style='color:green'>".$row['nama_penyakit']."</strong></p>";
                    $count_rule_temporary_true = mysqli_query($connect, "SELECT COUNT(*) as count FROM `rule_temporary` WHERE `jawaban` = 'Y'");
                    $selected_sum = (int) $count_rule_temporary_true->fetch_row()[0];

                    if($selected_sum != 0){
                      $nama_penyakit = (string) $row['nama_penyakit'];
                      $query = "SELECT COUNT(*) as count FROM tb_penyakitgejala WHERE kesimpulan_penyakit = '$nama_penyakit'";
  
                      $count_total_gejala_true = mysqli_query($connect, $query);
                      $total_gejala_sum = (int) $count_total_gejala_true->fetch_row()[0];
                      
                      echo "Akurasi : " . 100 * (float) $selected_sum / $total_gejala_sum; echo "%";
                      /* var_dump($selected_sum, $total_gejala_sum); */
                      
                    }
                     
                  }
                  
                ?>  
                <div><strong>N.B : Selebihnya harus dikonsultasikan pada dokter hewan secara langsung.<br></div>
                <div><br></div>
      </div>
      <!-- <h5>N.B : Selebihnya harus dikonsultasikan pada dokter hewan secara langsung.</h5> -->
      <br>
            <div class="text-center d-flex  bottom-grup-btn">
                <a class="btn-hasil b-left" href='diagnosa.php'><p class="text-white mt-3">Diagnosa Lagi</p></a>
                <a class="btn-hasil b-right" href='index.php'><p class="text-white mt-3">Kembali ke Beranda</p></a>
            </div>

    </div>
  </body>
</html>
