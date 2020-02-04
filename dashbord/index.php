<?php
// $data = file_get_contents('../script/menu.json');
// $menu = json_decode($data, true);
// $menu = $menu["menu"];
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../script/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>online shop</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand">chanzmusic guitar store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" id="home">All Menu</a>
          <a class="nav-item nav-link" id="pembelian">Yamaha</a>
          <a class="nav-item nav-link" id="profil">Gibson</a>
          <a class="nav-item nav-link" id="profil">Fender</a>
         <!--  <a class="nav-item nav-link" id="profil">Rok</a>
          <a class="nav-item nav-link" id="profil">Sepatu</a>
          <a class="nav-item nav-link" id="profil">Celana dalam</a>
          <a clas --><!-- s="nav-item nav-link" id="profil">Tas</a> -->
          <div class="col ml-lg-5">
            <a class="btn btn-danger" href="logout.php">Logout</a>
          </div>
          
        </div>
      </div>
    </div>
  </nav>

  <div class="container">

    <div class="row">
      <div class="col">
        <h1>All Menu</h1><br/>
        <br/>
        <h4>Hai <?php echo $_SESSION['profil'] ?> Silahkan berbelanja :)</h4>
      </div>
    </div>

    <div class="row" id="badan"></div>

    <!-- <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="../img/" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <h5 class="card-title"></h5>
              <button class="btn btn-primary">Beli Sekarang</button>
            </div>
          </div>
        </div>
      </div> -->

    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../script/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../script/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
    // $(document).ready(function() {
    //   $(".nav-link").click(function() {
    //     var menu = $(this).attr("id");
    //     if (menu == "home") {
    //       $(".badan").load("home.php");
    //     }else if (menu == "pembelian") {
    //       $(".badan").load("pembelian.php");
    //     }else if (menu == "profil") {
    //       $(".badan").load("profil.php");
    //     }
    //   });
    //   $(".badan").load("home.php");
    // });

    tampil();


    function tampil(){
      $.getJSON('../script/menu.json', function(data) {
        var menu = data.menu;
        $.each(menu, function(i, data) {
         $("#badan").append('<div class="col-md-4"><div class="card"><img src="../img/'+data.gambar+'" class="card-img-top" alt=""><div class="card-body"><h5 class="card-title">'+data.nama+'</h5><p class="card-text">'+data.deskripsi+'</p><h5 class="card-title">'+data.harga+'</h5><a class="btn btn-primary klik-sini" data-toggle="modal" data-target="#exampleModalScrollable">Beli Sekarang</a></div></div></div>');
       });
      });
    }
    

    $(".nav-link").on('click', function() {
      $(".nav-link").removeClass('active');
      $(this).addClass('active');

      var kategori = $(this).html();
      $("h1").html(kategori);

      if (kategori == "All Menu") {
        $("#badan").html("");
        tampil();
        return;
      }

      $.getJSON('../script/menu.json', function(data) {
        var menu = data.menu;
        var content = '';

        $.each(menu, function(i,data) {
         if (data.kategori == kategori.toLowerCase()) {
          content += '<div class="col-md-4"><div class="card"><img src="../img/'+data.gambar+'" class="card-img-top" alt=""><div class="card-body"><h5 class="card-title">'+data.nama+'</h5><p class="card-text">'+data.deskripsi+'</p><h5 class="card-title">'+data.harga+'</h5><a href="cek-beli.php" class="btn btn-primary">Beli Sekarang</a></div></div></div>';
        }
      });
        $("#badan").html(content);
      });

    });
    $("#exampleModalScrollable").on('click', '.klik-sini', function() {
      
    });
  </script>
</body>
</html>