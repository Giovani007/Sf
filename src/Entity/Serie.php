<?php

namespace App\Entity;

use App\Repository\SerieRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity(repositoryClass=SerieRepository::class)
 */
class Serie
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
    private $nomSerie;

    /**
     * @ORM\Column(type="integer")
     */
    private $notePresseSerie;

    /**
     * @ORM\Column(type="date")
     */
    private $dateserie;


    /**
     * @ORM\Column(type="string", length=100000)
     */
    private $resumeSerie;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $adresseImageCouvertureSerie;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $realisateurSerie;

    /**
     * @ORM\Column(type="boolean", length=5)
     */
    private $sommeilSerie;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $genre;

    public function getGenre()
    {
        return $this->genre;
    }


    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }




    public function getNomSerie(): ?string
    {
        return $this->nomSerie;
    }

    public function setNomSerie(string $nomSerie): self
    {
        $this->nomSerie = $nomSerie;

        return $this;
    }

    public function getNotePresseSerie(): ?int
    {
        return $this->notePresseSerie;
    }

    public function setNotePresseSerie(int $notePresseSerie): self
    {
        $this->notePresseSerie = $notePresseSerie;

        return $this;
    }

    public function getDateserie(): ?\DateTimeInterface
    {
        return $this->dateserie;
    }

    public function setDateserie(\DateTimeInterface $dateserie): self
    {
        $this->dateserie = $dateserie;

        return $this;
    }



    public function getResumeSerie(): ?string
    {
        return $this->resumeSerie;
    }

    public function setResumeSerie(string $resumeSerie): self
    {
        $this->resumeSerie = $resumeSerie;

        return $this;
    }

    public function getAdresseImageCouvertureSerie(): ?string
    {
        return $this->adresseImageCouvertureSerie;
    }

    public function setAdresseImageCouvertureSerie(string $adresseImageCouvertureSerie): self
    {
        $this->adresseImageCouvertureSerie = $adresseImageCouvertureSerie;

        return $this;
    }

    public function getRealisateurSerie(): ?string
    {
        return $this->realisateurSerie;
    }

    public function setRealisateurSerie(string $realisateurSerie): self
    {
        $this->realisateurSerie = $realisateurSerie;

        return $this;
    }

    public function getSommeilSerie()
    {
        return $this->sommeilSerie;
    }

    public function setSommeilSerie( $sommeilSerie)
    {
        $this->sommeilSerie = $sommeilSerie;

        return $this;
    }
    public function __construct()
    {
        $this->dateserie = new \DateTime();
    }

}
