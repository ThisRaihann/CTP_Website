<?php
    include('koneksi.php');
    global$mysqli;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query="Select * From akun where email='$email'";
        $result = mysqli_query($mysqli,$query);
        
        if($result->num_rows>0){
            $akun=$result->fetch_assoc();
            if ($password == $akun['Password']){
                $_SESSION['email']=$email;
                $_SESSION['username']= $akun['$username'];
                header("location: beranda.php");    
            }
        }
    }
?>

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
    <div id="bigtext1">Welcome</div>
    <div id="bigtext2">Back!</div>
    </div>
    <div class="smalltext"><div id="t1">Nostalgia memanggil! Login ke CemilanTempoDoeloe </div>
                        <div id="t2">& jelajahi jajanan legendaris Nusantara. Dukung </div>
                        <div id="t3">UMKM lokal & nikmati cita rasa masa kecil </div>
                        <div id="t4">langsung diantar ke rumah!</div></div>
        </div>
        <div class="right-side">
    <div id="logintext">Login</div>
    <form class="login" method="post" action="">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email">
        <label for="Password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <div id="remebmberme-box">
        <input type="checkbox" id="rememberme" name="rememberme">
        <label for="rememberme">Remember Me</label></div>
        <button type="submit" class="but-login">Login</button>
        <div id="lupa-password">
                <a href="ForgotPassword.php">Forgot Password?</a>
        </div>
    </form>
    <footer>
    <div id="footer-text">
        <a href="#">Terms of Service</a>
        <div>|</div>
        <a href="#">Privacy Policy</a>
    </div>
</footer>
    </div>
    </content>

</body>
</html>