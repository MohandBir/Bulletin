<?php

namespace Notes\App\Repository;

use Notes\App\Entity\Appreciation;
use PDO;

class AppreciationRepository extends Repository
{
    public function getAppreciation($idUser) 
    {
        $sql = "SELECT * FROM appreciation WHERE id_user=:id_user";
        $request = $this->pdo->prepare($sql);
        $request->execute(['id_user' => $idUser]);
        $request->setFetchMode(PDO::FETCH_CLASS, Appreciation::class);
        $appreciation = $request->fetch();

        return $appreciation;
    }

    public function addAppreciation($appreciation)
    {
        $sql = "INSERT INTO appreciation(comment, mention, id_user) VALUES (:comment, :mention, :id_user)";
        $request = $this->pdo->prepare($sql);
        $request->execute([
            'comment' => $appreciation->getComment(),
            'mention' => $appreciation->getMention(),
            'id_user' => $appreciation->getId_user(),
        ]);
    }

}
