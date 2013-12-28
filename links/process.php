<?php

if (isset($_GET['procid'])) {
    $procid = $_GET['procid'];
    switch ($procid) {
        case 's10f88' :
            header('Location:http://localhost/mahasme/admin/docs');
            break;
        case 'd10f54' :
            header('Location:http://localhost/mahasme/documents');
            break;

        case 'a10l93' :
            if ($login -> isUserLoggedIn()) {
                header('Location:http://localhost/mahasme/admin/');
            } else {
                header('Location:http://localhost/mahasme/admin/');
            }

            break;
        default :
            echo "<center><h2 style='color:red; font-size: 25px; margin-top:5%; margin-bottom:5%;'>Error! 404 Page Cannot Found</h2><a href='" . URL . "/admin/'>Go Back</a></center>";
            break;
    }
}else{
    echo "<center><h2 style='color:red; font-size: 25px; margin-top:5%; margin-bottom:5%;'>Error! 404 Page Cannot Found</h2><a href='" . URL . "/admin/'>Go Back</a></center>";
}
