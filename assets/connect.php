<?php 
    $serverName = 'localhost';
    $userName = 'root';
    $password = 'sql-online';
    $dbname = 'recherche_project';

    try {
        // connect
        $connect = new PDO("mysql:host=".$serverName.";dbname=".$dbname ,$userName , $password);
        
        //gestion d'erreur  
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "Connexion etablie";
    }
    catch(PDOException $e){
        echo "erreur de connexion ".$e->getMessage();
    }
    
    $connect-> query("SET NAMES UTF8");//Solution encodage UTF8

?>