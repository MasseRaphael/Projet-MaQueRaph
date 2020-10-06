<?php

namespace App\Entity;

use App\Repository\JeuxRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JeuxRepository::class)
 */
class Jeux
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_jeu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomJeu(): ?string
    {
        return $this->nom_jeu;
    }

    public function setNomJeu(string $nom_jeu): self
    {
        $this->nom_jeu = $nom_jeu;

        return $this;
    }
}
