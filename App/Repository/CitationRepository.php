<?php

namespace App\Repository;

use App\Model\Citation;
use App\Repository\ICitationRepository;
use App\Service\Database;
use PDO;

class CitationRepository extends Database implements ICitationRepository
{


    public function add()
    {
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
            $p = new Citation($citation[''], $citation['']);
            $p->setId($citation['']);
            $citations[] = $p;
        }
        return $citations;
    }
}
