<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CemilanTempoDoeloe</title>
    <link rel="stylesheet" href="firstpage.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li class="nav-item"><a href="Regristrasi.php" onmouseover="this.style.color='#6b6b6b'" onmouseout="this.style.color='white'" style="color: white; text-decoration: none; ">Register</a></li>
                <li class="nav-item"> | </li>
                <li class="nav-item"><a href="LoginPage.php" class="Login">Login</a></li>
            </ul>               
        </nav>
    </header>
    <content>
        <div id="isi">
        <div id="TeksBig">Temukan Jajanan Impianmu!</div>
        <div id="TeksSmall">CemilanTempoDoeloe, Solusi Tepat untuk Ngidam Jajanan Tradisional.</div>
        <div id="search-container">
            <input type="text" name="Cari" placeholder="Cari">
            <button id="search-button" type="submit" onclick="searchFunction()">
      <img src="search.png" alt="Search">
    </button>
        </div>
    </content>

    <script>
    window.addEventListener('load', function() {
        var searchInput = document.getElementById('search-input');
        var searchIcon = document.getElementById('search-icon');
        var searchContainer = document.getElementById('search-container');
        searchInput.style.width = (searchContainer.offsetWidth - searchIcon.offsetWidth) + 'px';
        function searchFunction() {
        var searchTerm = document.getElementById('search-input').value;
        console.log('Searching for:', searchTerm);
        }

    });
</script>
</body>
</html>