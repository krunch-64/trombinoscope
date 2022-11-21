<?php 
require_once('../Models/model_login.php');



?>
<form method="POST" action="./Models/model_login.php">
    <label>First name</label>
    <input type="text" name="first_name">
    <label>Password</label> 
    <input type="password" name="password">
    <input type="submit">
    <a href="../Views/register.php">S'inscrire</a>
</form>