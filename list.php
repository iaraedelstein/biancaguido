
<style>
    .lista:nth-child(odd){
        background:#ced4da;
        margin:0px;
        padding:10px;
    }
</style>
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
    <body>
        <table style="width: -webkit-fill-available;">
            <thead>
                <tr>
                    <td>NOMBRE</td>
                    <td>TEMPLO</td>
                    <td>FIESTA</td>
                </tr>
            </thead>
            <tbody>
            <?php
                $list = json_decode(file_get_contents("invites.json"));
                for($i = 0;$i < count($list);$i++){
                    echo '<tr class="lista"> <td>'. $list[$i]->name."</td><td>".$list[$i]->templo."</td><td>".$list[$i]->fiesta."<td></tr>";
                }
            ?>
            </tbody>
        </table>
    </body>
</html>
