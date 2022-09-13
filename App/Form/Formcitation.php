<?php 
include './App/Service/form.php';

$form = new Form;

$form->debutForm()
    ->ajoutLabelFor('email', 'Email')
    ->ajoutInput('email', 'email', ['id' => 'email', 'class' => 'form-control'])
    ->ajoutLabelFor('password', 'Mot de passe')
    ->ajoutInput('password', 'password', ['id' => 'password', 'class' => 'form-control'])
    ->ajoutBouton('Me connecter', ['class' => 'btn btn-primary'])
    ->finForm();

$loginForm = $form->create();
echo $loginForm;

if (Form::validate($_POST, ['titre', 'description'])) {
    var_dump("ajout d'annonce");
}

if(Form::validate($_POST, ['titre', 'description'])){
    var_dump("modification d'annonce");
}