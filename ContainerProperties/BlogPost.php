<?php
namespace App\ContainerProperties;



class BlogPost
{
    use PropertyContainerTrait;

    private string $title;

    private int $id;

    public function getTitle() : string | null
    {
        return $this->title ?? null;
    }

    public function setTitle(string $title):void
    {
        $this->title = $title;
    }

    public function getId(): int | null
    {
        return $this->id ?? null;
    }

    public function setId(int $id):void
    {
        $this->id = $id;
    }

}