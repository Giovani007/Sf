<?php

namespace App\Entity;

use App\Repository\FavorisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FavorisRepository::class)
 */
class Favoris
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
    private $nomOeuvre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;
    

    /**
     * @ORM\Column(type="string",length=10000)
     */
    private $resumeFilm;

    public function getResumeFilm(): ?string
    {
        return $this->resumeFilm;
    }

    public function setResumeFilm(string $resumeFilm): self
    {
        $this->resumeFilm = $resumeFilm;

        return $this;
    }



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseImageCouvertureFilm;

    public function getAdresseImageCouvertureFilm(): ?string
    {
        return $this->adresseImageCouvertureFilm;
    }

    public function setAdresseImageCouvertureFilm(string $adresseImageCouvertureFilm): self
    {
        $this->adresseImageCouvertureFilm = $adresseImageCouvertureFilm;

        return $this;
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomOeuvre(): ?string
    {
        return $this->nomOeuvre;
    }

    public function setNomOeuvre(string $nomOeuvre): self
    {
        $this->nomOeuvre = $nomOeuvre;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
