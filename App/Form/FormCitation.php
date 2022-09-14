<?php

namespace App\Form;

use App\Service\Form;

class FormCitation
{
    public static function buildAddCitation()
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT.'add')
            ->ajoutLabelFor('auteur', 'auteur')
            ->ajoutInput('auteur', 'auteur', ['id' => 'auteur', 'class' => 'form-control'])
            ->ajoutLabelFor('citation', 'citation')
            ->ajoutInput('citation', 'citation', ['id' => 'citation', 'class' => 'form-control'])
            ->ajoutBouton('Ajouter une citation', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }
}
