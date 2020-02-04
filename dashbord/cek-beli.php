<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <center>
    <h1>hai <?php echo $_SESSION['profil']; ?> terima kasih telah mengunjung lemahbang shop</h1><br>
    <h1>Pembelian Berhasil silahkan submit dan pesan lagi</h1><br>
    <button><a href="index.php" onclick="alert('pembelian berhasil')">Submit</a></button>
  </center>
</body>
</html>