<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web programiranje | ITS</title>
    <meta name="description" content="Ovde napisati opis te strane na kojoj se nalazimo!">
    <meta name="keywords" content="Ovde napisati do 10 kljucnih reci ili fraza odvojenih zarezom!">
    <meta name="author" content="Ime i prezime | mejl adresa">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/novistil.css">
</head>
<body onload="Vreme()">
    <div class="container">  <!-- pocetak omotaca -->

        <?php include "php/header.php";?>
        <?php include "php/nav.php";?>
        <?php include "php/onamasection.php";?>
        <?php include "php/footer.php";?>

    </div>   <!-- kraj omotaca -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vreme.js"></script>
</body>
</html>