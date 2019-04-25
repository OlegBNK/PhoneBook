<?php

class Language
{
    protected $id;

    protected $title;

    public function getId()
    {
        return $this->id;
    }

    public function setId(IdentifierValueObject $id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}