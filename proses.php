<?php

function answer($gejala){
    if($gejala=='G001'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G002&gejala_sebelum=G001&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G003&gejala_sebelum=G001&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G002'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G005&gejala_sebelum=G002&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G004&gejala_sebelum=G002&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G003'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G011&gejala_sebelum=G003&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G017&gejala_sebelum=G003&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G004'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G005&gejala_sebelum=G004&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G008&gejala_sebelum=G004&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G005'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G016&gejala_sebelum=G005&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G012&gejala_sebelum=G005&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G006'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P002&gejala_sebelum=G006&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G003&gejala_sebelum=G006&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G007'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P003&gejala_sebelum=G007&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P003&gejala_sebelum=G007&pilihan=T'>Tidak</a>";
    }    
    if($gejala=='G008'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P001&gejala_sebelum=G008&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G006&gejala_sebelum=G008&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G009'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G013&gejala_sebelum=G009&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G007&gejala_sebelum=G009&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G010'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P004&gejala_sebelum=G010&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P004&gejala_sebelum=G010&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G011'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G015&gejala_sebelum=G011&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G010&gejala_sebelum=G011&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G012'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P007&gejala_sebelum=G012&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G014&gejala_sebelum=G012&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G013'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P005&gejala_sebelum=G013&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P005&gejala_sebelum=G013&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G014'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P010&gejala_sebelum=G014&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P010&gejala_sebelum=G014&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G015'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P006&gejala_sebelum=G015&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P006&gejala_sebelum=G015&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G016'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P008&gejala_sebelum=G016&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G009&gejala_sebelum=G016&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G017'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='diagnosa.php?gejala=G018&gejala_sebelum=G017&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P011&gejala_sebelum=G017&pilihan=T'>Tidak</a>";
    }
    if($gejala=='G018'){
        echo "<a style='background-color:#6BCFFF' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P009&gejala_sebelum=G018&pilihan=Y'>Ya</a>";
        echo "<a style='background-color:#FF0000' class='btn col-sm-1 mrg btn-lg btn-outline-light' href='hasil_diagnosa.php?gejala=P009&gejala_sebelum=G018&pilihan=T'>Tidak</a>";
    }
      

}

function hasil_deteksi($nama_penyakit){
    include 'koneksi.php';
    $sql = "SELECT * from tb_penyakitgejala WHERE kesimpulan_penyakit = '$nama_penyakit'";
    $data = mysqli_query($connect, $sql);

    $rule_temporary_query = mysqli_query($connect, "SELECT pilihan FROM `rule_temporary` WHERE `jawaban` = 'Y'");
    while($row = mysqli_fetch_assoc($rule_temporary_query)) {
        $temp_answer_true[] = $row['pilihan'];
    }
    // var_dump($temp_answer_true);
    /* var_dump($data, $connect, $sql);
    die(); */
    /*  */
    while($row = mysqli_fetch_assoc($data)){
        $gejala_kode_string = substr($row['hasil_gejala'], 0, 4);
        if (in_array($gejala_kode_string, $temp_answer_true)) {
            echo '<p class="text-left" style="margin-left : 25px;"> ' .$row['hasil_gejala']. '</p>';
        }
    
    }
    if(empty($gejala_kode_string)){
         echo '<p class="text-left" style="margin-left : 25px;">Tidak ada gejala yang dipilih</p>';
    }

}

function hasil_diagnosa($gejala){
    if($gejala=='P001'){
        $nama_penyakit = "Infeksi Bakteri";
        hasil_deteksi($nama_penyakit);
    }
    if($gejala=='P002'){
        $nama_penyakit = "Infeksi Jamur (Malassezia)";
        hasil_deteksi($nama_penyakit);
    }
    if($gejala=='P003'){
        $nama_penyakit = "Infeksi Jamur (Ringworm)";
        hasil_deteksi($nama_penyakit);
    }
    if($gejala=='P004'){
        $nama_penyakit = "Infeksi Kutu (Scabies)";
        hasil_deteksi($nama_penyakit);
    }
    if($gejala=='P005'){
        $nama_penyakit = "Infeksi Kutu (Demodex)";
        hasil_deteksi($nama_penyakit);
    }
    if($gejala=='P006'){
        $nama_penyakit = "Infeksi Kutu (Otodectes)";
        hasil_deteksi($nama_penyakit);
    }
    if($gejala=='P007'){
        $nama_penyakit = "Infeksi Kutu (Ctenocephalides)";
        hasil_deteksi($nama_penyakit);
    }
    if($gejala=='P008'){
        $nama_penyakit = "Alergi";
        hasil_deteksi($nama_penyakit);
    }
    if($gejala=='P009'){
        $nama_penyakit = "Kekurangan Vitamin";
        hasil_deteksi($nama_penyakit);
    }
    if($gejala=='P010'){
        $nama_penyakit = "Tumor";
        hasil_deteksi($nama_penyakit);
    }
    if($gejala=='P011'){
        $nama_penyakit = "Tidak ditemukan adanya penyakit/Sistem kami belum bisa mendeteksi penyakit tersebut";
        hasil_deteksi($nama_penyakit);
    }
}

?>