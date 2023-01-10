<?php 
require_once('./librairies/db.php');
require_once('User.php');

if (isset($_POST['new_username'])&&isset($_POST['new_password'])&&isset($_POST['new_password_confirm']))
{
    $user = new user\User($_POST['new_username'],false,$_POST['new_password'],$_POST['new_password_confirm'],null);
    if($user->getPassword() !== "error") 
    {
        
        $user->add_user();
    }
    else 
    {
        echo('mot de passe incorecté');
    }
}

