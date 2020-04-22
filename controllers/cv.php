<?php
include '../models/cvModel.php';

$cvs= getCvLine();

/*template*/
$mail = 'amandine.simonnet@homtail.com';
$template = "../view/cvView";
include "../view/LayoutView.phtml";
