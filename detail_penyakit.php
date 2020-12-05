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
        <a href="daftar_penyakit.php">
          <img src="images/kembali.svg" class="kembali-custom" />
        </a>
        <a href="#" class="navbar-brand d-flex align-items-left">
          <strong>Detail Penyakit</strong>
        </a>
      </div>
    </div>

    <div class="text-center">
      <div class="card hasil-diagnosa-card">
        <div class="hasil-diagnosa-title"><?php echo 'Penyakit : ' . htmlspecialchars($_GET["nama_penyakit"]); ?></div>
      <br>
      
    <?php
                include ('koneksi.php');          
                    
                $kode_penyakit = $_GET["nama_penyakit"];


                    if(isset($_GET['penyakit'])){
                        $gejala=$_GET['penyakit'];
                    }
                    
                    $sql = "SELECT * from tb_proses where nama_penyakit='$kode_penyakit'";
                    $data = mysqli_query($connect,$sql);
                    $penyakit = mysqli_fetch_assoc($data);
                    /* var_dump($sql); */
                    /* while ($rows = mysqli_fetch_assoc($data)){
                      $penyakits[] = $rows;
                    }  
                    array_pop($penyakits); */
                    /* var_dump($rows); */   
                
  ?>

      <div class="detail-text"><?php echo 'Deskripsi : ' . $penyakit['deskripsi']; ?></div>
      <br><br>
      <div class="detail-text"><?php echo 'Penanganan : ' .$penyakit['penanganan']; ?></div>
      <br>      
    
           
    </div>

    <!-- <div class="text-center d-flex  bottom-grup-btn">
                <a class="btn-hasil b-left" href='diagnosa.php'><p class="text-white mt-3">Diagnosa Lagi</p></a>
                <a class="btn-hasil b-right" href='index.php'><p class="text-white mt-3">Kembali ke Beranda</p></a>
    </div> -->
  </body>
</html>
