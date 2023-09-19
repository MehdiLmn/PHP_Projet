<?php

class Movie
{
    private int $id;
    private string $title;
    private int $release_year;
    private string $director;
    private string $category;
    private string $description;
    private string $cover;

    public function __construct(string $title, int $release_year, string $director, string $category, string $description, string $cover){
        $this->title = $title;
        $this->release_year = $release_year;
        $this->director = $director;
        $this->category = $category;
        $this->description = $description;
        $this->cover = $cover;
    }
    

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getReleaseYear(): int
    {
        return $this->release_year;
    }

    public function setReleaseYear(int $release_year): self
    {
        $this->release_year = $release_year;

        return $this;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function setDirector(string $director): self
    {
        $this->director = $director;

        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

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

    public function getCover(): string
    {
        return $this->cover;
    }

    public function setCover(string $cover): self
    {
        $this->cover = $cover;

        return $this;
    }
}