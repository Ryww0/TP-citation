<?php

namespace App\Model;

class Citation
{
    private int $id;
    private string $auteur;
    private string $citation;


    public function __construct(string $auteur, string $citation){
    {
        $this->auteur = $auteur;
        $this->citation = $citation;
    }


    public function getId(): int
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