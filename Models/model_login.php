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


// function check_password() {
//     $users[0] = get_all_user();
//     foreach($users as $user) {   

//        var_dump($user) ;
       
//         if (password_verify($_POST['password'],$user['password'])) {
//             start_session();
//             $_SESSION['id'] = $user['first_name']; 
//             echo'connecté';
//             header('Location:../index.php?action=list');
//         }
//     }
//}

?>

