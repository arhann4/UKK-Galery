<?php
require '../Model/function.php';
$buku = query("SELECT * FROM buku"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery Foto</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon"  href="img/x.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="navbar navbar-default">
        <nav  id="nav-menu">
            <ul>
                <li><a href="javascript:void(0);" id="scrollToTop">Home</a></li>
                <li><a href="data.php">User</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="login.php">Sign In</a></li>
            </ul>
    </nav>
    </header>   
   <div class="carousel">
        <div class="Text">
            <h1 class="moving-text">WELCOME TO</h1>
            <h1 class="moving-text">GALLERY</h1>
            <h1 class="moving-text">DASHBOARD</h1>
        </div>
   </div>
   <div class="container-fluid container-right">
       
        <div class="vertical-line">

        </div>
        <div class="image-frame animate-image">

            <img src="../img/jpn.jpg" alt="">
        </div>
        <div class="text-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non ante laoreet, sodales enim ac, rutrum nibh. Morbi odio lacus, vehicula sit amet convallis nec, vulputate et nibh. Morbi finibus, orci facilisis semper tristique, augue nisl interdum justo, eget semper diam enim at libero. Duis vehicula accumsan ullamcorper. Phasellus malesuada arcu non leo dapibus, id posuere ex cursus. Proin eu egestas lorem. Nullam ut tempor purus, vel egestas tortor. Morbi id lacus sit amet mauris rutrum viverra ac vitae diam. Ut cursus leo eu dolor condimentum dictum. Pellentesque vitae tortor lectus. Vestibulum dolor elit, euismod quis elementum quis, luctus ut nunc. Sed ac justo ullamcorper, posuere tellus in, eleifend dolor. Vivamus tristique ultrices enim iaculis feugiat. Sed ut leo dui. Donec lobortis varius ipsum, nec facilisis sapien lacinia eu. <b><a class="aside-content" href="#">read more ...</a></b></p>
        </div>
    </div>
    <div class="container-fluid container-left">
       <div class="vertical-line">

       </div>
        <div class="image-frame animate-image">
            <img src="../img/kota.jpg" alt="">
        </div>
        <div class="text-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non ante laoreet, sodales enim ac, rutrum nibh. Morbi odio lacus, vehicula sit amet convallis nec, vulputate et nibh. Morbi finibus, orci facilisis semper tristique, augue nisl interdum justo, eget semper diam enim at libero. Duis vehicula accumsan ullamcorper. Phasellus malesuada arcu non leo dapibus, id posuere ex cursus. Proin eu egestas lorem. Nullam ut tempor purus, vel egestas tortor. Morbi id lacus sit amet mauris rutrum viverra ac vitae diam. Ut cursus leo eu dolor condimentum dictum. Pellentesque vitae tortor lectus. Vestibulum dolor elit, euismod quis elementum quis, luctus ut nunc. Sed ac justo ullamcorper, posuere tellus in, eleifend dolor. Vivamus tristique ultrices enim iaculis feugiat. Sed ut leo dui. Donec lobortis varius ipsum, nec facilisis sapien lacinia eu. <b><a class="aside-content" href="#">read more ...</a></b></p>
        </div>
    </div>
        <hr class="break-page">
      <div class="image-gallery">
        <?php foreach($buku as $row) : ?>
            <div class="image-item">
                <img src="../uploads/<?= $row['gambar'] ?>" alt="Gambar Buku" class="img">
            </div>
        <?php endforeach; ?>
    </div>
     <hr class="break-page">

        <div class="a">

            <div class="b">

                <div class="c" style="background-image: url(../img/borobudur.jpg);">
                    <div class="d">
                        <div class="nama">Yogyakarta</div>
                        <div class="desk">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                        </div>
                        <a href="https://id.wikipedia.org/wiki/Daerah_Istimewa_Yogyakarta">
                            <button>See More</button></a>
                    </div>
                </div>
                <div class="c" style="background-image: url(../img/jak.jpg);">
                    <div class="d">
                        <div class="nama">Jakarta</div>
                        <div class="desk">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                        </div>
                        <a href="https://id.wikipedia.org/wiki/Daerah_Khusus_Ibukota_Jakarta">
                            <button>See More</button></a>
                    </div>
                </div>
                <div class="c" style="background-image: url(../img/indonesia.jpg);">
                    <div class="d">
                        <div class="nama">Bali</div>
                        <div class="desk">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                        </div>
                        <a href="https://id.wikipedia.org/wiki/Bali">
                            <button>See More</button></a>
                    </div>
                </div>
                <div class="c" style="background-image: url(../img/NTT.jpg);">
                    <div class="d">
                        <div class="nama">NTT</div>
                        <div class="desk">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                        </div>
                        <a href="https://id.wikipedia.org/wiki/Nusa_Tenggara_Timur">
                            <button>See More</button></a>
                    </div>
                </div>
                <div class="c" style="background-image: url(../img/PAPUA.jpg);">
                    <div class="d">
                        <div class="nama">Papua</div>
                        <div class="desk">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                        </div>
                        <a href="https://id.wikipedia.org/wiki/Papua">
                            <button>See More</button></a>
                    </div>
                </div>
                <div class="c" style="background-image: url(../img/lombok.jpg);">
                    <div class="d">
                        <div class="nama">Lombok</div>
                        <div class="desk">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                        </div>
                        <a href="https://id.wikipedia.org/wiki/Pulau_Lombok">
                            <button>See More</button></a>
                    </div>
                </div>
                <div class="c" style="background-image: url(../img/jabart.jpg);">
                    <div class="d">
                        <div class="nama">Jawa Barat</div>
                        <div class="desk">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                        </div>
                        <a href="https://id.wikipedia.org/wiki/Jawa_Barat">
                            <button>See More</button></a>
                    </div>
                </div>
                <div class="c" style="background-image: url(../img/jateng.jpg);">
                    <div class="d">
                        <div class="nama">Jawa Tengah</div>
                        <div class="desk">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                        </div>
                        <a href="https://id.wikipedia.org/wiki/Jawa_Tengah">
                            <button>See More</button></a>
                    </div>
                </div>
                <div class="c" style="background-image: url(../img/ijen.jpg);">
                    <div class="d">
                        <div class="nama">Jawa Timur</div>
                        <div class="desk">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                        </div>
                        <a href="https://id.wikipedia.org/wiki/Jawa_Timur">
                            <button>See More</button></a>
                    </div>
                </div>
            </div>
        </div>


</head>
<body>
    

<div class="slider-container">
    <div class="slider-wrapper">
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
    </div>

    <button class="slider-arrow prev">&#8592;</button>
    <button class="slider-arrow next">&#8594;</button>
</div>

    </div>
    <button id="toggle-dark-mode" aria-label="Toggle Dark Mode">
        <i class="fas fa-sun"></i>
        <i class="fas fa-moon"></i>
    </button>

    <script src="../js/dark.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/slide.js"></script>
     
</body>
</html>
