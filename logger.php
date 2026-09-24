<?php

function write_log($niveau = "INFO", $user_id = "ANONYMOUS", $action = "UNKNOWN_ACTION", $target_id = "SELF")
{
    // Valeurs par défaut si les variables sont vides

    // Récupération de l'adresse IP client
    $ip = $_SERVER['REMOTE_ADDR'];

    // Date et heure au format YYYY-MM-DD HH:mm:ss
    $date = date("Y-m-d H:i:s");

    // Format : [Date/Heure] [NIVEAU] [USER_ID] [IP] - ACTION [TARGET_ID]

    $log_line = "[{$date}] [{$niveau}] [{$user_id}] [{$ip}] - {$action} [{$target_id}] \n";

    // Écriture dans le fichier
    $fp = fopen('app.log', 'a');
    if ($fp) {
        fwrite($fp, $log_line);
        fclose($fp);
    }
}
