<?php
    include('koneksi.php');
    global$mysqli;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari formulir
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['ConfirmPassword'];
        $nomorhandphone=$_POST['nomorhandphone'];
    
        // Query untuk menyimpan data ke dalam database
        $sql = "INSERT INTO akun (username, email, password, NomerHandphone ) VALUES ('$username', '$email', '$password', '$nomorhandphone')";
        
        // Jalankan query
        if ($mysqli->query($sql) === TRUE) {
            echo "Data berhasil disimpan";
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
    <title> Regristasi </title>
    <link rel="stylesheet" href="Regristrasi.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <content>
        <div class="sidetext">
            <div class="bigtext">
    <div id="bigtext1">Hello,</div>
    <div id="bigtext2">Welcome!</div>
    </div>
    <div class="smalltext"><div id="t1">Selamat Datang! Nikmati cita rasa Nusantara</div>
                        <div id="t2">UMKM lokal. Daftar di CemilanTempoDoeloe</div>
                        <div id="t3">& jelajahi jajanan legendaris langsung </div>
                        <div id="t4">diantar ke rumahmu!</div></div>
        </div>
        <div class="right-side">
    <div id="Regristasitext">Registrasi</div>
    <form action="" method="post" class="Regristasi">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="username">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email">
        <label for="Password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <label for="ConfirmPassword">Confirm Password</label>
        <input type="password" name="ConfirmPassword" placeholder="Confirm Password">
        <label for="nomorhandphone">Nomor Handphone</label>
        <input type="number" name="nomorhandphone" placeholder="Nomor Handphone">
        <button type="submit" name="submit" class="but-Regristasi">Registrasi</button>
    </form>
    </div>
    </content>

</body>
</html>
</body>
</html>