<?php
require_once('../Models/model_register.php');

?>

<form method="POST" action="">
    <label>First name</label>
    <input type="text" name="new_first_name">
    <label>Last name</label>
    <input type="text" name="new_last_name">
    <label>Password</label> 
    <input type="password" name="new_password">
    <label>confirm password</label> 
    <input type="password" name="new_password_confirm">
    <input type="submit">
</form>


