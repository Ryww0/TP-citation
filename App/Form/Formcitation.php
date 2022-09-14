<?php

class FormCitation
{
    public static function buildAddCitation()
    {
        $form = new Form();

        $form->debutForm()
            ->ajoutLabelFor('auteur', 'auteur')
            ->ajoutInput('auteur', 'auteur', ['id' => 'auteur', 'class' => 'form-control'])
            ->ajoutLabelFor('citation', 'citation')
            ->ajoutInput('citation', 'citation', ['id' => 'citation', 'class' => 'form-control'])
            ->ajoutBouton('Ajouter une citation', ['class' => 'btn btn-primary'])
            ->finForm();

        return $form;
    }
}
