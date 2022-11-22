<?php
include_once('./views/register.php');

/** check_password
 * @param string $pws1
 * @param string $pws2
 * @return string pws_hash
 */
function check_password(string $pws1 ,string $pws2) 
{
    if ($pws1 === $pws2) 
    {
        return true;
    }
    else {return false;}
}