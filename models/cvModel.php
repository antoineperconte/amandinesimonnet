<?php
include '../config/db_connection.php';
/* même fonction quel l'admincvmodel affiche le contenu du cv*/
function getCvLine()
{
    $db = getDb();
    $query = $db->query('
SELECT
type,
year,
title,
content
FROM
cv
')->fetchAll(PDO::FETCH_ASSOC);

    $cvLines = $query;
    return $cvLines;
}