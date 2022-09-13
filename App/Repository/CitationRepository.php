<?php

namespace App\Repository;

use App\Model\Citation;
use App\Repository\ICitationRepository;
use App\Service\Database;
use PDO;

class CitationRepository extends Database implements ICitationRepository
{


    public function add(Citation $citation)
    {
        $stmt = $this->db->prepare("INSERT INTO citation (auteur, citation) VALUES (:auteur, :citation)");
        $stmt->bindValue(':auteur', $citation->getAuteur());
        $stmt->bindValue(':citation', $citation->getCitation());
        $stmt->execute();
        $stmt = null;
    }


    public function findAll()
    {
        $stmt = $this->db->prepare('SELECT * FROM citation');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $stmt->fetchAll();

        $stmt = null;
        $citations = [];
        foreach ($arr as $citation) {
            $p = new Citation($citation['auteur'], $citation['citation']);
            $p->setId($citation['id']);
            $citations[] = $p;
        }
        return $citations;
    }
}
