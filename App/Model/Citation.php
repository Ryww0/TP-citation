<?php

namespace App\Model;

Class Citation
{

    private string $id;
    private string $auteur;
    private string $citation;


    public function __construct(string $id, string $auteur, string $citation);

    {
        $this->id = uniqid();
        $this->auteur = $auteur;
        $this->citation = $citation;
    }


    public function getId(): string
    {
        return $this->id;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function getCitation(): string
    {
        return $this->citation;
    }
}