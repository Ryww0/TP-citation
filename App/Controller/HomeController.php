<?php

namespace App\Controller;

use App\Service\View;
use App\Repository\CitationRepository;

class HomeController
{
    use View;

    private CitationRepository $citationRepository;

    public function invoke()
    {
        return $this->render(
            SITE_NAME . ' - Citation',
            'home.php',
            [
                'citations' => $this->citationRepository->findAll()
            ]);
    }
}