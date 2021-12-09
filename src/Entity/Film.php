<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

/**
 * @ORM\Entity(repositoryClass=FilmRepository::class)
 */
class Film
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomFilm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienFilm;

    /**
     * @ORM\Column(type="integer")
     */
    private $notePresseFilm;

    /**
     * @ORM\Column(type="date")
     */
    private $datefilm;


    /**
     * @ORM\Column(type="string",length=10000)
     */
    private $resumeFilm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseImageCouvertureFilm;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $realisateurFilm;

    /**
     * @ORM\Column(type="boolean", length=5)
     */

    private $sommeilFilm;
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $genre;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="films")
     */
    private $favorisFilm;

    public function getGenre()
    {
        return $this->genre;
    }


    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFilm(): ?string
    {
        return $this->nomFilm;
    }

    public function setNomFilm(string $nomFilm): self
    {
        $this->nomFilm = $nomFilm;

        return $this;
    }

    public function getLienFilm(): ?string
    {
        return $this->lienFilm;
    }

    public function setLienFilm(string $lienFilm): self
    {
        $this->lienFilm = $lienFilm;

        return $this;
    }

    public function getNotePresseFilm(): ?int
    {
        return $this->notePresseFilm;
    }

    public function setNotePresseFilm(int $notePresseFilm): self
    {
        $this->notePresseFilm = $notePresseFilm;

        return $this;
    }

    public function getDatefilm(): ?\DateTimeInterface
    {
        return $this->datefilm;
    }

    public function setDatefilm(\DateTimeInterface $datefilm): self
    {
        $this->datefilm = $datefilm;

        return $this;
    }



    public function getResumeFilm(): ?string
    {
        return $this->resumeFilm;
    }

    public function setResumeFilm(string $resumeFilm): self
    {
        $this->resumeFilm = $resumeFilm;

        return $this;
    }

    public function getAdresseImageCouvertureFilm(): ?string
    {
        return $this->adresseImageCouvertureFilm;
    }

    public function setAdresseImageCouvertureFilm(string $adresseImageCouvertureFilm): self
    {
        $this->adresseImageCouvertureFilm = $adresseImageCouvertureFilm;

        return $this;
    }

    public function getRealisateurFilm(): ?string
    {
        return $this->realisateurFilm;
    }

    public function setRealisateurFilm(string $realisateurFilm): self
    {
        $this->realisateurFilm = $realisateurFilm;

        return $this;
    }
    public function isSommeilFilm(): ?bool
    {
        return $this->sommeilFilm;
    }
    public function getSommeilFilm()
    {
        return $this->sommeilFilm;
    }

    public function setSommeilFilm($sommeilFilm)
    {
        $this->sommeilFilm = $sommeilFilm;

        return $this;
    }

    public function __construct()
    {
        $this->datefilm = new \DateTime();
        $this->favorisFilm = new ArrayCollection();
    }




    //   public function __toString(){
    //       return $this->getNomFilm();
    //   }

    /**
     * @return Collection|User[]
     */
    public function getFavorisFilm(): Collection
    {
        return $this->favorisFilm;
    }

    public function addFavorisFilm(User $favorisFilm): self
    {
        if (!$this->favorisFilm->contains($favorisFilm)) {
            $this->favorisFilm[] = $favorisFilm;
        }

        return $this;
    }

    public function removeFavorisFilm(User $favorisFilm): self
    {
        $this->favorisFilm->removeElement($favorisFilm);

        return $this;
    }




}
