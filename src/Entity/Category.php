<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nameCat = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionCat = null;

    /**
     * @var Collection<int, annonce>
     */
    #[ORM\OneToMany(targetEntity: annonce::class, mappedBy: 'category')]
    private Collection $annonces;

    public function __construct()
    {
        $this->annonces = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameCat(): ?string
    {
        return $this->nameCat;
    }

    public function setNameCat(string $nameCat): static
    {
        $this->nameCat = $nameCat;

        return $this;
    }

    public function getDescriptionCat(): ?string
    {
        return $this->descriptionCat;
    }

    public function setDescriptionCat(string $descriptionCat): static
    {
        $this->descriptionCat = $descriptionCat;

        return $this;
    }

    /**
     * @return Collection<int, annonce>
     */
    public function getAnnonces(): Collection
    {
        return $this->annonces;
    }

    public function addAnnonce(annonce $annonce): static
    {
        if (!$this->annonces->contains($annonce)) {
            $this->annonces->add($annonce);
            $annonce->setCategory($this);
        }

        return $this;
    }

    public function removeAnnonce(annonce $annonce): static
    {
        if ($this->annonces->removeElement($annonce)) {
            // set the owning side to null (unless already changed)
            if ($annonce->getCategory() === $this) {
                $annonce->setCategory(null);
            }
        }

        return $this;
    }
}
