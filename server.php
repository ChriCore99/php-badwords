<?php 
    // richiesta con metodo GET
    var_dump($_GET);

    $paragrafo = $_GET['paragrafo'];

    // richiesta con metodo POST
    var_dump($_POST);

    $parola_da_censurare = $_POST['parola_da_censurare'];

    $lunghezzaParolaBrutta = strlen($parola_da_censurare);

    $parolaCensurata = str_replace($parola_da_censurare, '***', $parola_da_censurare);

    $lunghezzaParolaCensurata = strlen($parolaCensurata); 

    $carateriCambiati = $lunghezzaParolaBrutta - $lunghezzaParolaCensurata;
?>

<div>
    parola da censurare = <?php echo $parola_da_censurare; ?>
</div>

<div>
    lunghezza parola da censurata = <?php echo $lunghezzaParolaBrutta; ?>
</div>

<div>
    la parola censurata è = <?php echo $parolaCensurata; ?>
</div>

<div>
    lunghezza parola censurata = <?php echo $lunghezzaParolaCensurata; ?>
</div>

<div>
    i caratteri cambiati sono = <?php echo $carateriCambiati; ?>
</div>