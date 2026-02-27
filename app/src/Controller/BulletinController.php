<?php

namespace Notes\App\Controller;

use Notes\App\Repository\UserRepository;

require('vendor/autoload.php');

class BulletinController {

    public function index()
    {
        $userRepo = new UserRepository;
        $users = $userRepo->findAll();

        require('src/view/index.phtml');
        
    }
}