<?php

namespace App\Controller;

use App\Service\View;
use App\Repository\CitationRepository;

class HomeController
{
    use View;

    private CitationRepository $citationRepository;

    public function __construct()
    {
        $this->citationRepository = new CitationRepository();
    }

    public function invoke()
    {
        return $this->render(
            SITE_NAME . ' - Citation',
            'home.php',
            [
                'citations' => $this->citationRepository->findAll()
            ]);
    }

    public function add()
    {
        return $this->render(
            SITE_NAME . ' - Citation',
            'home.php',
            [
                'citations' => $this->citationRepository->add($_POST[''])
            ]);
    }
}