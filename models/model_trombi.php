<?php 
require_once('./librairies/db.php');

function get_all_trombi() 
{
    $db = db_connect();

    $sql = <<<EOD
    SELECT
        *
    FROM 
        `schools`    
    EOD;

    $allStmt = $db->query($sql);
    $allStmt->execute();
    $result = $allStmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

