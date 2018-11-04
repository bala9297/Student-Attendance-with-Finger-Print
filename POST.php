<?php

if(isset($_POST['submit']))
{
echo 'Username : '.$_POST['username'].'<br>';
echo 'Password : '.$_POST['password'].'<br>';
if($_POST['username']=='mark'&& $_POST['password']==345)
{
    echo'username and password are correct';
}
else 
 {
    echo'username and password are not  correct';
 
}
}

?>