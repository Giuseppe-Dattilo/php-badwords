<?php

$badword = trim($_GET['badword']);

$paragraph = trim($_GET['paragraph']);
$paragraph_length = strlen($paragraph);

$censored_paragraph = str_replace($badword, '***' , $paragraph);
$censored_paragraph_length = strlen($censored_paragraph);

?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Giuseppe-Dattilo">
        <title>Result</title>

        <!-- Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
<body>
    <div class="container text-center">
        <h1 class="mt-5">Paragrafo Originale</h1>
       <p><?= $paragraph ?></p> 
       <p class="mb-5">Il paragrafo originale era lungo <b><?= $paragraph_length ?></b> caratteri</p>
    </div>
    <hr>
    <div class="container text-center">
        <h1 class="mt-5">Paragrafo Censurato</h1>
       <p><?= $censored_paragraph ?></p> 
       <p>Il paragrafo censurato è lungo <strong><?= $censored_paragraph_length ?></strong> caratteri</p>
    </div>
    
</body>
</html>