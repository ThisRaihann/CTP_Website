<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="kontak.css">
</head>
<body>
<nav class="navbar">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#">
                <img src="Frame 11.png" alt="" class="d-inline-block align-text-top">
            </a>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="beranda.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mitra.php">Mitra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tentang.php">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak</a>
                </li>
                <li class="profile-item">
                   <a href=""> <div class="button-container">
                    <div class="button-background"></div>
                    <div class="icon-container">
                    <img src="person.png" alt="">
                    </div>
                    <div class="button-text">Profil</di>
                    </div></a>
  </li> 
            </ul>
        </div>
</nav>


<div class="container my-5">
    <h2 class="text-center mb-4">Kontak Kami</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Alamat</h5>
                    <p class="card-text">Jl. Raya Rungkut Madya No. 1, Gunung Anyar, Surabaya, Indonesia</p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Telepon</h5>
                    <p class="card-text">+62 123 4567 890</p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Instagram</h5>
                    <p class="card-text"><a href="https://instagram.com/fadika97_" target="_blank">@fadika97_</a></p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Facebook</h5>
                    <p class="card-text"><a href="https://www.facebook.com/bisma.sulungg?mibextid=ZbWKwL" target="_blank">bisma putra</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Lokasi Kami</h5>
                    <div id="map" style="height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function initMap() {
        var lokasi = { lat: -7.334116, lng: 472.789023 };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: lokasi
        });
        var marker = new google.maps.Marker({
            position: lokasi,
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBslKCr_AWvert8aY10PK3s6W8cPaCJwBc&callback=initMap" async defer></script>
</body>
</html>
