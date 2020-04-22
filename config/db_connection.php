<?php

//	Connexion à la base de données
function getDb(){
    try {
        $db = new PDO( 'mysql:host=localhost;dbname=amandine_simonnet;charset=UTF8', "root", "" );

    }
    catch( PDOException $Exception ) {
        throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
    }

    return $db;
}
