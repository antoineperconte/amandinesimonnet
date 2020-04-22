<?php
include '../config/db_connection.php';


/* id du projet choisi*/
function getProjectData($id)
{
    $db=getDb();
    $query = $db->prepare('
SELECT
id,
mainPicture,
text,
projectTitle,
name,
sideText,
projectYear
FROM
projects
WHERE id = ?
');

    $query->execute([$id]);
    $projectData = $query->fetch();
    return $projectData;
}
/* données contenu dans les projets */
function getProjectPicture($id)
{
    $db=getDb();
$query = $db->prepare('
    SELECT
    id,
    projectId,
    url,
    title,
    date,
    other
    From picture
    WHERE projectId = ?
    ORDER BY id
    ');
$query->execute([$id]);
$pictures = $query->fetchAll();
return $pictures;
}
/*recupere le text des projets pour le ficaption*/
function getProjectTitle($id)
{
    $db=getDb();
    $query = $db->prepare('
SELECT
id,
projectTitle
FROM
projects
ORDER BY
projectYear DESC
');

    $query->execute([$id]);
    $titleListes = $query->fetchAll();
    return $titleListes;
}

