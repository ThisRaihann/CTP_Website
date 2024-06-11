<?php
    include('koneksi.php');
    global$mysqli;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari formulir
        $name = $_POST['name'];
        $alamat = $_POST['alamat'];
        $nomorhandphone = $_POST['nomorhandphone'];
    
        // Query untuk menyimpan data ke dalam database
        $sql = "INSERT INTO mitra (NamaMitra, AlamatMitra, NomorMitra ) VALUES ('$name', '$alamat', '$nomorhandphone')";
        
        // Jalankan query
        if ($mysqli->query($sql) === TRUE) {
          echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          <strong> Sukses..!</strong> Data Berhasil Tersimpan.
          </div>';
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormMitra</title>
    <link rel="stylesheet" href="formMitra.css">
</head>
<body>
<div class="container">
    <div class="cta-form">
      <h2>Hallo Mitra Baru!</h2> 
    <p>Minat dengan mendaftar menjadi mitra kita? mari isi form ini dan bergabung dengan kami!</p>
    </div>
    <form action="" class="form" method="post">
      
      <input type="text" name="name" placeholder="Name" class="form__input" id="name" />
      <label for="name" class="form__label">Name</label>

      <input type="text" name="alamat" placeholder="Alamat" class="form__input" id="email" />
      <label for="Alamat" class="form__label">Alamat</label>

      <input type="text" name="nomorhandphone" placeholder="Nomor Handphone" class="form__input" id="subject" />
      <label for="subject" class="form__label">Nomor Handphone</label>

      <button type="submit" class="but-login">Submit</button>
      
    </form>
  </div>


  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  
</body>
</html>