<?php
if($_POST){
    $json = file_get_contents("invites.json");
    $invites = json_decode($json);
    $invite["name"] = $_POST["name"];
    $invite["templo"] = $_POST["templo"];
    $invite["fiesta"] = $_POST["fiesta"];
    $invites[] = $invite;
    file_put_contents("invites.json",json_encode($invites));
    //var_dump($invites);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BIANCA Y GUIDO</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    </head>
<header class="py-5 bg-image-full" style="background-image: url('./assets/img/bianguido.jpg')">
            <div class="text-center my-5">
                <h1 class="text-white fs-3 fw-bolder">BIANCA & GUIDO</h1>
                <p class="text-white mb-0">02-09-2021</p>
            </div>
        </header>
        <div style="margin: 3rem">
            <h1 class="text-center fw-bolder " style="letter-spacing:1px" >
                GRACIAS
            </h1>
        </div>
        <div class="py-5 bg-image-full" style="background-image: url('./assets/img/bianguido2.jpg')">
            <div style="height: 20rem"></div>
        </div>
</html>