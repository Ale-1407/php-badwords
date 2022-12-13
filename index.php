<?php

$testo = 'Non ci saranno sventolii di bacchette o stupidi incantesimi in questo corso! Come tale, non mi aspetto che molti di voi apprezzino la sottile scienza e 
          l’esatta arte del preparare pozioni, comunque ai pochi, scelti dal fato, che possiedono la predisposizione… io posso insegnare come stregare la mente e 
          irretire i sensi… Posso dire come imbottigliare la fama, approntare la gloria e finanche mettere un fermo alla morte. Tuttavia, magari alcuni di voi sono 
          venuti a Hogwarts in possesso di abilità così formidabili da sentirsi completi abbastanza… da non prestare attenzione!
          (Professor Piton)';

$censura = $_GET['censura'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex-php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <h5 class="text-center p-3"> <em><?php echo $testo ?></em> </h5>
    <p class="text-center">Il testo è lungo <?php echo strlen($testo) ?> caratteri </p>
    <form action="" method="GET" class="my-5 text-center">
        <label for="censura" class="d-block pb-2">Inserisci la parola da censurare</label>
        <input type="text" name="censura">
        <button type="submit">Invio</button>
    </form>

    <h5 class=" text-center p-3"> <em><?php echo str_replace( $censura, '***' , $testo); ?></em> </h5>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>