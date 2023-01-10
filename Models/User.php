<?php namespace user;

require_once('./librairies/db.php');

class User {
/*--------------------------------------------------------------------------------------
Les attribues
--------------------------------------------------------------------------------------*/
protected $userName = "";

protected $isAdmin = 0;

protected $password = "";

protected $image ;


/*--------------------------------------------------------------------------------------
les méthods 
--------------------------------------------------------------------------------------*/
public function __construct(string $userName,int $isAdmin,string $password,string $password_confirm,$image)
{
    $this->userName = $userName;
    $this->isAdmin = $isAdmin;
    $this->$image = $image;
    $this->hash_password($password,$password_confirm);
}


public function add_user() 
{
    
    $db = db_connect();

    $sql = <<<EOD
    INSERT INTO `users` (`username`,`admin`,`password`)
    VALUE (:username,:admin,:password)
    EOD;
    $addUser = $db->prepare($sql);
    $addUser->bindValue(':username',$this->getUserName());
    $addUser->bindValue(':admin',$this->getisAdmin());
    $addUser->bindValue(':password',$this->getPassword());
    $addUser->execute();
    
}

/** hash_password gére la comparésont des deux mots de passe deu formulaire et du hashage du mot de passe
 * @param string $password
 * @param string $password_confirm
 */
private function hash_password($password,$password_confirm) 
{
    if($password == $password_confirm) 
    {
        if(isset($password)) {
            $this->password = hash("sha256",$password);
        }  
    }
    else{ $this->password = 'error';}
}

public function update_user()
{

    $db = db_connect();
    
    $sql = "UPDATE `users` SET `username`= :username,`admin` =:admin,`password`=:password "; 
    $update_user = $db->prepare($sql);
    $update_user->bindValue(':username',$this->getUserName());
    $update_user->bindValue(':admin',$this->getisAdmin());
    $update_user->bindValue(':password',$this->getPassword());
    $update_user->execute();
}

public function delete_user(int $id)
{
    $db = db_connect();
    $sql = "DELETE FROM `users` WHERE id = ':id'";
    $deleteuser = $db->prepare($sql);
    $deleteuser->bindValue(':id',$id);
    $deleteuser->execute();
}


/*--------------------------------------------------------------------------------------
SETTER
--------------------------------------------------------------------------------------*/
public function  setUserName($userName): self 
{
    return $this->userName = $userName;
}

public function setisAdmin($isAdmin) : bool
{
    return $this->isAdmin = $isAdmin;
}

public function setPassword($password) : self
{
    return $this->password = $password;
}
/*--------------------------------------------------------------------------------------
GETTER
--------------------------------------------------------------------------------------*/

public function getUserName() 
{
    return $this->userName;
}

public function getisAdmin()
{
    return $this->isAdmin;
}

public function getPassword()
{
    return $this->password;
}
}