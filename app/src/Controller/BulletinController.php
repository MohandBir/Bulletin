<?php

namespace Notes\App\Controller;

use Notes\App\Repository\NoteRepository;
use Notes\App\Repository\UserRepository;

require('vendor/autoload.php');

class BulletinController {

    public function index()
    {
        $userRepo = new UserRepository;
        $users = $userRepo->findAll();

        require('src/view/index.phtml');
        
    }
    public function show()
    {
        $id = ($_GET['id']) ?? null;
        $userRepo = new UserRepository;
        $user = $userRepo->findOne($id);

        $noteRepo = new NoteRepository;
        $notes = $noteRepo->getNotesById($id);


        require('src/view/show.phtml');
        
    }
}