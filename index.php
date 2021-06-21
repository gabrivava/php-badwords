<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->        
<?php 
    $paragrafo = 'Lorem ciao ipsum dolor sit amet consectetur, adipisicing elit. Perferendis magnam quos fuga qui assumenda aspernatur recusandae ciao  aperiam rerum at odio laudantium praesentium, non ciao sed natus eum veniam lorem! Reiciendis totam tempore perferendis? Lorem Deserunt ratione recusandae error repudiandae officiis ciao molestias porro.';

    $censura = $_GET['word'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>php-badwords</h1>
    <h2>Paragrafo originale</h2>
    <?php echo $paragrafo; ?>    

    <h2>Paragrafo modificato</h2>
    <?php 
        echo str_replace($censura, '***', $paragrafo);
    ?>
    <h3>Lunghezza paragrafo <?php echo strlen($paragrafo); ?></h3>
</body>
</html>