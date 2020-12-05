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
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/custom.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="navbar navbar-dark bg-dark box-shadow" id="rcorners2">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>Diagnosa Penyakit</strong>
        </a>
      </div>
    </div>

    <div class="text-center">
      <div class="card sasori-card">
        <div class="sasori-title">Pilih Gejala Penyakit</div>

        <?php
                include ('koneksi.php');
                $gejala='G001';                
                    
                    if(isset($_GET['gejala'])){
                        $gejala=$_GET['gejala'];
                    }
                    
                    $sql = "SELECT * from tb_gejala WHERE id_gejala='$gejala'";
                    $data = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($data);     
                ?>

        <div class="sasori-questions">Apakah kucing anda mengalami </div>
        <div><br><?php echo $row['nama_gejala']; ?> ?</div>
        <br>
      </div>
    </div>

    <div class="option d-flex">
          <?php 
                include "proses.php";
                answer($gejala);
                
                
      include "koneksi.php";
      // var_dump($_GET);
      if(!empty($_GET)){
        $gejala_sebelum		= $_GET['gejala_sebelum'];
        $pilihan = $_GET['pilihan'];

        if($gejala_sebelum && $pilihan){
          
          
          $test = mysqli_query($connect, "INSERT INTO rule_temporary (username, pilihan, jawaban) VALUES ('kucing','$gejala_sebelum','$pilihan')");
          /* var_dump($gejala_sebelum, $pilihan, $test); */
          // if (!$test)     
          // die("Adding record failed: " . mysqli_error($connect)); 
        }

        
        
      }
      if(empty($_GET)){
        mysqli_query($connect,"DELETE FROM rule_temporary where username='kucing'");
      }
          ?>
                    
                   
                    
    </div>

  
  </body>
</html>
