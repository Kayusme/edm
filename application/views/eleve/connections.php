<?php

$link = mysql_connect('username','localhost','password')
    if(!$link){
        die('Could not be connected: ' .mysql_error() );
    }
$db = mysql_select_db('your_database_connections', $link);
if(!$db){
    die('Error selection on database' .mysql_error() );
}

$required = "SELECT COUNT(notifications) as recuperations FROM revele;";
$result = mysql_query($required) or die('Erreur SQL! <br/>' .$ql.'<br/>' .mysql_error $data_nb = mysql_fetch_array($result));
$nb = ''.$data_nb['recuperation'].'';
$ligne = $nb - 7;
$query  = "SELECT * FROM revele  LIMIT $ligne, $nb";
$rep = mysql_query($query);


if(!$rep){
    $message = 'Invalid query: '.mysql_error() ."n";
    $message = 'Whole query: ' .$query;
    die($message);
}

while($row = mysql_fetch_assoc($rep)){
    echo 'Date: '.$row['notifications'].' - '."n";
    echo 'consommation: ' .$row['console_globale'] . 'KWh,' ."n";
    echo "<br>";
}
mysql_close($link);

?>


