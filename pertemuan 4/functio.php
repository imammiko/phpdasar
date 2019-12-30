<?
function salam($waktu,$nama){
    return "selamat $waktu,$nama";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan function</title>
</head>
<body>
    <h1><?= salam("siang","imam");?></h1>
</body>
</html>