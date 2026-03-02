<?php

namespace Notes\App\Controller;

use Notes\App\Entity\Appreciation;
use Notes\App\Repository\AppreciationRepository;
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
        $id = ((int)$_GET['id']) ?? null;
        $userRepo = new UserRepository;
        $user = $userRepo->findOne($id);

        $noteRepo = new NoteRepository;
        $notes = $noteRepo->getNotesById($id);

        $apprRepo = new AppreciationRepository;
        $appreciation = $apprRepo->getAppreciationByUserId($id);

        require('src/view/show.phtml');       
    }

    public function add()
    {
        $idUser = ((int)$_GET['id']) ?? null;

        if (!empty($_POST)){
            $appreciation = new Appreciation; 
            $appreciation->setComment($_POST['comment'])
            ->setMention($_POST['mention'])
            ->setId_user($idUser);
   
            $appreciatRepo = new AppreciationRepository;
            $appreciatRepo->addAppreciation($appreciation);

            header("location: index.php?route=show&id=$idUser");
            exit;
        }
        require('src/view/add.phtml');
    }

    public function delete()
    {
        $idUser = ((int)$_GET['id']) ?? null;

        $apprRepo = new AppreciationRepository;
        $apprRepo->delete($idUser);

        header("location: index.php?route=show&id=$idUser");
    }

    public function update()
    {

    
        if (!empty($_POST)){
            $appreciation = new Appreciation; 
            $appreciation->setComment($_POST['comment'])
            ->setMention($_POST['mention'])
            ->setId_user($_POST['idUser'])
            ;
   
            $appreciatRepo = new AppreciationRepository;
            $appreciatRepo->updateAppreciation($appreciation);
            
            header("location: index.php?route=show&id=".$appreciation->getId_user());
            exit;
        }

        $id = ((int)$_GET['id']) ?? null;
        $apprRepo = new AppreciationRepository;
        $appreciation = $apprRepo->getAppreciationById($id);
        require('src/view/update.phtml');

    }
   

}
