<?php
include '../models/workModel.php';
/*include '../models/eventModel.php';*/

/*$events = getEvent();*/
/*défini quel projet la page va afficher*/
if (!isset($_GET['id'])){
    $idProject = 1;
}else{
    $idProject = $_GET['id'];
}

/*affiche l'image principale du projet*/
$projectMainData = getProjectData($idProject);

/*affiche le contenu de projet*/
$projectPictures = getProjectPicture($idProject);

/*affiche le ficaption*/
$projectTitles = getProjectTitle($idProject);

/*factorisation du retour de dossier*/
$path = "../";

/*template*/
$mail = 'amandine.simonnet@homtail.com';
$template = "../view/WorkView";
include "../view/LayoutView.phtml";
/*********************************************************************!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * FAILLE XSS WORKVIEW LIGNE 27
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
