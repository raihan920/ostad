<?php

// admin, manager, and user 

$homePage = "";

if($role == 'admin'){
    $homePage = 'admin-home.php';
}else if($role == 'manager'){
    $homePage = 'manager-home.php';
}else if($role == 'user'){
    $homePage = 'user-home.php';
}

?>