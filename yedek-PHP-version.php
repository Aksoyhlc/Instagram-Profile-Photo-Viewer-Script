<?php 
$sitelink="https://insta.aksoyhlc.net/";

if (isset($_GET['username'])) {
 $username=$_GET['username'];
 $url="http://instagram.com/$username";
 $veri=@file_get_contents($url);

 if (empty($veri)) {
  $sonuc=false;
} else {
  $sonuc=true;
}

if ($sonuc) {
  $veri=explode("window._sharedData = ",$veri)[1];
  $veri=explode(";</script>",$veri)[0];
  $kullanicibilgileri=json_decode($veri,true)['entry_data']['ProfilePage']['0']['graphql']['user'];
}
} else {
  $sonuc=false;
}
?>

<!doctype html>
<html lang="tr">
<head>
  <!-- Required  cmeta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/png" href="Aksoyhlc.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css">

  <meta name="title" content="Aksoyhlc Instagram Profil Resmi Büyültme">
  <meta name="description" content="Aksoyhlc Instagram Profil Resmi Büyültme">
  <meta name="keywords" content="Aksoyhlc Instagram Profil Resmi Büyültme">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Turkish">
  <meta name="revisit-after" content="1 days">
  <meta name="author" content="Aksoyhlc | Ökkeş AKSOY">
  <title>Aksoyhlc Instagram Profil Resmi Büyültme</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-2">
      <div class="col-md-7 text-center">
       <a href="index.php"> <button type="button" class="btn btn-primary">Ana Sayfa</button></a>
       <a href="hakkimizda.php"> <button type="button" class="btn btn-info">Hakkımızda</button></a>
     </div>
   </div>
 </div>
 <div class="container-fluid">
  <div class="row justify-content-center mt-3">


    <!-- SOL KENAR REKLAM ALANI GİRİŞ -->

    <div class="col-md-3">
      <div class="container">
        <div class="row mt-3">
          <div class="col-md-12 justify-content-center text-center">
            <!--  ALTTAKİ KODU SİLİP REKLAM KODUNUZU EKLEYİN -->
            <img srcx="https://picsum.photos/170/720" alt="">
            <!--  ÜSTTEKİ KODU SİLİP REKLAM KODUNUZU EKLEYİN -->
          </div>
        </div>
      </div>
    </div>

    <!-- SOL KENAR REKLAM ALANI ÇIKIŞ -->

    <div class="col-md-6 justify-content-center text-center">
      <div class="sorgu-kart shadow-lg">
        <form>
          <div class="form-row">
            <div class="col-md-12 form-group text-center">
              <img class="sorgu-logo" src="Aksoyhlc.png" alt="">
            </div>
          </div>
          <div class="form-row justify-content-center">
            <div class="col-md-8 form-group">
              <input required="" type="text" name="username" value="<?php echo @$_GET['username'] ?>" placeholder="Kullanıcı Adını Girin" class="form-control" autocomplete="off" id="username_input">
            </div>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-primary" id="gosterbutton">Göster</button> <br><br>
            <span class="text-white text-muted">Bu Sistem Aksoyhlc Tarafından Hazırlanmıştır</span>
          </div>
        </form>
      </div>
      
      <!-- REKLAM ALANI GİRİŞ -->

      <div class="container">
        <div class="row mt-3">
          <div class="col-md-12 justify-content-center text-center">
           <!--  ALTTAKİ KODU SİLİP REKLAM KODUNUZU EKLEYİN -->
           <img srcx="https://picsum.photos/720/90" alt="" class="img-fluid">
           <!--  ÜSTTEKİ KODU SİLİP REKLAM KODUNUZU EKLEYİN -->
         </div>
       </div>
     </div>

     <!-- REKLAM ALANI ÇIKIŞ -->

     <div class="row justify-content-center text-center mt-4">
      <?php if (isset($_GET['username'])): ?>
        <?php if ($sonuc): ?>
         <div class="alert alert-danger">
          <b>Kullanıcın İsmi: </b><span><?php echo $kullanicibilgileri["full_name"] ?></span><br>
          <b>Takipçi Sayısı: </b><span><?php echo number_format($kullanicibilgileri['edge_followed_by']['count']) ?></span><br>
          <b>Takip Ettiği Kişi Sayısı: </b><span><?php echo $kullanicibilgileri['edge_follow']['count'] ?></span><br>
          <b>Biyografi: </b><span><?php echo $kullanicibilgileri['biography'] ?></span><br>
        </div>
        <?php else: ?>
         <div class="alert alert-danger" id="islem_basarisiz">
          <span style="font-size: 1.6rem">Kullanıcı Bulunamadı</span>
        </div>
      <?php endif ?>
    <?php endif ?>
  </div>



  <?php if (isset($_GET['username'])): ?>


    <!-- REKLAM ALANI GİRİŞ -->

    <div class="container">
      <div class="row mt-3">
        <div class="col-md-12 justify-content-center text-center">
         <!--  ALTTAKİ KODU SİLİP REKLAM KODUNUZU EKLEYİN -->
         <img srcx="https://picsum.photos/720/90" alt="" class="img-fluid">
         <!--  ÜSTTEKİ KODU SİLİP REKLAM KODUNUZU EKLEYİN -->
       </div>
     </div>
   </div>

   <!-- REKLAM ALANI ÇIKIŞ -->

   <?php if ($sonuc): ?>    
    <div class="row justify-content-center mb-2 mt-3">
      <div class="col-md-6 text-center">       
        <div class="resim-alani ">
         <a target="_blank" href="<?php echo $kullanicibilgileri['profile_pic_url_hd'] ?>"><img class="resim-sonuc" src="<?php echo $kullanicibilgileri['profile_pic_url'] ?>" alt=""></a>
       </div>    
       <div class="text-center mt-3">
         <a target="_blank" href="<?php echo $kullanicibilgileri['profile_pic_url_hd'] ?>"><button type="button" class="btn btn-danger">Resmi Büyült</button></a>
       </div>   
     </div>
   </div>

 <?php endif ?>


 <!-- REKLAM ALANI GİRİŞ -->
 <div class="container mb-5">
  <div class="row mt-3">
    <div class="col-md-12 justify-content-center text-center">
     <!--  ALTTAKİ KODU SİLİP REKLAM KODUNUZU EKLEYİN -->
     <img srcx="https://picsum.photos/720/90" alt="" class="img-fluid">
     <!--  ÜSTTEKİ KODU SİLİP REKLAM KODUNUZU EKLEYİN -->
   </div>
 </div>
</div>
<!-- REKLAM ALANI ÇIKIŞ -->



<?php endif ?>

</div>


<!-- SAĞ KENAR REKLAM ALANI GİRİŞ -->
<div class="col-md-3">
  <div class="container">
    <div class="row mt-3">
      <div class="col-md-12 justify-content-center text-center">
        <!--  ALTTAKİ KODU SİLİP REKLAM KODUNUZU EKLEYİN -->
        <img srcx="https://picsum.photos/170/720" alt="">
        <!--  ÜSTTEKİ KODU SİLİP REKLAM KODUNUZU EKLEYİN -->
      </div>
    </div>
  </div>
</div>
<!-- SAĞ KENAR REKLAM ALANI ÇIKIŞ -->


</div>




</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="sweetalert2.all.min.js"></script>



<?php if (isset($_GET['username'])): ?>
  <?php if (!$sonuc): ?>
    <script type="text/javascript">
      Swal.fire({
        type:"error",
        title:"Kullanıcı Bulunamadı",
        text:"Böyle Bir Kullanıcı Yok",
        confirmButtonText:"Tamam"
      })
    </script>
  <?php endif ?>
<?php endif ?>

<script type="text/javascript">
  $("#gosterbutton").click(function () {
    window.location="<?php echo $sitelink ?>"+$("#username_input").val();
  })
</script>

</body>
</html>