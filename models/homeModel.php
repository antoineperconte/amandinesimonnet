<?php

include '../config/db_connection.php';

/* recupere les photos principales, les titres et les années dans la bd*/
function getProjectData()
{
    $db = getDb();
    $query = $db->prepare('
SELECT
id,
name,
text,
mainPicture,
projectTitle,
projectYear
FROM
projects
ORDER BY
projectYear DESC
');

    $query->execute();
    $projects = $query->fetchAll();
    return $projects;

}

