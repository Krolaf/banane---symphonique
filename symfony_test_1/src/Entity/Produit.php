<?php

namespace App\Entity;

class Produit
{
    private ?int $id = null;
    private string $name;
    private float $price;
    private string $description;
    private ?string $status = null; // new, featured, etc.
    private int $stock = 0; // Nombre en stock
    private array $tags = []; // Liste des tags associés

    /**
     * Constructeur pour initialiser les propriétés
     */
    public function __construct(
        string $name,
        float $price,
        string $description,
        ?string $status = null,
        int $stock = 0,
        array $tags = []
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->status = $status;
        $this->stock = $stock;
        $this->tags = $tags;
    }

    // Getters et Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function addTag(string $tag): self
    {
        if (!in_array($tag, $this->tags)) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTag(string $tag): self
    {
        $this->tags = array_filter($this->tags, fn($t) => $t !== $tag);

        return $this;
    }
}
?>