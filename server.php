<?php 
    // richiesta con metodo POST
    var_dump($_POST);

    $paragrafo = $_POST['paragrafo'];

    $parola_da_censurare = $_POST['parola_da_censurare'];

    $lunghezzaParolaBrutta = strlen($parola_da_censurare);

    $paragrafoCensurato = str_replace($parola_da_censurare, '***', $paragrafo);

    $lunghezzaParolaCensurata = strlen($paragrafoCensurato); 
?>

<div>
    parola da censurare = <?php echo $parola_da_censurare; ?>
</div>

<div>
    lunghezza parola da censurata = <?php echo $lunghezzaParolaBrutta; ?>
</div>

<div>
    la parola censurata è = <?php echo $paragrafoCensurato; ?>
</div>

<div>
    lunghezza parola censurata = <?php echo $lunghezzaParolaCensurata; ?>
</div>