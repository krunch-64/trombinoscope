<?php
require_once('../librairies/db.php');
if (isset($_POST['first_name']) && isset($_POST['password'])) {
    
}


function get_all_user() 
{
    $db = db_connect();

    $sql = <<<EOD
    SELECT 
        'first_name',
        'password'
    FROM
        'users'
    EOD;
    $userStmt = $db->query($sql);
    return $userStmt->fetchAll(PDO::FETCH_ASSOC);
}