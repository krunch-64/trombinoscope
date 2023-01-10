<?php
require_once('../librairies/db.php');

if (isset($_POST['first_name']) && isset($_POST['password'])) {
    check_password($password);
}


function check_password(string $password) 
{
    $db = db_connect();

    $sql = <<<EOD
     SELECT * from users WHERE password:password=password
    EOD;
    $userStmt = $db->prepare($sql);
    $userStmt->bindValue(':password', $password);
    return $userStmt->execute();
}
?>
<?php 



?>

