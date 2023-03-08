<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> 𝐖𝐞𝐛 𝐋𝐚𝐲𝐚𝐧𝐚𝐧 𝐏𝐞𝐧𝐠𝐚𝐝𝐮𝐚𝐧 𝐌𝐚𝐬𝐲𝐚𝐫𝐚𝐤𝐚𝐭 | Clara Sonia Arnelita </title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body style="background-image: url('assets/img/purple.jpeg'); background-size: cover;">
  <nav class="navbar navbar-expand-lg" style="background-color: purple;">
    
  <div class="container">
    <a class="navbar-brand" href="index.php">  𝐖𝐞𝐛 𝐋𝐚𝐲𝐚𝐧𝐚𝐧 𝐏𝐞𝐧𝐠𝐚𝐝𝐮𝐚𝐧 𝐌𝐚𝐬𝐲𝐚𝐫𝐚𝐤𝐚𝐭 </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
  </div>
</nav>

<?php
if (isset($_GET['page'])) {
    $page= $_GET['page'];

switch ($page) {
    case 'login':
        include 'login.php';
        break;
        case 'registrasi':
            include 'registrasi.php';
            break;

        default:
        echo "halaman tidak tersedia";
        break;
}
} else{
    include 'login.php';
}

?>
<br><br><br>

<footer class="footer py-2 bg-purple">
    <div class="container">
        <p class="text-center">UKK RPL 2023 | Clara Sonia Arnelita | SMKN 1 KARAWANG</p>
    </div>
</footer>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>