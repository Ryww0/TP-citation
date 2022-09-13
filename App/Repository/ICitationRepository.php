<?php

namespace App\Repository;

use App\Model\Citation;

interface ICitationRepository
{
    public function add(Citation $citation);

    //public function remove();

    public function findAll();

    //public function update();
}
