<?php

include '../models/homeModel.php';



/*factorisation de sorti de fichier*/
$path = '../';
/*fonction du home model affichant les projects*/
$projects = getProjectData();
/*template*/
$mail = 'amandine.simonnet@homtail.com';
$template = "../view/HomeView";
include "../view/LayoutView.phtml";

