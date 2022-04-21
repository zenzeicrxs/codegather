<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500&display=swap" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>code gather</title>
  </head>
  <body>

    <!-- Section login -->
    <section class="vh-100" style="background-color: #508bfc;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <h3 class="mb-5">Daftar Admin</h3>
          
              <!--  <select class="form-select" aria-label="Default select example">
                  <option selected>- Pilih Otoritas -</option>
                  <option value="1">Admin</option>
                  <option value="2">Peserta</option>
                  <option value="3">Instruktur</option>
                </select> -->
                <form action="controller/cek_register.php" method="POST">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"></label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username" name="username">
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"></label>
                  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="kata sandi" name="password">
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"></label>
                  <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="Nama lengkap" name="nama">
                </div>

                   <div class="form-check d-flex justify-content-start mb-4">
                  <select class="form-control m-bot15" id="level" name="level">
                    <option>- Pilih Level -</option>
                    <option value="Admin">Admin</option>
                    <option value="Instruktur">Instruktur</option>
                </select>
                </div>

                
                   <div class="form-check d-flex justify-content-start mb-4">
                  <select class="form-control m-bot15" id="level" name="jabatan">
                    <option>- Pilih Jabatan -</option>
                    <option value="Admin">CEO</option>
                    <option value="Human resource">Human resource</option>
                    <option value="Admin code gather">Admin code gather</option>
                </select>
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"></label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="email anda anda" name="email">
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"></label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" name="alamat">
                </div>
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-4">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                  <label class="form-check-label" for="form1Example3"> Ingat saya </label>
                </div>


                <input type="submit" class="btn btn-primary btn-lg btn-block" name="login" value="Daftar">
         
                <hr class="my-4">
                <a href="index.php">Kembali</a>
       </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section login -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!-- code solved tentang navbar toggle tidak muncul v -->
    <!-- CSS -->

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  </body>
</html>