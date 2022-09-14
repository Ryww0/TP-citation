<?php

namespace App\Controller;

use App\Form\FormCitation;
use App\Model\Citation;
use App\Service\Input;
use App\Service\Redirect;
use App\Service\View;
use App\Repository\CitationRepository;
use App\Validator\Validation;

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
        if (Input::exists()) {
            $val = new Validation;
            $val->name('citation')->value(Input::get('citation'))->required();
            $val->name('auteur')->value(Input::get('auteur'))->required();
            if ($val->isSuccess()) {
                $design = Input::get('citation');
                $auteur = Input::get('auteur');
                $citation = new Citation($design, $auteur);
                $this->citationRepository->add($citation);
                Redirect::to('/');
            }
        }
        Redirect::to('/');
    }
}