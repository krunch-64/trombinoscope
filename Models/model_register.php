<?php 
require_once('./librairies/db.php');
require_once('Controler/controler_register.php');

if (isset($_POST['new_first_name'])&&isset($_POST['new_password'])&&isset($_POST['new_password_confirm']))
{
    if (check_password($_POST['new_password'],$_POST['new_password_confirm']) === true ) 
    {
        add_user($_POST['new_first_name'],$_POST['new_last_name'],$_POST['new_password']);
    }
    else {echo "authentification incorect ";}
    
}

function add_user(string $first_name,string $last_name,string $password) 
{
    echo $password;
    $db = db_connect();

    $sql = <<<EOD
    INSERT INTO `users` (`first_name`,`last_name`,`password`)
    VALUE (:first_name,:last_name,HASHBYTES('SHA1',':password'))
    EOD;
    $addUser = $db->prepare($sql);
    $addUser->bindValue(':first_name',$first_name);
    $addUser->bindValue(':last_name',$last_name);
    $addUser->bindValue(':password',$password);
    if($addUser->execute()) {
        session_start();
        $_SESSION['newsession']=$first_name.', '.$last_name;
        header('Location :../index.php?option=home');
    }
    
}