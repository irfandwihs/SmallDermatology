<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
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
    <div class="navbar fixed-top navbar-dark bg-dark box-shadow" id="rcorners2">
      <div class="container d-flex justify-content-between">
        <a href="index.php">
          <img src="images/kembali.svg" class="kembali-custom" />
        </a>
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>Daftar Penyakit</strong>
        </a>
      </div>
    </div>

    <?php
                include ('koneksi.php');          
                    
                    if(isset($_GET['penyakit'])){
                        $gejala=$_GET['penyakit'];
                    }
                    
                    $sql = "SELECT * from tb_proses";
                    $data = mysqli_query($connect,$sql);
                    while ($rows = mysqli_fetch_assoc($data)){
                      $penyakits[] = $rows;
                    } 
                    array_pop($penyakits); 
                    /* var_dump($rows); */   
                ?>
    <?php 
      foreach($penyakits as $row){

        ?>
        <a href="detail_penyakit.php?nama_penyakit=<?php echo $row['nama_penyakit']; ?>">
          <div class="daftar-list">
            <div class="daftar-txt mt-2"><?php echo $row['nama_penyakit']; ?></div>

          </div>
        </a>
         <?php 
              
      }
      
    ?>
    

  </body>
</html>