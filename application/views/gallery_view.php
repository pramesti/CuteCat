<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/style.css')?>">
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">
</head>
<body>
<nav>
    <a class="navbar-brand" href="<?= base_url() ?>"> <img src="<?= base_url('assets/images/cat.png')?>" alt="" width="50"/> <span> Cute.Cat </span>  </a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav" href="<?= base_url('Home/Gallery')?>">Gallery</a>
    </li>
    <li class="nav-item dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#one">Profil</a>
        <div  class="dropdown-divider"></div>
        <a class="dropdown-item" href='<?php echo base_url(); ?>index.php/Login/logoutUser'>Logout</a>
      </div>
    </li>
  </ul>
</nav>
<div class="container">
    <h1 class="text-center text-title">Jenis Kucing</h1>
    <div class="gallery">
        <div class="row">
            <div class="col-6">
                <h2>Kucing Bengal</h2>
                <p class="penjelasan">
                Kucing bengal Asli atau biasa disebut dengan Blacan merupakan ke-3 dari hasil persilangan antara kucing American Shorthair dengan kucing Asian Leopard. Kucing jenis ini berasal dari California, Amerika Serikat. Walaupun tergolong kucing hutan, tetapi ras bengal termasuk hewan yang cukup banyak digemari serta dijadikan hewan peliharaan. Kucing ini mempunyai ukuran badan yang panjang dengan otot yang kuat pada tubuhnya. Ia memiliki tulang yang cukup besar dan tebal, disertai bulu yang tebal, rapat dan halus.
                </p>
            </div>
            <div class="col-6">
                <img class="img-gallery" src="<?= base_url('assets/images/bengal-cat.jpg')?>" alt="" width="550">
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
                <img class="img-gallery" src="<?= base_url('assets/images/devon-rex.jpg')?>" alt="" width="550">

            </div>
            <div class="col-6">
            <h2>Kucing Devon Rex</h2>
                <p class="penjelasan">
                Rex selkirk adalah salah satu ras kucing yang berasal dari Montana, Amerika Serikat. Rex selkirk merupakan kucing yang berbeda dari semua kucing jenis Rex lainnya. Kucing ras ini terbentuk karena mutasi genetik yang alami. Kucing jenis memiliki tubuh yang besar dan kokoh menyerupai kucing bulu pendek britania raya.
            </p>                
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
            <h2>Kucing Exotic Shorthair</h2>
                <p class="penjelasan">
                Kucing persia exotic shorthair merupakan jenis kucing yang dikembangkan untuk menjadi seekor kucing persia versi bulu yang pendek (Shorthair). Exotic Shorthair sangat mirip sekali dengan Kucing Persia, termasuk dalam temperamen serta fisiknya, terkecuali bulunya yang pendek.
                </p>   
            </div>
            <div class="col-6">
                <img class="img-gallery" src="<?= base_url('assets/images/exotic-shorthair.jpg')?>" alt="" width="550">
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
                <img class="img-gallery" src="<?= base_url('assets/images/himalayan.jpg')?>" alt="" width="550">

            </div>
            <div class="col-6">
                <h2>Kucing Himalaya</h2>
                <p class="penjelasan">
                Himalaya adalah kucing yang bertubuh gemuk, besar, dan bulat dengan kaki yang pendek seperti Persia. Hal tersebut membuat Himalaya sulit untuk melompat. Namun, ras Himalaya juga ada yang memiliki tubuh seperti Siamese, yaitu tubuh yang langsing, ramping, dan anggun. Sehingga, Himalaya yang memiliki tubuh seperti Siamese dapat dengan mudah melompat dengan ketinggian 2 meter. Himalaya dibagi menjadi 2 jenis berdasarkan bentuk wajahnya, yaitu Himalayan Doll Face dan Himalayan Ultra-Face.
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
            <h2>Kucing Persia</h2>
            <p class="penjelasan">
            Kucing persia adalah ras kucing domestik berbulu panjang dengan karakter wajah bulat dan moncong pendek. Namanya mengacu pada Persia, nama lama Iran, di mana kucing serupa ditemukan. Sejak akhir abad 19, kucing jenis ini dikembangkan di Britania Raya dan Amerika Serikat usai Perang Dunia II. Di Britania Raya, ras ini disebut kucing bulu panjang persia, dibagi dalam dua jenis, yaitu chinchilla dengan warna perak cerah dan yang agak gelap.
            </p>
            </div>
            <div class="col-6">
                <img class="img-gallery" src="<?= base_url('assets/images/persia.jpg')?>" alt="" width="550">
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
                <img class="img-gallery" src="<?= base_url('assets/images/russian-blue.jpg')?>" alt="" width="550">

            </div>
            <div class="col-6">
                <h2>Kucing Russian Blue</h2>
                <p class="penjelasan">
                Kucing biru rusia (bahasa Inggris: Russian Blue cat) adalah salah satu ras kucing yang memiliki bulu berwarna perak biru. Kucing ini sangat cerdas dan lucu, tetapi cenderung pemalu di sekitar orang asing. Kucing biru rusia merupakan kucing yang memiliki ikatan yang erat dengan sahabatnya manusia. Kucing biru rusia sering dicari karena memiliki kepribadian dan warna bulu yang disukai orang-orang. Beberapa Kucing biru rusia memiliki kupalan kecil pada bulu di bagian atas kedua matanya yang miring sedikit ke bawah untuk memberikan perasaan bahwa Kucing biru rusia terlihat kesal.
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
                <h2>Kucing Savannah</h2>
                <p class="penjelasan">
                Savannah adalah salah satu ras kucing hibrida yang merupakan hasil persilangan dari kucing liar Serval dari Afrika dengan kucing domestik ras Siamese, Bengal, dan Egyptian Mau. Savannah telah dinobatkan oleh Guinness World Records sebagai ras kucing terpanjang di dunia, dengan panjang 17,1 inci atau sekitar 44 cm. Savannah adalah kucing terpopuler di Amerika Serikat. Harga ras ini termasuk sangat mahal sekali, yaitu dapat mencapai sekitar $4.000-$35.000 atau sekitar 126-343 juta rupiah. Namun, harga jual ras ini di Indonesia hanya sekitar 35 juta rupiah saja.
                </p>
            </div>
            <div class="col-6">
                <img class="img-gallery" src="<?= base_url('assets/images/Savannah.jpg')?>" alt="" width="550">
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
                <img class="img-gallery" src="<?= base_url('assets/images/singapura.jpg')?>" alt="" width="550">

            </div>
            <div class="col-6">
                <h2>Kucing Singapura</h2>
                <p class="penjelasan">
                Singapura adalah salah satu ras kucing terkecil, dan terkenal karena mata dan telinga yang besar, bulu berwarna cokelat bintik-bintik dan ekor tumpul. Dilaporkan bahwa ada tiga ekor "kucing tiriskan" yang diimpor dari Singapura pada tahun 1970. Kemudian, hal itu telah terungkapkan bahwa, kucing ini awalnya dikirim ke Singapura dari Amerika Serikat sebelum kucing ini diekspor kembali ke Amerika Serikat. Penyelidikan yang dilakukan oleh Cat Fanciers' Association (CFA) telah menyimpulkan bahwa, Singapura adalah ras kucing yang alami.
                </p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
            <h2>Kucing Sphynx</h2>
            <p class="penjelasan">
            Kucing sphynx (dahulu bernama Canadian hairless) adalah salah satu ras kucing yang memiliki bulu sangat pendek dan sedikit sekali. Jika dilihat sekilas, kucing sphynx tampak tidak memiliki bulu sama sekali, namun jika diamati lebih saksama tubuh kucing ini ditumbuhi rambut halus di beberapa bagian, seperti telinga, kaki, ekor, dan didekat organ kelamin. Kucing sphynx berasal dari Kanada. Namun, penyebarannya dapat ditemukan di beberapa tempat seperti Kanada, Perancis, Maroko, Meksiko, Rusia, Australia dan Amerika Serikat. Kucing ras sphynx merupakan salah satu jenis kucing hasil rekayasa genetik. Di Indonesia, kucing impor yang unik ini memiliki harga tergolong mahal, yaitu dapat mencapai 25 juta rupiah.
            </p>
            </div>
            <div class="col-6">
                <img class="img-gallery" src="<?= base_url('assets/images/sphynx.jpg')?>" alt="" width="550">
                
            </div>
        </div>
        
    </div>
</div>
<div>
    <h1 class="text-center text-title">Gambar</h1>
    <div class="wrapper-gallery">
        <img class="img-gallery" src="<?= base_url('assets/images/1.jpg')?>" alt="" width="550">
        <img class="img-gallery" src="<?= base_url('assets/images/2.jpg')?>" alt="" width="550">
        <img class="img-gallery" src="<?= base_url('assets/images/3.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/4.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/5.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/6.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/7.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/8.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/9.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/10.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/11.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/12.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/13.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/14.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/15.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/16.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/17.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/18.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/19.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/20.jpg')?>" alt="" width="550">
    <img class="img-gallery" src="<?= base_url('assets/images/21.jpg')?>" alt="" width="550">
</div>
</div>
</body>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</html>