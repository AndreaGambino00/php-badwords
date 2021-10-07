<!-- Creare una variabile con un paragrafo di testo a vostra scelta. -->
<?php
    $benvenuto = 'Benvenuto su Php, questa sarà la tua fine.';
    var_dump($benvenuto);
    $badword= $_GET['Badword'];
    var_dump($_GET);

?>

<!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
<p><?php echo $benvenuto ?></p>
<p>Lunghezza= <?php echo strlen($benvenuto)?></p>

<p> <?php $badword = str_replace($badword, '***', $benvenuto);
     echo $badword; ?> </p>
    <p>Lunghezza=  <?php echo strlen($badword); ?></p>
<!-- Una parola da censurare viene passata dall'utente tramite parametro GET. -->
<!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->