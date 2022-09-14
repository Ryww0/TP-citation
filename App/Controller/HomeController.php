<?php

namespace App\Controller;

use App\Form\FormCitation;
use App\Model\Citation;
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
                'citations' => $this->citationRepository->findAll(),
                'formCitation' => FormCitation::buildAddCitation()
            ]);
    }

    public function add()
    {
        if (isset($_POST) && !empty($_POST)) {
            $citation = new CitationRepository();
            $citation->add(new Citation($_POST['auteur'], $_POST['citation']));
        } else {
            var_dump('not ok!');
        }
    }
}