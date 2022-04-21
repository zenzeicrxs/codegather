<?php
    include '../config/config.php';

  
    // start menangkap data dari form tambah berita 
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $img = $_FILES['gambar']['name'];
    // end menangkap data dari form tambah berita 
    
    
    $temp = explode(".", $_FILES["gambar"]["name"]);// memisahkan nama dan tipe data gambar
    $img = 'Berita_'.round(microtime(true)) . '.' . end($temp); //memberi nama gambar 
    move_uploaded_file($_FILES["gambar"]["tmp_name"], "images/" . $img); //memindahkan gambar ke folder images
    
    mysqli_query($koneksi, "INSERT INTO berita VALUES('', '$judul', '', '$isi', '$img')"); //perintah memasukan data ke database
    
        // if ($query) 
        //     {
        //         $_SESSION['id_instruktur'] = $query['id_instruktur'];
        //         echo "
        //         <script>
        //             alert('Data Anda Berhasil di Simpan');
        //             document.location.href ='../berkas';
        //         </script>
        //         ";
        //     }
        //         else 
        //         {
        //             echo "
        //             <script>
        //                 alert('Data Anda Gagal di Simpan !');
        //                 document.location.href ='../berkas';
        //             </script>";
        //         }
    ?>               

            