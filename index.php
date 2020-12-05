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
    <link href="css/modal.css" rel="stylesheet" />
    
  </head>

  <body>
    <div class="navbar navbar-dark bg-dark box-shadow" id="rcorners2">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>Small Dermatology</strong>
        </a>
        <img src="images/info.png" class="ico" data-modal-target="modal1" />
      </div>
      
    </div>

    <div class="main-title">
      <div class="main-title-content">Aplikasi Diagnosa Awal Penyakit Kulit Kucing</div>
    </div>

    <div class="text-center d-flex">
      <div class="index-card">
        <a href="diagnosa.php">
          <img src="images/dokter.svg" class="margin-top index-dokter" />
        </a>
          <div class="title-card-item">Diagnosa Penyakit</div>
      </div>
      <div class="index-card">
        <a href="daftar_penyakit.php">
          <img src="images/list.svg" class="margin-top index-list" />
        </a>
        <div class="title-card-item">Daftar Penyakit</div>
      </div>
    </div>

   

      <?php
                include ('koneksi.php');
                if(empty($_GET)){
                  mysqli_query($connect,"DELETE FROM rule_temporary where username='kucing'");
                }
                ?>

<div class="modal" id="modal1"> <!-- This is the background overlay -->
    <div class="modal-content"> <!-- This is the actual modal/popup box -->
      <div class="navbar navbar-dark bg-dark box-shadow" id="rcorners2">
      <span class="modal-close">&times;</span>
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>Info Aplikasi</strong>
        </a>
      </div>
      
    </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quod. Laborum aliquam suscipit itaque corporis.</p>
      <p>Soluta ipsum inventore aspernatur nostrum qui laudantium necessitatibus cupiditate reprehenderit possimus vitae eveniet aperiam, ex, laborum deleniti modi nesciunt iure voluptas! Enim omnis maxime temporibus?</p>
      <p>Excepturi aperiam quam ducimus cum reiciendis possimus, deserunt mollitia ea similique nisi eveniet repellat impedit.</p>
    </div>
  </div>

  </body>
  <script src="js/modal.js"></script>
</html>
