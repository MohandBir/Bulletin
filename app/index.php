<?php

use Notes\App\Controller\BulletinController;

require 'vendor/autoload.php';

if(isset($_GET['route'])) {
    $route = $_GET['route'];
} else {
    $route ='index';
}

$bulletinController = new BulletinController;

if ($route === 'index') {
    $bulletinController->index();
} else {
    echo '404 Page n\'est pas trouvée';
}